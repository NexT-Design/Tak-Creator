  <link rel='stylesheet' href='../css/bootstrap.css'>

  <meta name="google" value="notranslate">

  <?php include('../inc/div.php');  ?>

  <center>

    <h2>Creer un titre !</h2>

  <form method = "POST">
    <label for="id">Veuillez renseigner l'id du titre</label>
    <input type="text" name="id" placeholder="ID du titre"><br>
    <label for="name">Veuillez renseigner le nom de titre</label>
    <input type="text" name="name" placeholder="Nom de titre"><br>
    <input type="submit" name="btn" value="Crée le titre" class= 'btn btn-success'>

  </form>

  </Center>

<br/><br/> 

<?php

ini_set('display_errors','off');

$id = $_POST['id'];

$name = $_POST['name'];



?> <center><?php echo "PT[$id] = {t: '".$name."', c: 16777215, pt: 0};"; ?> </center>

<?php include('../inc/footer.php'); ?>