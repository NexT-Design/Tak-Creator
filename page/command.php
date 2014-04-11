  <link rel='stylesheet' href='../css/bootstrap.css'>

  <meta name="google" value="notranslate">

  <meta charset='utf-8'>

 <?php include('../inc/div.php');  ?>

  <center>

    <h2>Creer une ommande de tp !</h2>

    Création command tp

      Nom de la command ( ex : pvm1 ne pas mettre de .pvm1 le . sera mis automatiquement)

  <form method='POST' action=''>

  Id

  <input name='id'>

  Nom de la command 

  <input name='nom'>

  Mapid

  <input name='mapid'>

  cellid

  <input name='cellid'>

  <input type='submit' value='creer'>

  </form>

  </Center>

<br/><br/> 

<?php

ini_set('display_errors','off');

$id = $_POST['id'];

$name = $_POST['nom'];

$mapid = $_POST['mapid'];

$cellid = $_POST['cellid'];

?> <center><?php echo "INSERT INTO `commands` VALUES ('$id', '$nom', '38-$mapid,$cellid', '', '0');"; ?> </center>

<?php include('../inc/footer.php'); ?>

