<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="description" content="">
    <!-- DEMANDER UN TEXTE A MON PERE AFIN DE CREER LE SEO -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- je link les icones de materialize si besion neccessaire -->
    <link rel="stylesheet" href="../../css/style.css">
    <!-- je link mon css afin de chager les parametre de ma page -->
    <link rel="stylesheet" href="../../css/materialize.min.css" media="screen,projection" />
    <!-- j'utilise materialize pour mon site -->
    <link rel="stylesheet" href="../../css/flexboxgrid.min.css" media="screen,projection" />
    <!-- j'utilise FlexBox Grid (en ayant modifier les fonction row par rowFlex et col par colFlex) pour mon site -->
    <title>Debossauto | Debossauto.fr</title> <!-- Je donne un titre a mon site -->
    <meta name="description" content="Debossauto est une société française créée en 2003 par deux collaborateurs, spécialistes de la technique du débosselage sans peinture."> <!-- Ainsi qu'une description -->
    <meta name="keywords" content="Debossauto , debosselage , dsp , automobile , technique">
    <link rel="shortcut icon" href="../../../assets/logo.png"> <!-- j'ajoute un logo sur l'onglet du site  -->
  </head>
  <body>
    <header>
      <?php $dep = ''; ?>
      <?php include '../content/nav.php' ?> <!-- on importe la barre de navigation  -->
    </header>
    <div class="back"> <!-- on importe le diaporama créer dans le fichier style.css -->
      <div class="titre">
        <h1>Debossauto</h1>
        <h2>24 ans d'expérience à votre disposition</h2>
      </div>
    </div>
    <div class='espace'></div> <!-- On utilise une balise pour espacer nos différentes parties -->
      <div class="container">
        <div class="textAcceuil">
          <h2 class="center black-text">Qui sommes-nous ?</h2>
          <div class="row">
            <div class="container center-align col s10 offset-s1 l8 offset-l2">
              <p class="bold">Grâce à la technique du débosselage sans peinture, nous sommes un peu des kinésithérapeutes de l'automobile !</p>
              <p>DEBOSSAUTO est une société française créée en 2003 par deux collaborateurs, spécialistes de la technique du débosselage sans peinture.</br>
                Nous justifions d'une expérience de plus de dix ans dans le métier.
              </p>
              <p>Debossauto intervient auprès des particuliers et des professionnels de l'automobile, qui vont des marques les plus courantes aux véhicules de prestiges.</p>
          </div>
        </div>
    </div>
        <div class="cardBorder">
          <div class="rowFlex">
              <div class="colFlex-xs-12 colFlex-md-6">
                <div class="card-image">
                    <img class='center' width="80%" src="../../../assets/morgan5.jpg">
                </div>
              </div>
              <div class="colFlex-xs-12 colFlex-md-6" style="padding:15px">
                <div class="rowFlex" style="height: 90%">
                    <div class="colFlex-xs-12">
                      <h4 class="center-align">Qu'est ce que le D.S.P. ?</h4>
                      <p>À l’origine, cette technique a été mise au point par les constructeurs automobiles, pour réparer des défauts légers, causés par les nombreuses manipulations des véhicules, au cours de leurs fabrications. On appelait ces techniciens "des tôliers sur laques".
                        Cette technique artisanale très pointue a ensuite évolué, pour devenir un métier à part entière.
                        En France, dans les années 1990, les premiers techniciens spécialisés ont développé ce service auprès des professionnels de l’automobile.
                        Aujourd’hui, tout le monde peut profiter de ce service.
                      </p>
                    </div>
                  </div>
                  <div class="rowFlex bottom-xs center-xs" style="height: 10%">
                    <div class="colFlex-xs-12">
                      <a class="waves-effect waves-light btn" href="../page/dsp.php">Voir plus de détails</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="cardBorder">
              <div class="row">
                <div class="col s12 m12 l4">
                  <h3 class="bold"> Avant : </h3>
                  <img width="100%" src="../../../assets/avant1.jpg" alt="img dsp bosse av">
                </div>
                <div class="col s12 m12 l4">
                  <h3 class="bold">Nos services</h3>
                  <p>Chez Debossauto, pas besoin de vous déplacer :</br>
                    Le technicien intervient sur votre domicile ou sur votre lieu de travail, dans la limite de son périmètre d'intervention :</br>
                    Départements 60, 75, 78, 92, 93 et 95. (nous consulter pour les secteurs limitrophes)
                  </p>
                  <p>Pour une intervention, vous pouvez nous contacter au 06.07.65.16.80 ou en cliquant sur "<a href="../page/contact.php">Nous contacter</a>". Nous vous répondrons dans les meilleurs délais.</p>
                </div>
                <div class="col s12 m12 l4">
                  <h3 class="bold">Après :</h3>
                  <img width="100%" src="../../../assets/apres1.jpg" alt="img dsp bosse ap">
                </div>
              </div>
            </div>
          </div>
          <h4 class="center">Reportage 2007 sur Debossauto</h4>
          <div class="row center video">
            <video controls="controls">
              <source src="../../../assets/Debossauto_300_cut.mp4">
            </video>
          </div>
          <?php include '../content/footer.php' ?> <!-- on importe le footer -->
  </body>
</html>