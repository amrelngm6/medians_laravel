import os
os.environ['TF_CPP_MIN_LOG_LEVEL'] = '1' 
from transformers import pipeline
from flask import Flask, request, jsonify

app = Flask(__name__)
qa_pipeline = pipeline("question-answering", model="deepset/roberta-base-squad2")

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

    # model = data.get("model", "mrm8488/t5-base-finetuned-wikiSQL")
    # Load the model if empty use the default model

    # Convert text to SQL
    text2sql_pipeline = pipeline("text2text-generation", model=model)
    sql_query = generate_sql_query(user_input, db_schema)
    
    return jsonify({"query": sql_query})

    # result = text2sql_pipeline(prompt, max_length=512, truncation=True) 
    # return result[0]['generated_text']

    
# Load the model
def generate_sql_query(user_input, db_schema):
    prompt = f"Schema: {db_schema}\nQuestion: {user_input}\nSQL:"
    result = text2sql_pipeline(prompt, max_length=512, truncation=True)
    return result[0]['generated_text']

if __name__ == "__main__":
    app.run(port=5000)
