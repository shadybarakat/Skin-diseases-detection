<!-- resources/views/home.blade.php -->

<!DOCTYPE html>
<html>

<head>
    <title>Home</title>
</head>

<body>
    <h1>Object Detection Results</h1>

    @if (isset($error))
        <p>{{ $error }}</p>
    @elseif (isset($detectedImagePath))
        <h2>Detected Image</h2>
        <img src="{{ $detectedImagePath }}" alt="Detected Image">
    @endif


    @if (isset($message))
        <h2>Message</h2>
        <p>{{ $message }}</p>
    @endif

    <form action="{{ route('detect.objects') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="file" name="image">
        <button type="submit">Upload Image</button>
    </form>

<a href="http://127.0.0.1:5000/webcam">Open Camera</a>

</body>

</html>
