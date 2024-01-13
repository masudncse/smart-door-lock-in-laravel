@extends('layouts.app')

@section('content')
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mt-4">
        <div class="grid grid-cols-12 gap-4">
            <div class="col-span-8 flex justify-center">
                {{--<img src="{{ asset('img/door-open.png') }}" alt="open">--}}
                <img src="{{ asset('img/door-close.png') }}" alt="close">
            </div>
            <div class="col-span-4">
                <video id="webcam" width="640" height="480" autoplay></video>
                <button id="capture">Capture Screenshot</button>
                <canvas id="screenshot" width="640" height="480" style="display: none;"></canvas>
                <img src="" alt="img" id="capturedImage" style="display: none;">
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script type="text/javascript">
        $(document).ready(function() {
            // Get access to the user's camera
            navigator.mediaDevices.getUserMedia({ video: true })
                .then(function (stream) {
                    // Display the webcam feed in a video element
                    $('#webcam').get(0).srcObject = stream;
                })
                .catch(function (error) {
                    console.error('Error accessing webcam:', error);
                });

            // Handle the capture button click
            $('#capture').on('click', function() {
                // Capture a screenshot from the video and display it on a canvas
                const video = $('#webcam').get(0);
                const canvas = $('#screenshot').get(0);
                const context = canvas.getContext('2d');

                // Draw the current frame from the video onto the canvas
                context.drawImage(video, 0, 0, canvas.width, canvas.height);

                // Do something with the screenshot data (e.g., send it to the server)
                const screenshotData = canvas.toDataURL('image/png');
                console.log('Screenshot captured:', screenshotData);

                let capturedImage = document.getElementById('capturedImage')
                capturedImage.src = screenshotData
                capturedImage.style.display = 'block';
            });
        });
    </script>
@endsection
