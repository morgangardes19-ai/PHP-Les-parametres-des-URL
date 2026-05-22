<?php 
var_dump($_GET);
$startDate = $_GET['startDate'];
$endDate = $_GET['endDate'];
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="index.php?startDate=2/05/2016&endDate=27/11/2016">Page</a>
    <p>Date de début : <?= $startDate ?></p>
    <p>Date de fin : <?= $endDate ?></p>
</body>
</html>