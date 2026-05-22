<?php
var_dump($_GET);
$building = $_GET['building'];
$room = $_GET['room'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <a href="index.php?building=12&room=101">Page</a>

    <p> C'est l'habitation n° <?= $building ?></p>
    <p> C'est la chambre n° <?= $room ?></p>

</body>

</html>