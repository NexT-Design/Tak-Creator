  <link rel='stylesheet' href='../css/bootstrap.css'>

  <meta name="google" value="notranslate">

 <?php include('../inc/div.php');  ?>

  <center>

    <h2>Creer un dofus !</h2>

    <form method='POST'>
        <label for="id">Veuillez renseigner l'id du Dofus</label>
        <input type="text" name="id" placeholder = "ID du Dofus">
        <label for="idskin">Veuillez renseigner l'id du Skin pour l'apparence du Dofus</label>
        <input type="text" name="idskin" placeholder = "Apparence de l'équipement">
        <label for="nom">Veuillez renseigner le nom du Dofus</label>
        <input type="text" name="nom" placeholder= "Nom du Dofus">
        <label for="stat">Veuillez renseigner les stats du Dofus</label>
        <input type="text" name="stat" placeholder = "Stats du Dofus">
        <label for="lvl">Veuillez renseigner le level du Dofus (équipable au level mis)</label>
        <input type="text" name="lvl" placeholder = "Level du Dofus">
        <label for="prix">Veuillez renseigner le prix du Dofus</label>
        <input type="text" name="prix" placeholder = "Prix du Dofus">
        <label for="des">Décrivez votre Dofus</label>
        <input type="text" name="des" placeholder = "Description du Dofus"><br>
        <input type="submit" name="btn" value="Crée le Dofus" class = "btn btn-success">
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



?> <center><?php echo "INSERT INTO `item_template` VALUES ('$id', '23', '$name', '$lvl', '$stat', '10', '-1', '$prix', '', '', '0', '0', '0', '0', '$prix');

"; ?> </center>

<center><?php echo "I.u[$id] = {n: '$name', t: 23, d: '$des .', ep: 1, g: $idskin, l: $lvl, wd: true, fm: true, w: 4, p: $prix};"?> </center>
<?php include('../inc/footer.php'); ?>