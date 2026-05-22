<?php
var_dump($_GET);
$lastname = $_GET['lastname'];
$firstname = $_GET['firstname'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <a href="index.php?lastname=Nemare&firstname=Jean">Page</a>

    <p> lastname: <?= $lastname ?></p>
    <p> firstname: <?= $firstname ?></p>

</body>

</html>