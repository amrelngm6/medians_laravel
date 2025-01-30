from flask import Flask, request, jsonify
from transformers import pipeline,T5Config, T5ForConditionalGeneration, T5Tokenizer

app = Flask(__name__)
qa_pipeline = pipeline("question-answering", model="deepset/roberta-base-squad2")


def run_model(model_name, input_string, **generator_args):
    tokenizer = T5Tokenizer.from_pretrained(model_name)
    model = T5ForConditionalGeneration.from_pretrained(model_name)
    input_ids = tokenizer.encode(input_string, return_tensors="pt")
    res = model.generate(input_ids, **generator_args)
    output = tokenizer.batch_decode(res, skip_special_tokens=True)
    return output


@app.route("/analyse", methods=["POST"])
def analyse():
    data = request.json
    result = run_model(data["model"], data["message"])
    return jsonify(result)


@app.route("/answer", methods=["POST"])
def answer_question():
    data = request.json
    result = qa_pipeline(question=data["question"], context=data["context"])
    return jsonify(result)



@app.route("/query", methods=["POST"])
def query_sql():
    data = request.json
    user_input = data.get("query")
    db_schema = data.get("schema")
    model = data.get("model", "juierror/flan-t5-text2sql-with-schema-v2")

    # Convert text to SQL
    text2sql_pipeline = pipeline("text2text-generation", model=model)
    sql_query = generate_sql_query(user_input, db_schema)
    
    return jsonify({"query": sql_query})

    
# Load the model
def generate_sql_query(user_input, db_schema):
    prompt = f"Schema: {db_schema}\nQuestion: {user_input}\nSQL:"
    result = text2sql_pipeline(prompt, max_length=512, truncation=True)
    return result[0]['generated_text']

if __name__ == "__main__":
    app.run(port=5000)
