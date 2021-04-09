<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="utf-8">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link rel="stylesheet" href="../../css/style.css">
        <link rel="stylesheet" href="../../css/materialize.min.css"  media="screen,projection"/>
        <title><img class="logo" src="../../image/logo.png" alt="">Debossauto.fr</title>
    </head>
    <body>
        <?php $dep = ''; ?>
        <?php include '../content/nav.php' ?>

        <div class="row blue darken-3">
            <div class="container center-align">
                <h1>Mentions légales</h1>
            </div>
        </div>

        <div class="row blue darken-4">
            <div class="container center-align">
                <h2>Présentation</h2>
            </div>
        </div>

        <div class="container center-align">
            <p>
                Le site Internet https://debossauto.fr est en libre accès à tout internaute et gratuit d'utilisation.
                Il a pour but de présenter les services de l'entreprise Debossauto.
                L'activité de l'entreprise est de débosseler des véhicules automobiles.
            </p>
            <h3>Conception et réalisation du site</h3>
            <p>
                Pol CHEVILLON, Bastien AUFFRET, Luna DE CORMIS
            </p>
        </div>

        <?php include '../content/footer.php' ?>

        <script src="../../js/jquery.min.js" charset="utf-8"></script> <!-- je link le jquery -->
        <script type="text/javascript" src="../../js/materialize.min.js" charset="utf-8"></script> <!-- j'utilise du javascript deja initialiser avec materialize -->
        <script type="text/javascript">

        $(document).ready(function(){
            $('.parallax').parallax();
        });
        $(document).ready(function(){
            $('.carousel').carousel();
        });
        $(document).ready(function(){
            $('.materialboxed').materialbox();
        });
        $('.carousel.carousel-slider').carousel({
            fullWidth: true
        });

        var instance = M.Carousel.init({
            fullWidth: true,
            indicators: true
        });

        $('.carousel.carousel-slider').carousel({
            fullWidth: true,
            indicators: true
        });

        </script>
    </body>
</html>