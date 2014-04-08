  <link rel='stylesheet' href='../css/bootstrap.css'>

  <meta name="google" value="notranslate">

<?php include('../inc/div.php');  ?>

  <center>

    <h2>Creer un anneau</h2>

  <form method='POST' action=''>

  Id

  <input name='id'>

     Id du skin ( de l'item a recopier)

  <input name='idskin'>

  Nom de l'anneau

  <input name='nom'>

  Level

  <input name='lvl'><br/><br/>

  Description de l'item

  <input name='des'>

  Stats

  <input name='stats'>

  Prix ( en points boutique)

  <input name='prix'>

  <input type='submit' value='creer'>

  </form>

  </Center>

<br/><br/> 

<?php

ini_set('display_errors','off');

$id = $_POST['id'];

$idskin = $_POST['idskin'];

$nom = $_POST['nom'];

$lvl = $_POST['lvl'];

$stats = $_POST['stats'];

$prix = $_POST['prix'];

$des = $_POST['des'];



?> <center><?php echo "INSERT INTO `item_template` VALUES ('$id', '9', '$nom', '$lvl', '$stats', '4', '-1', '', '', '', '0', '0', '0', '0', '$prix'); "; ?> </center><?php

?> <center><?php echo "I.u[$id] = {n: '$nom', t: 9, d: '$des.', ep: 1, g: $idskin, l: $lvl, wd: true, fm: true, w: 4, p: $prix};"; ?> </center>



