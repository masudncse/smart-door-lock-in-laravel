@extends('layouts.guest')

@section('styles')
    <style>
        #mobile-frame {
            border: 16px solid #202224;
            border-radius: 24px;
        }
    </style>
@endsection

@section('content')
    <div class="container">
        <div class="row p-5">
            <div class="col-md-7 text-center">
                {{--<img src="{{ asset('img/door-open.png') }}" alt="open">--}}
                <img src="{{ asset('img/door-close.png') }}" alt="close">
            </div>
            <div class="col-md-5">
                <div id="mobile-frame">
                    <div class="row">
                        <div class="col-12">
                            <video id="webcam" class="w-100" autoplay></video>
                            <canvas id="canvas" width="640" height="480" style="display: none;"></canvas>
                        </div>
                        <div class="col-12 text-center pt-3 pb-4">
                            <button type="button" id="capture" class="btn btn-primary mb-0">
                                Capture
                            </button>
                        </div>
                        <div class="col-12">
                            <img src="" id="screenshot" class="img-fluid" alt="img" style="display: none;">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        $(document).ready(function () {



            // Init Camera
            navigator.mediaDevices.getUserMedia({video: true})
                .then(function (stream) {
                    $('#webcam').get(0).srcObject = stream;
                })
                .catch(function (error) {
                    console.error('Error accessing webcam:', error);
                });

            // Capture Image
            $('#capture').on('click', function () {
                const video = $('#webcam').get(0);
                const canvas = $('#canvas').get(0);

                const context = canvas.getContext('2d');

                context.drawImage(video, 0, 0, canvas.width, canvas.height);

                const imageData = canvas.toDataURL('image/png');
                console.log(imageData);

                let screenshot = document.getElementById('screenshot')
                screenshot.src = imageData
                screenshot.style.display = 'block';
            });
        });
    </script>
@endsection
