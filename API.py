import string
import pandas as pd
from flask import Flask, jsonify, request
import pickle
import numpy as np
from numpy import genfromtxt
import BackpropData
import json

dataTrain = pd.read_csv("dataTrainAPI.csv")
dataTest = pd.read_csv("dataTestAPI.csv")
question = pd.read_csv("question.csv")


app = Flask(__name__)


@app.route('/datatrain')
def getDataTrain():
    return dataTrain.to_json(orient='records')


@app.route('/datatest')
def getDataTest():
    return dataTest.to_json(orient='records')


@app.route('/question')
def getDataQuestion():
    return question.to_json(orient='records')


@app.route('/predictAdmin')
def predictAdmin():
    with open('model_pkl_admin', 'rb') as f:
        pAdmin = pickle.load(f)
    dataPadminTemp = genfromtxt(
        'ADHD-web/public/predictAdmin.csv', delimiter=',')
    output, true, acc = pAdmin(dataPadminTemp[0].astype(np.int), dataPadminTemp[1].astype(
        np.int), dataPadminTemp[2], dataPadminTemp[3].astype(np.int))
    output2 = np.append(output, acc)
    true2 = np.append(true, acc)
    heading = []
    cols = len(output)
    for i in range(cols):
        heading.append('data %d' % (i+1))
    heading.append("acc")
    result = np.vstack((heading, output2, true2))

    np.savetxt('resultPredictAdmin.csv', result,
               fmt="%s", comments='', delimiter=",")
    resultPredictAdmin = pd.read_csv("resultPredictAdmin.csv")
    return resultPredictAdmin.to_json(orient='records')


@app.route('/predict')
def predict():

    with open('model_pkl_user', 'rb') as f:
        pUser = pickle.load(f)
    dataUserTemp = genfromtxt('ADHD-web/public/dataUser.csv', delimiter=',')
    rows, cols = (1, 45)
    data = []
    for i in range(rows):
        col = []
        for j in range(cols):
            col.append(dataUserTemp[j])
        data.append(col)
    hasil = pUser(data)
    json_hasil = json.dumps({'Hasil': int(hasil[0])})
    return json_hasil


app.run(debug=True)
