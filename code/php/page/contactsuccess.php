<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"> <!-- je link les icones de materialize si besion neccessaire -->
    <link rel="stylesheet" href="../../css/style.css"> <!-- je link mon css afin de changer les parametre de ma page -->
    <link rel="stylesheet" href="../../css/materialize.min.css"  media="screen,projection"/> <!-- j'utilise materialize pour mon site -->
    <title></title>
  </head>
  <body>
  <div class="blue-grey darken-3">
    <header>
      <?php $dep = '';?>
     <?php  include '../content/nav.php';?>
    </header>

    <h1>Votre message a bien été envoyé !</h1>
    <a href="index.php">Retourner à l'accueil</a>

    <?php include '../content/footer.php' ?>
    </div>
    <br>
    <?php include '../content/footer.php'?>
    </div>
    <script src="../../js/jquery.min.js" charset="utf-8"></script> <!-- je link le jquery -->
    <script type="text/javascript" src="../../js/materialize.min.js" charset="utf-8"></script> <!-- j'utilise du javascript deja initialiser avec materialize -->

  </body>
</html>