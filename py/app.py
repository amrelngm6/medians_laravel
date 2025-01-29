from transformers import pipeline
from flask import Flask, request, jsonify

app = Flask(__name__)
qa_pipeline = pipeline("question-answering", model="deepset/roberta-base-squad2")

@app.route("/answer", methods=["POST"])
def answer_question():
    data = request.json
    result = qa_pipeline(question=data["question"], context=data["context"])
    return jsonify(result)

if __name__ == "__main__":
    app.run(port=5000)
