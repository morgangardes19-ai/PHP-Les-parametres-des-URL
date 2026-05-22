<?php 
var_dump($_GET);
$semaine = $_GET['week'];
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="index.php?week=12">Page</a>
    <p>Nous sommes la semane : <?= $semaine ?></p>
</body>
</html>