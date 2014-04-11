  <link rel='stylesheet' href='../css/bootstrap.css'>

  <meta name="google" value="notranslate">

<?php include('../inc/div.php');  ?>

  <center>

    <h2>Creer une ceinture</h2>

  <form method='POST'>

    <label for="id">Veuillez renseigner l'id de la Ceinture</label>
    <input type="text" name="id" placeholder = "Id de la Ceinture">
    <label for="idskin">Veuillez renseigner l'id du skin de la Ceinture (apparence de la Ceinture)</label>
    <input type="text" name="idskin" placeholder = "Apparence de la Ceinture">
    <label for="nom">Veuillez renseigner le nom de la Ceinture</label>
    <input type="text" name="nom" placeholder = "Nom de la Ceinture">
    <label for="stats">Veuillez renseigner les stats de la Ceinture</label>
    <input type="text" name="stats" placeholder = "Stats de la Ceinture">
    <label for="prix">Veuillez renseigner le prix de la Ceinture</label>
    <input type="text" name="prix" placeholder = "Prix de la Ceinture">
    <label for="des">Décrivez votre Ceinture</label>
    <input type="text" name="des" placeholder = "Description de la Ceinture"><br>
    <input type="submit" name="btn" value="Crée la ceinture" class = "btn btn-success">
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



?> <center><?php echo "INSERT INTO `item_template` VALUES ('$id', '10', '$nom', '$lvl', '$stats', '4', '-1', '', '', '', '0', '0', '0', '0', '$prix'); "; ?> </center><?php

?> <center><?php echo "I.u[$id] = {n: '$nom', t: 10, d: '$des.', ep: 1, g: $idskin, l: $lvl, wd: true, fm: true, w: 4, p: $prix};"; ?> </center>

<?php include('../inc/footer.php'); ?>

