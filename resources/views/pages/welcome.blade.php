@extends('layouts.sender')

@section('content')
    <audio id="myBacksound">
        <source src="./assets/backsound.mp3" type="audio/mpeg ">
    </audio>
    <div class="container d-flex justify-content-center">
        <div class="twitter-card">
            <div class="card shadow-lg p-5 text-center">
                <h3>Are you ready for this?</h3>
                <a href="{{ route('from-me') }}" class="btn btn-send" target="_blank"
                    onclick="playBacksound()">Proceed</a>
            </div>
        </div>
    </div>

    <script>
        var audio = document.getElementById('myBacksound');

        function playBacksound() {
            audio.play();
        }
    </script>
@endsection
