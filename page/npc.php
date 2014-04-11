 <link rel='stylesheet' href='../css/bootstrap.css'>

  <meta name="google" value="notranslate">

  <?php include('../inc/div.php');  ?>
  
  <center>

    <h2>Creer un PNJ/NPC</h2>

  <form method='POST' action=''>

    <input type="text" name="id" placeholder="id du PNJ/NPC">
    <label for="id">Veuillez renseigner l'id du PNJ/NPC</label>
    <input type="text" name="name" placeholder = "Nom du NPC">
    <label for="name">Veuillez renseigner le nom de NPC</label>
    <input type="text" name="size" placeholder = "Taille du NPC">
    <label for="size">Veuillez renseigner la taille du NPC</label>
    <input type="text" name="gfxid" placeholder = "Apparence du NPC">
    <label for="gfxid">Veuillez renseigner l'apparence du NPC</label>
    <input type="text" name="item" placeholder="id des item que vend le PNJ/NPC">
    <label for="item">Veuillez renseigner les id des items que vend le PNJ/NPC</label>
    <input type="submit" name="btn" value="creer">
  </form>

  </Center>

<br/><br/> 

<?php

ini_set('display_errors','off');

$id = $_POST['id'];

$item = $_POST['item'];

$size = $_POST['size'];

$gfxid = $_POST['gfxid'];

$name = $_POST['name'];

?> <center><?php echo "INSERT INTO `npc_template` VALUES ('".$id."', '0', '".$gfxid."', '100', '".$size."', '0', '-1', '-1', '-1', '0,0,0,0', '-1', '0', '-1', '".$item."');"; ?> </center><?php

?> <center><?php echo "N.d[".$id."] = {n: ".$item. .$size. .$gfxid. .$name.", a: [3, 5, 6]};"; ?> </center>

<?php include('../inc/footer.php'); ?>

