<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- linking des icônes de Materialize si besoin -->
    <link rel="stylesheet" href="../../css/style.css">
    <!-- linking le fichier .css afin de changer les paramètres de ma page -->
    <link rel="stylesheet" href="../../css/materialize.min.css"  media="screen,projection"/>
    <!-- j'utilise Materialize pour mon site -->
    <title>Contact</title>
    <meta name="description" content="Vous pouvez contacter un technicien à tout moment si votre véhicule a un problème"> <!-- Ainsi qu'une description -->
    <meta name="keywords" content="Debossauto, debosselage, dsp, automobile, technique">
    <link rel="shortcut icon" href="../../../assets/logo.png"> <!-- j'ajoute un logo sur l'onglet du site  -->
    <?php session_start(); ?>
  </head>
  <body>
    <div class="blue-grey darken-3">
      <header>
        <?php $dep = '';?>
        <?php  include '../content/nav.php';?>
      </header>
      <div class="row">
        <div class="container center-align">
          <h1 class="white-text">Une bosse sur votre carrosserie ? Contactez-nous !</h1>
        </div>
      </div>
      <?php
        if (isset($_SESSION['contact_send_error'])) {
      ?>
      <div class="row">
        <div class="container center-align">
          <p class="red-text">
            <?php echo($_SESSION['contact_send_error']);
            unset($_SESSION['contact_send_error']); ?>
          </p>
        </div>
      </div>
      <?php }; ?>
      <form action="../content/contactsend.php" method="post">
        <div class="container">
          <div class="row">
            <div class="input-field col s6">
              <input name="nom" placeholder="Ex: DUBOIS" id="first_name" type="text" class="validate" class="white-text">
              <label for="first_name">Nom</label>
            </div>
            <div class="input-field col s6">
              <input name="prenom" placeholder="Ex: Paul" id="last_name" type="text" class="validate" class="white-text">
              <label for="last_name">Prénom</label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s4">
              <input name="adresse" placeholder="5 Rue Quelque Part" type="text" class="validate" class="white-text">
              <label for="disabled">Adresse (où vous souhaitez l'intervention)</label>
            </div>
            <div class="input-field col s4">
              <input name="ville" placeholder="Ex: Paris" type="text" class="validate" class="white-text">
              <label for="disabled">Ville</label>
            </div>
            <div class="input-field col s4">
              <input name="codepostal" placeholder="Ex: 75000" type="text" class="validate" class="white-text">
              <label for="disabled">Code postal</label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s6">
              <input name="telephone" placeholder="Ex: 06 07 08 09 10" type="text" class="validate" class="white-text">
              <label for="disabled">Télephone</label>
            </div>
            <div class="input-field col s6">
              <input name="email" placeholder="Ex: Paul.dubois@email.mail" type="text" class="validate" class="white-text">
              <label for="disabled">Email</label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s6">
              <input name="voiture" placeholder="Ex: Renault (Initial Paris)" type="text" class="validate" class="white-text">
              <label for="disabled">Voiture</label>
            </div>
            <form action="#">
              <div class="file-field input-field col s6">
                <div class="btn">
                  <span>Envoyer image</span>
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
                  <i class="material-icons prefix white-text">mode_edit</i>
                  <textarea id="icon_prefix2" class="materialize-textarea"></textarea>
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
      </form>
      <?php include '../content/footer.php' ?>
    </div>
    <br>
    <script src="../../js/jquery.min.js" charset="utf-8"></script> <!-- je link le jquery -->
    <script type="text/javascript" src="../../js/materialize.min.js" charset="utf-8"></script> <!-- j'utilise du javascript deja initialiser avec materialize -->
    <script>
      $(document).ready(function() {
        $('input#input_text, textarea#textarea2').characterCounter();
      });
    </script>
  </body>
</html>