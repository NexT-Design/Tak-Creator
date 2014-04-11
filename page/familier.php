  <link rel='stylesheet' href='../css/bootstrap.css'>

  <meta name="google" value="notranslate">

 <?php include('../inc/div.php');  ?>

  <center>

    <h2>Creer un familier !</h2>

  <form method="POST">
    <label for="id">Veuillez renseigner l'id du familier (id dans la base de donnée)</label>
    <input type="text" name="id" placeholder = "Id du familier">
    <label for="idskin">Veuillez renseigner l'id de l'apparence du familier soit ID du Skin</label>
    <input type="text" name="idskin" placeholder = "Apparence du familier">
    <label for="nom">Veuillez renseigner le nom du familier</label>
    <input type="text" name="nom" placeholder = "Nom du familier">
    <label for="stat">Veuillez renseigner les stats du familier</label>
    <input type="text" name="stat" placeholder = "stats du familier">
    <label for="lvl">Veuillez renseigner le level du familier (équipable au level mis)</label>
    <input type="text" name="lvl" placeholder = "Level du familier">
    <label for="prix">Veuillez renseigner le prix du familier</label>
    <input type="text" name="prix" placeholder = "prix du familier">
    <label for="des">Décrivez votre familier</label>
    <input type="text" name="des" placeholder = "Description de votre familier"><br>
    <input type="submit" name= "btn" value="Crée le familier" class = "btn btn-success">
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