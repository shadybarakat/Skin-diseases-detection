from flask import Flask, request, jsonify, send_file
import cv2
import numpy as np
from ultralytics import YOLO
from PIL import Image
import io

app = Flask(__name__)

app.config['SECRET_KEY'] = 'skinerdmoin'
app.config['UPLOAD_FOLDER'] = 'static/files'

# Load YOLO model
model = YOLO("../custom_scripts/Yolo-Weights/best.pt")

# Class names
classNames = ['Acne', 'Chickenpox', 'Eczema', 'Monkeypox', 'Pimple', 'Psoriasis', 'Ringworm', 'basal cell carcinoma', 'melanoma', 'tinea-versicolor', 'vitiligo', 'warts']

def detect_objects(image):
    results = model(image)
    return results

@app.route('/detect-skin-disease', methods=['POST'])
def detect_skin_disease():
    if 'image' not in request.files:
        return jsonify({'error': 'No image provided'}), 400

    file = request.files['image']
    img_bytes = file.read()
    img = Image.open(io.BytesIO(img_bytes))

    # Convert PIL image to OpenCV format
    img = cv2.cvtColor(np.array(img), cv2.COLOR_RGB2BGR)

    # Perform object detection
    results = detect_objects(img)

    # Ensure the output format is correct
    detections = results[0].boxes.data.cpu().numpy()  # Assuming single image batch
    
    for box in detections:
        x1, y1, x2, y2, conf, cls = box
        label = f"{classNames[int(cls)]} {conf:.2f}"
        cv2.rectangle(img, (int(x1), int(y1)), (int(x2), int(y2)), (255, 0, 0), 2)
        cv2.putText(img, label, (int(x1), int(y1) - 10), cv2.FONT_HERSHEY_SIMPLEX, 0.9, (255, 0, 0), 2)

    # Convert back to PIL image
    img = Image.fromarray(cv2.cvtColor(img, cv2.COLOR_BGR2RGB))

    # Save to a bytes buffer
    img_io = io.BytesIO()
    img.save(img_io, 'JPEG')
    img_io.seek(0)

    return send_file(img_io, mimetype='image/jpeg')

if __name__ == '__main__':
    app.run(debug=True, host='0.0.0.0', port=5000)
