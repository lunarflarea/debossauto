<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="description" content=""> <!-- DEMANDER UN TEXTE A MON PERE AFIN DE CREER LE SEO -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"> <!-- je link les icones de materialize si besion neccessaire -->
    <link rel="stylesheet" href="../../css/style.css"> <!-- je link mon css afin de chager les parametre de ma page -->
    <link rel="stylesheet" href="../../css/materialize.min.css"  media="screen,projection"/> <!-- j'utilise materialize pour mon site -->

    <title><img class="logo" src="../../image/logo.png" alt="">Debossauto.fr</title>
  </head>
  <body>
    

      <?php $dep = ''; ?>
      <?php include '../content/nav.php' ?>
    

      <div class="back">
<div class="titre">
  <h1>Debossauto</h1>
  <h2>24 ans d'expérience a votre disposition</h2>
  </div>
      </div>

      








      <div class='espace'></div>
      <h2 class="center black-text">Qui sommes nous ?</h2>
      <div class="row">
<div class='col s4 m4 l4 offset-l4 center size'>
      <p class="bold">Grâce à la technique du débosselage sans peinture, nous sommes un peu des kinésithérapeutes de l'automobile !</p>
      <br>
<p> DEBOSSAUTO est une société française créée en 2003 par deux collaborateurs, spécialistes de la technique du débosselage sans peinture.
Nous justifions d'une expérience de plus de dix ans dans le métier.<br>
<br>
Debossauto intervient auprès des particuliers et des professionnels de l'automobile, qui vont des marques les plus courantes aux véhicules de prestiges.
</p>
</div>
</div>


  <div class="row">
    <div class="col s12 m6 offset-l3">
      <div class="card ">
        <div class="card-content black-text">
        <img class="materialboxed imgmorgan" width="650" src="../../../assets/morgan5.jpg" alt="img dsp sur morgan">
          <span class="card-title center">Qu'est ce que le D.S.P</span>
          <p>A l’origine, cette technique a été mise au point, par les constructeurs automobiles, pour réparer des défauts légers, causé par les nombreuses manipulations des véhicules, au cours de leurs fabrications. On appelait ces techniciens, des tôliers sur laques.
Cette technique artisanale très pointue a ensuite évolué, pour devenir un métier à part entière.
En  France, dans  les années 1990, les premiers techniciens spécialisés ont développés ce service auprès des  professionnels de l’automobile.
Aujourd’hui tout le monde peut profiter de ce service.</p>
<a class="waves-effect waves-light btn" href='dsp.php'><i class="material-icons left">cloud</i>Voir Plus De Détails</a>

        </div>
      </div>
    </div>
  </div>
 


  <div class="row">
    <div class="col s12 m8 offset-l2">
      <div class="card ">
        <div class="card-content black-text">
        <div class="row">
  <div class="left-align col s6">
    Avant
  </div>
  <div class="right-align col s6">
    Apres
  </div>
</div>
        <img class="materialboxed imgbosseav" width="650" src="../../../assets/avant1.jpg" alt="img dsp bosse av">
        <img class="materialboxed imgbosseap" width="650" src="../../../assets/apres1.jpg" alt="img dsp bosse ap">
          <span class="card-title center">Nos Services</span>
          <p>A l’origine, cette technique a été mise au point, par les constructeurs automobiles, pour réparer des défauts légers, causé par les nombreuses manipulations des véhicules, au cours de leurs fabrications. On appelait ces techniciens, des tôliers sur laques.
Cette technique artisanale très pointue a ensuite évolué, pour devenir un métier à part entière.
En  France, dans  les années 1990, les premiers techniciens spécialisés ont développés ce service auprès des  professionnels de l’automobile.
Aujourd’hui tout le monde peut profiter de ce service.</p>
<a class="waves-effect waves-light btn" href='dsp.php'><i class="material-icons left">cloud</i>Voir Plus De Détails</a>

        </div>
      </div>
    </div>
  </div>










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

  // Or with jQuery

  $('.carousel.carousel-slider').carousel({
    fullWidth: true,
    indicators: true
  });

</script>
  </body>
</html>
