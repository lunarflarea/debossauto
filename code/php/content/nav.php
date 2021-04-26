
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../../css/style.css"> <!-- je link mon css afin de chager les parametre de ma page -->
    <link rel="stylesheet" href="../../css/materialize.min.css"  media="screen,projection"/> 
    <title></title>
  </head>


</html>




<nav class="nav-extended sidenav-trigger  blue-grey darken-1 ">
  <div class="nav-wrapper ">
    <a class="" href='../page/index.php'><img class="margin-top" src="../../../assets/logo.png" alt=""></a>

    <a href="#" data-target="mobile-demo" class="sidenav-trigger">menu</i></a>
    <ul id="nav-mobile" class="right hide-on-med-and-down buttons">
    <li><a href="../page/index.php">Accueil</a></li>
      <li><a href="../page/dsp.php">Presentation</a></li>
      <li><a href="../page/contact.php">Nous contacter</a></li>


    </ul>
  </div>
  <?php echo $dep; ?>

</nav>

<ul class="sidenav" id="mobile-demo">
  <li><a href="../php/index.php">Accueil</a></li>
  <li><a href="../php/dsp.php">Presentation</a></li>
  <li><a href="../php/contact.php.php">Nous contacter</a></li>
</ul>

<script src="../../js/jquery.min.js" charset="utf-8"></script>
<script src="../../js/materialize.min.js" charset="utf-8">
document.addEventListener('DOMContentLoaded', function() {
  var elems = document.querySelectorAll('.sidenav');
  var instances = M.Sidenav.init(elems, options);
});

// Initialize collapsible (uncomment the lines below if you use the dropdown variation)
// var collapsibleElem = document.querySelector('.collapsible');
// var collapsibleInstance = M.Collapsible.init(collapsibleElem, options);

// Or with jQuery

$(document).ready(function(){
  $('.sidenav').sidenav();
});
</script>
