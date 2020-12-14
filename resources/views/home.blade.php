<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>MOI C'EST MONSIEUR</title>


    <!-- <link rel="stylesheet" href="../css/app.css">-->
    <link rel="stylesheet" href="../css/home.scss">

</head>

<body>

    <div class="centered">
        <div id="card" class="card" style="width: 22rem;">
            <img src="../images/skinny1.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h3 class="card-title">MOI C'EST MONSIEUR</h3>
                <p class="card-text">Le jeu qui vous aidera à vous faire respecter en tant qu'ingénieur et
                    combattre
                    tous
                    les stéréotypes dont vous pouvez être victime !
                </p>
                <h2>À vous de jouer !</h2>
                <form>
                    <input type="number" value="5" inputmode="numeric" min="5" max="10" class="form-control mb-2"
                        id="nbCartesInput" placeholder="Nombre de cartes">
                    <input type="number" value="5" min="5" max="20" class="form-control mb-2" id="nbManchesInput"
                        placeholder="Nombre de manches">
                    <a href="#" class="round-button"><i class="fa fa-play fa-2x"></i></a>
                </form>
            </div>
        </div>

    </div>

    <div id="tsparticles"></div>


    <script src="../js/tsparticles.min.js"></script>
    <script src="../js/header.js"></script>

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