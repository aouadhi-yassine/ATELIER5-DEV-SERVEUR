<?php
session_start();
// echo session_id();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap.css">
</head>
<body>
    <?php 
    include "navbar.php";
    $_SESSION['classe'] = 'L2DSI';
    ?>
    <h1>Bienvenue sur notre site</h1>
    <form method="POST" action="<?php $_SERVER['PHP_SELF']?>">
        <label>Votre nom : </label> <input type="text" name="nom">
        <button type="submit" name="soumi">Submit</button>
    </form>
    <?php 
    if (isset($_POST['soumi'])){
        $_SESSION['pseudo'] = $_POST['nom'];
    }
    ?>
</body>
</html>