 <link rel='stylesheet' href='../css/bootstrap.css'>

  <meta name="google" value="notranslate">

 <?php include('../inc/div.php');  ?>

  <center>

    <h2>Creer un bouclier</h2>

   <form method='POST'>

    <label for="id">Veuillez renseigner l'id du Bouclier</label>
    <input type="text" name="id" placeholder = "Id du Bouclier">
    <label for="idskin">Veuillez renseigner l'id du skin du Bouclier (apparence du Bouclier)</label>
    <input type="text" name="idskin" placeholder = "Apparence du Bouclier">
    <label for="nom">Veuillez renseigner le nom du Bouclier</label>
    <input type="text" name="nom" placeholder = "Nom du Bouclier">
    <label for="stats">Veuillez renseigner les stats du Bouclier</label>
    <input type="text" name="stats" placeholder = "Stats du Bouclier">
    <label for="prix">Veuillez renseigner le prix du Bouclier</label>
    <input type="text" name="prix" placeholder = "Prix du Bouclier">
    <label for="des">Décrivez votre Bouclier</label>
    <input type="text" name="des" placeholder = "Description du Bouclier"><br>
    <input type="submit" name="btn" value="Crée le Bouclier" class = "btn btn-success">
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



?> <center><?php echo "INSERT INTO `item_template` VALUES ('$id', '16', '$nom', '$lvl', '$stats', '4', '-1', '', '', '', '0', '0', '0', '0', '$prix'); "; ?> </center><?php

?> <center><?php echo "I.u[$id] = {n: '$nom', t: 16, d: '$des.', ep: 1, g: $idskin, l: $lvl, wd: true, fm: true, w: 4, p: $prix};"; ?> </center>

<?php include('../inc/footer.php'); ?>

