<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    <title>VICTOIRE</title>
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
    z-index: 10;
}

#card {

    position: absolute;
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
            <img src="{{ URL::asset('public/images/MegaChad.png') }}" class="card-img-top" alt="...">
            <div class="card-body">
                <h3 class="card-title">VICTOIRE !!!</h3>
                <p class="card-text">Félicitation ! En gagnant cette partie tu prouves au monde 
                à quel point tu es un chad, un vrai mâle alpha prêt à sauter à la gorge du 
                moindre bêta osant t'adresser la parole.
                </p>
                <h2>Refait une partie !</h2>
                <button type="button" class="btn btn-primary" onclick="window.location='{{ url("/") }}'">LETS GOOOO</button>
                
                <audio id="music" controls hidden autoplay loop preload="auto">
                    <source src="{{ URL::asset('public/music/victory.mp3') }}" type="audio/mpeg">
                    Your browser does not support the audio element.
                </audio>

            </div>
        </div>

    </div>
 
    <div id="tsparticles"></div>
        
    <script src="{{ URL::asset('public/js/tsparticles.min.js') }}"></script>
    <script src="{{ URL::asset('public/js/tsparticles.js') }}"></script>
    <script>
        callParticles('CHAD','ALPHA','DLMA');
    </script>
    <script>
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
