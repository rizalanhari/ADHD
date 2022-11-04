from Backprop import *
import pickle


def predictUser(data):
    fileTrain = "DataTrainApi.csv"
    dftrainfix = devideData(80, fileTrain)
    Xtrain = dftrainfix.iloc[:, :-1]
    Ytrain = dftrainfix.iloc[:, -1]
    X_train = minmax_scale(Xtrain)
    y_train = onehot_enc(Ytrain)

    w, ep, mse = bp_fit(X_train, y_train, layer_conf=(
        45, 4, 4), learn_rate=.1, max_epoch=2000, max_error=.1, print_per_epoch=100)
    print(f'Epochs: {ep}, MSE: {mse}')

    predict = bp_predict(normalisasi(data), w)
    predict = onehot_dec(predict)

    return predict


def predictAdmin(jmlDataTrain, jmlDataTest, lRate, nHidden):
    fileTrain = "DataTrainApi.csv"
    fileTest = "dataTestAPI.csv"

    dftrainfix = devideData(jmlDataTrain, fileTrain)
    Xtrain = dftrainfix.iloc[:, :-1]
    Ytrain = dftrainfix.iloc[:, -1]
    X_train = minmax_scale(Xtrain)
    y_train = onehot_enc(Ytrain)

    dftestfix = devideData(jmlDataTest, fileTest)
    Xtest = dftestfix.iloc[:, :-1]
    Ytest = dftestfix.iloc[:, -1]
    X_test = minmax_scale(Xtest)
    y_test = onehot_enc(Ytest)

    w, ep, mse = bp_fit(X_train, y_train, layer_conf=(
        45, nHidden, 4), learn_rate=lRate, max_epoch=2000, max_error=.1, print_per_epoch=100)
    print(f'Epochs: {ep}, MSE: {mse}')

    predict = bp_predict(X_test, w)
    predict = onehot_dec(predict)
    y_test2 = onehot_dec(y_test)
    acc = accuracy_score(predict, y_test2)

    return predict, y_test2, acc


with open('model_pkl_admin', 'wb') as files:
    pickle.dump(predictAdmin, files)

with open('model_pkl_user', 'wb') as files:
    pickle.dump(predictUser, files)
