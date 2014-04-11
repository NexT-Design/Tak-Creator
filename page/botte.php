  <link rel='stylesheet' href='../css/bootstrap.css'>

  <meta name="google" value="notranslate">

  <?php include('../inc/div.php');  ?>

  <center>

    <h2>Creer des bottes !</h2>

   <form method='POST'>

    <label for="id">Veuillez renseigner l'id des Bottes</label>
    <input type="text" name="id" placeholder = "Id des Bottes">
    <label for="idskin">Veuillez renseigner l'id du skin des Bottes (apparence des Bottes)</label>
    <input type="text" name="idskin" placeholder = "Apparence des Bottes">
    <label for="nom">Veuillez renseigner le nom des Bottes</label>
    <input type="text" name="nom" placeholder = "Nom des Bottes">
    <label for="stats">Veuillez renseigner les stats des Bottes</label>
    <input type="text" name="stats" placeholder = "Stats des Bottes">
    <label for="prix">Veuillez renseigner le prix des Bottes</label>
    <input type="text" name="prix" placeholder = "Prix des Bottes">
    <label for="des">Décrivez votre pair de Bottes</label>
    <input type="text" name="des" placeholder = "Description des Bottes"><br>
    <input type="submit" name="btn" value="Crée la paire" class = "btn btn-success">
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



?> <center><?php echo "INSERT INTO `item_template` VALUES ('$id', '11', '$nom', '$lvl', '$stats', '4', '-1', '', '', '', '0', '0', '0', '0', '$prix'); "; ?> </center><?php

?> <center><?php echo "I.u[$id] = {n: '$nom', t: 11, d: '$des.', ep: 1, g: $idskin, l: $lvl, wd: true, fm: true, w: 4, p: $prix};"; ?> </center>


<?php include('../inc/footer.php'); ?>
