#import libraries
import numpy as np
from flask import Flask, request, jsonify, render_template
import pickle

#Initialize the flask App
app = Flask(__name__)
model = pickle.load(open('model.pkl', 'rb'))
model1 = pickle.load(open('model1.pkl', 'rb'))
#default page of our web-app
@app.route('/')
def home():
    return render_template('index.html')

#To use the predict button in our web-app
@app.route('/predict',methods=['POST'])
def predict():
    '''
    For rendering results on HTML GUI
    '''
    int_features = [float(x) for x in request.form.values()]
    final_features = [np.array(int_features)]
    q = model.predict(final_features)
    if q==0:
        prediction="carcinoma"
    elif q==1:
        prediction="haematopoietic_neoplasm"
    elif q==2:
        prediction="Cancer Type is glioma!"
    elif q==3:
        prediction="Cancer Type is NS!"
    elif q==4:
        prediction="primitive_neuroectodermal_tumour-medulloblastoma"
    elif q==5:
        prediction="Cancer Type is lymphoid_neoplasm"
    else:
        prediction="Cancer Type is Unable to predict"

   

    return render_template('index.html', prediction_text='The cancer type is :{}'.format(prediction))
   
@app.route('/checknew',methods=['POST'])
def checknew():
    '''
    For rendering results on HTML GUI
    '''
    int_features = [float(x) for x in request.form.values()]
    final_features = [np.array(int_features)]
    q = model.predict(final_features)

    
    if q==1:
        predictions="miscRNA"
    else:
        predictions="protein-coding"

    return render_template('index.html', prediction_textnew='The gene type is  :{}'.format(predictions))

if __name__ == "__main__":
    app.run(debug=True)
