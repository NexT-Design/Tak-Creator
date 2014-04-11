  <link rel='stylesheet' href='../css/bootstrap.css'>

  <meta name="google" value="notranslate">

 <?php include('../inc/div.php');  ?>

  <center>

    <h2>Creer un familier !</h2>

  <form method='POST' action=''>

  Id

  <input name='id'>

       Id du skin ( de l'item a recopier)

  <input name='idskin'>

  Nom de du familier

  <input name='nom'>

    Stats

  <input name='stat'><br/><br/>

      level

  <input name='lvl'>

    Prix ( en points boutique)

  <input name='prix'>

    Description de l'item

  <input name='des'>

  <input type='submit' value='creer'>

  </form>

  </Center>

<br/><br/> 

<?php

ini_set('display_errors','off');

$id = $_POST['id'];

$name = $_POST['nom'];

$stat = $_POST['stat'];

$lvl = $_POST['lvl'];

$prix = $_POST['prix'];

$des = $_POST['des'];

$idskin = $_POST['idskin'];



?> <center><?php echo "INSERT INTO `item_template` VALUES ('$id', '18', '$name', '$lvl', '$stat', '10', '-1', '$prix', '', '', '0', '0', '0', '0', '$prix');

"; ?> </center>

<center><?php echo "I.u[$id] = {n: '$name', t: 18, d: '$des .', ep: 1, g: $idskin, l: $lvl, wd: true, fm: true, w: 4, p: $prix};"?> </center>
<?php include('../inc/footer.php'); ?>