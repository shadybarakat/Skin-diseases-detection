from flask import Flask, render_template, Response,jsonify,request,session
# Required to run the YOLOv8 model
import os
import cv2
import numpy as np
from ultralytics import YOLO
from YOLO_Video import video_detection

app = Flask(__name__)

app.config['SECRET_KEY'] = 'skinerdmoin'
app.config['UPLOAD_FOLDER'] = 'static/files'

model = YOLO("../custom_scripts/Yolo-Weights/best.pt")
classNames = ['Acne', 'Chickenpox', 'Eczema', 'Monkeypox', 'Pimple', 'Psoriasis', 'Ringworm', 'basal cell carcinoma', 'melanoma', 'tinea-versicolor', 'vitiligo','warts']

# Update this variable with the URL of your Laravel project
laravel_project_url = 'http://127.0.0.1:8000'

def generate_frames_web(path_x):
    yolo_output = video_detection(path_x)
    for detection_ in yolo_output:
        ref,buffer=cv2.imencode('.jpg',detection_)
        frame=buffer.tobytes()
        yield (b'--frame\r\n'
                    b'Content-Type: image/jpeg\r\n\r\n' + frame +b'\r\n')


@app.route("/webcam", methods=['GET','POST'])

def webcam():
    session.clear()
    return render_template('ui.html')

@app.route('/webapp')
def webapp():
    #return Response(generate_frames(path_x = session.get('video_path', None),conf_=round(float(session.get('conf_', None))/100,2)),mimetype='multipart/x-mixed-replace; boundary=frame')
    return Response(generate_frames_web(path_x=0), mimetype='multipart/x-mixed-replace; boundary=frame')

@app.route('/detect-skin-disease', methods=['POST'])
def detect_skin_disease():
    if 'image' not in request.files:
        return jsonify({'message': 'No image provided'}), 400
    
    image = request.files['image']

    img = cv2.imdecode(np.fromstring(image.read(), np.uint8), cv2.IMREAD_UNCHANGED)

    result = model(img, show=True)[0]  # Assuming only one result

    detected_image_name = image.filename

    detected_image_path = f"images/{detected_image_name}"  # Relative path to the image

    result.save(f"public/{detected_image_path}")  # Save the detected image in the public directory

    # Construct the URL for the detected image based on the Laravel project URL
    detected_image_url = f"{laravel_project_url}/{detected_image_path}"

    return jsonify({'message': 'Image processed successfully', 'detected_image_url': detected_image_url})

if __name__ == "__main__":
    app.run(host='0.0.0.0', debug=True)