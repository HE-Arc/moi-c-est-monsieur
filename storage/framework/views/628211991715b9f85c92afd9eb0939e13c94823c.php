<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    <title>MOI C'EST MONSIEUR</title>
    <style>
    .round-button {
    box-sizing: border-box;
    display: block;
    width: 80px;
    height: 80px;
    padding-top: 14px;
    padding-left: 8px;
    line-height: 20px;
    border: 6px solid #fff;
    border-radius: 50%;
    color: #f5f5f5;
    text-align: center;
    text-decoration: none;
    background-color: rgba(0, 0, 0, 0.5);
    font-size: 20px;
    font-weight: bold;
    transition: all 0.3s ease;
    margin-left: 7rem;
}

.round-button:hover {
    background-color: rgba(0, 0, 0, 0.8);
    // box-shadow: 0px 0px 10px rgba(255, 255, 100, 1);
    // text-shadow: 0px 0px 10px rgba(255, 255, 100, 1);
}

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


<body>

    <div class="centered">
        <div id="card" class="card" style="width: 22rem;">
            <img src="<?php echo e(URL::asset('public/images/skinny1.jpg')); ?>" class="card-img-top" alt="...">
            <div class="card-body">
                <h3 class="card-title">MOI C'EST MONSIEUR</h3>
                <p class="card-text">Le jeu qui vous aidera à vous faire respecter en tant qu'ingénieur et
                    combattre
                    tous
                    les stéréotypes dont vous pouvez être victime !
                </p>
                <h2>À vous de jouer !</h2>
                <form id="form" action="<?php echo e(url("/attack_ripost")); ?>" method="post">
                    <?php echo csrf_field(); ?>
                    <input type="number" name="cards" inputmode="numeric" min="5" max="10" class="form-control mb-2"
                        id="nbCartesInput" placeholder="Nombre de cartes">
                    <input type="number" name ="rounds" min="5" max="20" class="form-control mb-2" id="nbManchesInput"
                        placeholder="Nombre de manches">
                    <a href="#" class="round-button" onclick="document.getElementById('form').submit();"><i class="fa fa-play fa-2x"></i></a>
                </form>
            </div>
        </div>

    </div>

    <div id="tsparticles"></div>


    <script src="<?php echo e(URL::asset('public/js/tsparticles.min.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('public/js/tsparticles.js')); ?>"></script>
    <script>
        callParticles('MOI','C\'EST','MONSIEUR');
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

    <script>
        localStorage.setItem("manche", 1);
        localStorage.setItem("score", 0);
    </script>
</body>

</html>
<?php /**PATH C:\wamp64\www\moi-c-est-monsieur\resources\views/home.blade.php ENDPATH**/ ?>