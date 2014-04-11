  <link rel='stylesheet' href='../css/bootstrap.css'>

  <meta name="google" value="notranslate">

  <?php include('../inc/div.php'); ?>

  <center>

    <h2>Creer une amulette</h2>

   <form method='POST'>

    <label for="id">Veuillez renseigner l'id de l'Amulette</label>
    <input type="text" name="id" placeholder = "Id de l'Amulette">
    <label for="idskin">Veuillez renseigner l'id du skin de l'Amulette(apparence de l'Amulette)</label>
    <input type="text" name="idskin" placeholder = "Apparence de l'Amulette">
    <label for="nom">Veuillez renseigner le nom de l'Amulette</label>
    <input type="text" name="nom" placeholder = "Nom de l'Amulette">
    <label for="stats">Veuillez renseigner les stats de l'Amulette</label>
    <input type="text" name="stats" placeholder = "Stats de l'Amulette">
    <label for="prix">Veuillez renseigner le prix de l'Amulette</label>
    <input type="text" name="prix" placeholder = "Prix de l'Amulette">
    <label for="des">Décrivez votre Amulette</label>
    <input type="text" name="des" placeholder = "Description de l'Amulette"><br>
    <input type="submit" name="btn" value="Crée l'Amulette" class = "btn btn-success">
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



?> <center><?php echo "INSERT INTO `item_template` VALUES ('$id', '1', '$nom', '$lvl', '$stats', '4', '-1', '', '', '', '0', '0', '0', '0', '$prix'); "; ?> </center><?php

?> <center><?php echo "I.u[$id] = {n: '$nom', t: 1, d: '$des.', ep: 1, g: $idskin, l: $lvl, wd: true, fm: true, w: 4, p: $prix};"; ?> </center>

<?php include('../inc/footer.php');  ?>
