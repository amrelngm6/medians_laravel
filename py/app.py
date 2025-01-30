from transformers import pipeline, AutoModelForSeq2SeqLM, AutoTokenizer
from flask import Flask, request, jsonify

app = Flask(__name__)
qa_pipeline = pipeline("question-answering", model="deepset/roberta-base-squad2")

@app.route("/answer", methods=["POST"])
def answer_question():
    data = request.json
    result = qa_pipeline(question=data["question"], context=data["context"])
    return jsonify(result)



@app.route("/t5", methods=["POST"])
def t5():
    data = request.json
    question = data.get("query")
    schema = data.get("schema")
    model_path = data.get("model")

    model = AutoModelForSeq2SeqLM.from_pretrained(model_path)
    tokenizer = AutoTokenizer.from_pretrained(model_path)

    input_text = " ".join(["Question: ",question, "Schema:", schema])

    model_inputs = tokenizer(input_text, return_tensors="pt")
    outputs = model.generate(**model_inputs, max_length=512)

    output_text = tokenizer.batch_decode(outputs, skip_special_tokens=True)
    return jsonify({"query": output_text})


# Load the model
def generate_sql_query(user_input, db_schema):
    prompt = f"Schema: {db_schema}\nQuestion: {user_input}\nSQL:"
    result = text2sql_pipeline(prompt, max_length=512, truncation=True)
    return result[0]['generated_text']

@app.route("/query", methods=["POST"])
def query_sql():
    data = request.json
    user_input = data.get("query")
    db_schema = data.get("schema")
    model = data.get("model", "juierror/flan-t5-text2sql-with-schema-v2")
    # model = data.get("model", "mrm8488/t5-base-finetuned-wikiSQL")


    # Convert text to SQL
    text2sql_pipeline = pipeline("text2text-generation", model=model)
    sql_query = generate_sql_query(user_input, db_schema)
    
    return jsonify({"query": sql_query})

    # result = text2sql_pipeline(prompt, max_length=512, truncation=True) 
    # return result[0]['generated_text']

    

if __name__ == "__main__":
    app.run(port=5000)
