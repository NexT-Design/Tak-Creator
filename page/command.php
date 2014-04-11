  <link rel='stylesheet' href='../css/bootstrap.css'>

  <meta name="google" value="notranslate">

  <meta charset='utf-8'>

 <?php include('../inc/div.php');  ?>

  <center>

    <h2>Creer une commande de téléportation !</h2>

    <h3>Important ! Conseil : C'est inutile de mettre le . sur le nom de la commande car il est générer automatiquement ! </h3>

  <form method='POST'><br>
  
  <label for="id">Veuillez renseigner l'id de la commande de Téléportation</label>
  <input type="text" name="id" placeholder = "id de la commande">
  <label for="mapid">Veuillez renseigner la MAPID de la commande de Téléportation</label>
  <input type="text" name="mapid" placeholder = "mapid de la commande">
  <label for="cellid">Veuillez renseigner la CELLID de la command de Téléportation</label>
  <input type="text" name="cellid" placeholder = "cellid de la commande"><br>
  <input type="submit" name="btn" value="Crée la commande" class="btn btn-success">

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

