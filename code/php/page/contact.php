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
<<<<<<< HEAD
  <div class='blue-grey darken-3'>
=======
  <div class="blue-grey darken-3">
>>>>>>> 50798102bcf176d3a369df91821105bde9214a5d
    <head>
      <?php $dep = '';?>
     <?php  include '../content/nav.php';?>
    </head>


    <div class="row">
      <div class="container center-align">
        <h1 class="white-text">Une bosse sur votre carrosserie ? Contactez-nous !</h1>
      </div>
    </div>


    <div class="container">
      <div class="row">
        <div class="input-field col s6">
          <input placeholder="Ex: DUBOIS" id="first_name" type="text" class="validate" class="white-text">
          <label name="Nom" for="first_name">Nom</label>
        </div>
<<<<<<< HEAD
=======
        <div class="input-field col s6">
          <input placeholder="Ex: Paul" id="last_name" type="text" class="validate" class="white-text">
          <label for="last_name" name="Prénom">Prénom</label>
        </div>
>>>>>>> 50798102bcf176d3a369df91821105bde9214a5d
      </div>


      <div class="row">
        <div class="input-field col s4">
          <input placeholder="5 Rue Quelque Part" type="text" class="validate" class="white-text">
          <label for="disabled" name="Adresse">Adresse (où vous souhaitez l'intervention)</label>
        </div>
        <div class="input-field col s4">
          <input placeholder="Ex: Paris" type="text" class="validate" class="white-text">
          <label for="disabled" name="Ville">Ville</label>
        </div>
        <div class="input-field col s4">
          <input placeholder="Ex: 75000" type="text" class="validate" class="white-text">
          <label for="disabled" name="Codepostal">Code postal</label>
        </div>
      </div>


      <div class="row">
        <div class="input-field col s6">
          <input placeholder="Ex: 06 07 08 09 10" type="text" class="validate" class="white-text">
          <label for="disabled" name="Telephone">Télephone</label>
        </div>
        <div class="input-field col s6">
          <input placeholder="Ex: Paul.dubois@email.mail" type="text" class="validate" class="white-text">
          <label for="disabled" name="Email">Email</label>
        </div>
      </div>


      <div class="row">
        <div class="input-field col s6">
          <input placeholder="Ex: Renault (Initial Paris)" type="text" class="validate" class="white-text">
          <label for="disabled" name="Voiture">Voiture</label>
        </div>
        <form action="#">
          <div class="file-field input-field col s6">
            <div class="btn">
              <span>Envoyer des images</span>
              <input type="file" multiple>
            </div>
            <div class="file-path-wrapper">
              <input class="file-path validate" type="text" placeholder="Charger une ou plusieurs images">
            </div>
          </div>
        </form>
      </div>

      
      <div class="row">
        <form class="col s12">
          <div class="row">
            <div class="input-field col s12">
              <i class="material-icons prefix">mode_edit</i>
              <textarea id="icon_prefix2" class="materialize-textarea" name="content"></textarea>
              <label for="icon_prefix2">Message/description de la bosse</label>
            </div>
          </div>
        </form>
      </div>

      <button class="btn waves-effect waves-light btn-large" type="submit" name="action">Envoyer
        <i class="material-icons right">send</i>
      </button>

    <br />
    </div>

    <?php include '../content/footer.php' ?>
    </div>
    <br>
    <?php include '../content/footer.php'?>
    </div>
    <script src="../../js/jquery.min.js" charset="utf-8"></script> <!-- je link le jquery -->
    <script type="text/javascript" src="../../js/materialize.min.js" charset="utf-8"></script> <!-- j'utilise du javascript deja initialiser avec materialize -->

    <script>
    $(document).ready(function() {
      $('input#input_text, textarea#textarea2').characterCounter();
    });
    </script>

  </body>
</html>