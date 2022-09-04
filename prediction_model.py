from flask import Flask, render_template, request, url_for,redirect
from werkzeug.utils import secure_filename
import os,cv2
from keras.models import load_model
import numpy as np
import tensorflow_hub as hub

file_path = ''
path=r'C:\xampp\htdocs\project\ICHACAKTHON\static\Food_Classifier.h5'
model = load_model(
       (path),
       custom_objects={'KerasLayer':hub.KerasLayer})
# model=load_model(r'D:\food_classifier\static\Food_Classifier.h5')
calorie_dict={"Alu ki Sabzi":90,"Apple":52,"Banana":89,"Chole Bhature":427,"kachori":200,"Noodles":138,"pizza":150,"Rajma":333,"samosa":210}

def prediction(file_path):
    results=['Alu ki Sabzi', 'Apple', 'Banana', 'Chole Bhature', 'kachori', 'Noodles', 'pizza', 'Rajma', 'samosa']
    img=cv2.imread(file_path)
    img=cv2.resize(img, (224,224),interpolation = cv2.INTER_NEAREST)
    img=np.expand_dims(img, axis=0)
    result=model.predict(img)
    # if result<=0.5:
    #     return results[0]
    # else:
    #     return results[1]
    return results[np.argmax(result)]


# FLASK APPLICATION
app=Flask(__name__)

@app.route('/')
def home():
    return render_template('home.html')

@app.route('/Segmentor/', methods=['POST','GET'])
def Segmentor():
    return render_template('prediction.html')

@app.route('/upload',methods=['GET','POST'])
def upload():
    if request.method == 'POST':
      f = request.files['file']
      file_path=os.path.join(r'C:\xampp\htdocs\project\ICHACAKTHON\static',secure_filename(f.filename))
      f.save(file_path)
      #Call prediction to predict the output
      result=prediction(file_path)
      
      return render_template('prediction.html', prediction_text="It's {} and you are consuming aproximately {} calories".format(result,calorie_dict.get(result)))






if __name__=="__main__":
    app.run(debug=True)