<?php 
var_dump($_GET);
$langue = $_GET['language'];
$serveur = $_GET['server'];
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="index.php?language=PHP&server=LAMP">Page</a>
    <p>Le langage utilisé est : <?= $langue ?></p>
    <p>Le serveur est : <?= $serveur ?></p>
</body>
</html>