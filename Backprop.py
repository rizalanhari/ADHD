import numpy as np
from sklearn.model_selection import train_test_split
from sklearn.preprocessing import minmax_scale
from sklearn.metrics import accuracy_score
import pandas as pd


def con_csv(path):
    data = pd.read_csv(path)
    data = data.to_numpy()
    return data


def normalisasi(data):
    for i in range(len(data)):
        for j in range(len(data[i])):
            data[i][j] = (data[i][j]-15)/(50-15)
    return data


def bin_enc(lbl):
    mi = min(lbl)
    length = len(bin(max(lbl) - mi + 1)[2:])
    enc = []
    for i in lbl:
        b = bin(i - mi)[2:].zfill(length)
        enc.append([int(n) for n in b])
    return enc


def bin_dec(enc, mi=0):
    lbl = []
    for e in enc:
        rounded = [int(round(x)) for x in e]
        string = ''.join(str(x) for x in rounded)
        num = int(string, 2) + mi
        lbl.append(num)
    return lbl


def onehot_enc(lbl, min_val=0):
    mi = min(lbl)
    enc = np.full((len(lbl), max(lbl) - mi + 1), min_val, np.int8)

    for i, x in enumerate(lbl):
        enc[i, x - mi] = 1
    return enc


def onehot_dec(enc, mi=0):
    return[np.argmax(e)+mi for e in enc]


def sig(X):
    return[1/(1+np.exp(-x)) for x in X]


def sigd(X):
    output = []

    for i, x in enumerate(X):
        s = sig([x])[0]
        output.append(s*(1-s))

    return output


def bp_fit(X, target, layer_conf, max_epoch, max_error=.1, learn_rate=.1, print_per_epoch=100):
    nin = [np.empty(i) for i in layer_conf]
    n = [np.empty(j+1) if i < len(layer_conf) - 1 else np.empty(j)
         for i, j in enumerate(layer_conf)]
    w = np.array([np.random.rand(layer_conf[i]+1, layer_conf[i+1])
                 for i in range(len(layer_conf)-1)])
    dw = [np.empty((layer_conf[i]+1, layer_conf[i+1]))
          for i in range(len(layer_conf)-1)]
    d = [np.empty(s) for s in layer_conf[1:]]
    din = [np.empty(s) for s in layer_conf[1:-1]]
    epoch = 0
    mse = 1

    for i in range(0, len(n)-1):
        n[i][-1] = 1

    while(max_epoch == -1 or epoch < max_epoch) and mse > max_error:
        epoch += 1
        mse = 0

        for r in range(len(X)):
            n[0][:-1] = X[r]

            for L in range(1, len(layer_conf)):
                nin[L] = np.dot(n[L-1], w[L-1])
                n[L][:len(nin[L])] = sig(nin[L])

            e = target[r]-n[-1]
            mse += sum(e ** 2)
            d[-1] = e*sigd(nin[-1])
            dw[-1] = learn_rate * d[-1]*n[-2].reshape((-1, 1))

            for L in range(len(layer_conf)-1, 1, -1):
                din[L-2] = np.dot(d[L-1], np.transpose(w[L-1][:-1]))
                d[L-2] = din[L-2] * np.array(sigd(nin[L-1]))
                dw[L-2] = (learn_rate * d[L-2])*n[L-2].reshape((-1, 1))

            w += dw

        mse /= len(X)

        if print_per_epoch > -1 and epoch % print_per_epoch == 0:
            print(f'Epoch {epoch}, MSE: {mse}')
    return w, epoch, mse


def bp_predict(X, w):
    n = [np.empty(len(i)) for i in w]
    nin = [np.empty(len(i[0])) for i in w]
    predict = []

    n.append(np.empty(len(w[-1][0])))

    for x in X:
        n[0][:-1] = x

        for L in range(0, len(w)):
            nin[L] = np.dot(n[L], w[L])
            n[L+1][:len(nin[L])] = sig(nin[L])

        predict.append(n[-1].copy())

    return predict


df = pd.read_csv("data.csv")
X_train = df.iloc[:, :-1]
y_train = df.iloc[:, -1]
X_train = minmax_scale(X_train)
y_train = onehot_enc(y_train)

w, ep, mse = bp_fit(X_train, y_train, layer_conf=(
    45, 4, 4), learn_rate=.1, max_epoch=2000, max_error=.1, print_per_epoch=100)
print(f'Epochs: {ep}, MSE: {mse}')

data = [[50, 50, 50, 35, 35, 15, 35, 35, 35, 35, 35, 35, 15, 15, 35, 15, 15,
         35, 15, 35, 35, 35, 15, 15, 50, 50, 35, 35, 35, 50, 35, 35, 35, 15,
         15, 15, 50, 35, 50, 15, 35, 15, 15, 15, 15]]

predict = bp_predict(normalisasi(data), w)
predict = onehot_dec(predict)
print(f'Output  : {predict}')

data = con_csv("data.csv")
print(data[50])
