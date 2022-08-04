import pandas as pd
from flask import Flask, jsonify, request

data = pd.read_csv("data.csv")
question = pd.read_csv("question.csv")

app = Flask(__name__)


@app.route('/dataTrain')
def index():
    return data.to_json(orient='records')


@app.route('/question')
def index2():
    return question.to_json(orient='records')

# @app.route('/prediction')
# def index2():
#     data = predictFile.update()
#     return data.to_json(orient='records')


# @app.route('/predict', methods=["POST"])
# def index3():
#     query = request.json
#     data = cr.crawls(query['inputQuery'])
#     return data.to_json(orient='records')


app.run()
