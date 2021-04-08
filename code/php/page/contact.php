<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"> <!-- je link les icones de materialize si besion neccessaire -->
    <link rel="stylesheet" href="../../css/master.css"> <!-- je link mon css afin de chager les parametre de ma page -->
    <link rel="stylesheet" href="../../css/materialize.min.css"  media="screen,projection"/> <!-- j'utilise materialize pour mon site -->
    <title></title>
  </head>
  <body>
    <head>
      <?php $dep = '';?>
     <?php  include '../content/nav.php';?>
    </head>

    <div class="row">
      <form class="col s12">
        <div class="row">
          <div class="input-field col s6">
            <input placeholder="Ex: DUBOIS" id="first_name" type="text" class="validate">
            <label for="first_name">Noms</label>
          </div>
          <div class="input-field col s6">
            <input placeholder="Ex: Paul" id="last_name" type="text" class="validate">
            <label for="last_name">Prenom</label>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s4">
            <input placeholder="5 Rue Quelque Part" type="text" class="validate">
            <label for="disabled">Adresse (oÃ¹ vous souhaitez l'intervention)</label>
          </div>
          <div class="input-field col s4">
            <input placeholder="Ex: Paris" type="text" class="validate">
            <label for="disabled">Ville</label>
          </div>
          <div class="input-field col s4">
            <input placeholder="Ex: 75000" type="text" class="validate">
            <label for="disabled">Code Postale</label>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s6">
            <input placeholder="Ex: 06 07 08 09 10" type="text" class="validate">
            <label for="disabled">Tellephone</label>
          </div>
          <div class="input-field col s6">
            <input placeholder="Ex: Paul.dubois@email.mail" type="text" class="validate">
            <label for="disabled">Email</label>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s6">
            <input placeholder="Ex: Renault (Initial Paris)" type="text" class="validate">
            <label for="disabled">Voiture</label>
          </div>
        </div>
        <div class="row">
          <form class="col s12">
            <div class="row">
              <div class="input-field col s12">
                <i class="material-icons prefix">mode_edit</i>
                <textarea id="icon_prefix2" class="materialize-textarea"></textarea>
                <label for="icon_prefix2">Message/description de la bosse</label>
              </div>
            </div>
          </form>
        </div>
        <form action="#">
          <div class="file-field input-field">
            <div class="btn">
              <span>Importer image</span>
              <input type="file" multiple>
            </div>
            <div class="file-path-wrapper">
              <input class="file-path validate" type="text" placeholder="Envoie d'une ou plusieur image">
            </div>
          </div>
        </form>
      </form>
    </div>

  </body>
</html>