  <link rel='stylesheet' href='../css/bootstrap.css'>

  <meta name="google" value="notranslate">

 <?php include('../inc/div.php');  ?>

  <center>

    <h2>Creer une cape</h2>

  <form method='POST'>

    <label for="id">Veuillez renseigner l'id de la Cape</label>
    <input type="text" name="id" placeholder = "Id de la Cape">
    <label for="idskin">Veuillez renseigner l'id du skin de la cape(apparence de la Cape)</label>
    <input type="text" name="idskin" placeholder = "Apparence de la Cape">
    <label for="nom">Veuillez renseigner le nom de la Cape</label>
    <input type="text" name="nom" placeholder = "Nom de la Cape">
    <label for="stats">Veuillez renseigner les stats de la Cape</label>
    <input type="text" name="stats" placeholder = "Stats de la Cape">
    <label for="prix">Veuillez renseigner le prix de la Cape</label>
    <input type="text" name="prix" placeholder = "Prix de la Cape">
    <label for="des">Décrivez votre Cape</label>
    <input type="text" name="des" placeholder = "Description de la Cape"><br>
    <input type="submit" name="btn" value="Crée la Cape" class = "btn btn-success">
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



?> <center><?php echo "INSERT INTO `item_template` VALUES ('$id', '17', '$nom', '$lvl', '$stats', '4', '-1', '', '', '', '0', '0', '0', '0', '$prix'); "; ?> </center><?php

?> <center><?php echo "I.u[$id] = {n: '$nom', t: 17, d: '$des.', ep: 1, g: $idskin, l: $lvl, wd: true, fm: true, w: 4, p: $prix};"; ?> </center>

<?php include('../inc/footer.php'); ?>

