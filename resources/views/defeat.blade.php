<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    <title>DEFAITE</title>
    <style>
.body {
    height: 100%;
    width: 100%;
}

.centered {
    background-color: red;
    position: relative;
    width: 100%;
    height: 100%;
    /*
    display: flex;
    align-items: center;
    justify-content: center;
    */

    z-index: 10;
}

#card {

    position: absolute;
    /*
    z-index: 10;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    */
    left: 50%;
    transform: translateX(-50%);

    margin-top: 5vh;
}

.card-text {
    text-align: justify;
    text-justify: inter-word;
}

/* ---- tsparticles container ---- */
#tsparticles {
    position: absolute;
    width: 100%;
    height: 100%;
    background-color: #000000;
    background-image: url("");
    background-repeat: no-repeat;
    background-size: cover;
    background-position: 50% 50%;
}

</style>

</head>


<body >

    <div class="centered">
        <div id="card" class="card" style="width: 22rem;">
            <img src="{{ URL::asset('public/images/SoyBoy.jpg') }}" class="card-img-top" alt="...">
            <div class="card-body">
                <h3 class="card-title">DÉFAITE...</h3>
                <p id="note"></p>
                <p class="card-text">T'as perdu, bien joué. Tu viens de prouver à tout le monde 
                quel sacré bêta cuck tu es en confirmant tout les clichés. Tu me donnes envie de vomir
                vas-y dégage.
                </p>
                <h2>Refait une partie vieux cuck</h2>
                <button type="button" class="btn btn-primary" onclick="window.location='{{ url("/") }}'">ok je refais une partie...</button>
                <audio id="music" controls autoplay hidden loop preload="auto">
                    <source src="{{ URL::asset('public/music/defeat.mp3') }}" type="audio/mpeg">
                    Your browser does not support the audio element.
                </audio>
            </div>
        </div>

    </div>

    <div id="tsparticles"></div>


    <script src="{{ URL::asset('public/js/tsparticles.min.js') }}"></script>
    <script src="{{ URL::asset('public/js/tsparticles.js') }}"></script>
     <script>
        //Passes the parameters to the tsparticles.js with the selected words for the background
        callParticles('CUCK','SIMP','FDP');

        //Gets the note and displays it for the user
        document.getElementById("note").innerHTML = "Note : <b>" + parseFloat(localStorage.getItem("note"), 10).toFixed(2) + "</b>/6";
    </script>

    <script>
    //Sets the parameters for the audio player
    var mus = document.getElementById("music");
    mus.autoplay;
    mus.volume = 0.1;
    </script>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"
        integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"
        integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd"
        crossorigin="anonymous"></script>

    <!--fonts for the project-->
    <script src="https://kit.fontawesome.com/58ec1321a7.js" crossorigin="anonymous"></script>
</body>

</html>
