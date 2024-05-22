import cv2
from flask import Flask, request, jsonify
import numpy as np
from ultralytics import YOLO

app = Flask(__name__)
model = YOLO("../custom_scripts/Yolo-Weights/best.pt")
classNames = ['Acne', 'Chickenpox', 'Eczema', 'Monkeypox', 'Pimple', 'Psoriasis', 'Ringworm', 'basal cell carcinoma', 'melanoma', 'tinea-versicolor', 'vitiligo','warts']

# Update this variable with the URL of your Laravel project
laravel_project_url = 'http://127.0.0.1:8000'

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

if __name__ == '__main__':
    app.run(host='0.0.0.0', port=6000)