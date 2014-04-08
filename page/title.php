  <link rel='stylesheet' href='../css/bootstrap.css'>

  <meta name="google" value="notranslate">

  <?php include('../inc/div.php');  ?>

  <center>

    <h2>Creer un titre !</h2>

  <form method='POST' action=''>

  Id

  <input name='id'>

  Nom de du title

  <input name='nom'>

  <input type='submit' value='creer'>

  </form>

  </Center>

<br/><br/> 

<?php

ini_set('display_errors','off');

$id = $_POST['id'];

$name = $_POST['nom'];



?> <center><?php echo "PT[$id] = {t: '$name', c: 16777215, pt: 0};"; ?> </center>

