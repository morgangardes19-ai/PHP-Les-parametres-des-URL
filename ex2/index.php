<?php 
// var_dump($_GET);
$age = $_GET['age'];
// $age = 100;
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- <a href="index.php?lastname=Nemare&firstname=Jean&age=<?= $age ?>">Page</a> -->
    <a href="index.php?lastname=Nemare&firstname=Jean">Page</a>
    <?php 
    if (isset($_GET['age']))
    {
        echo $age;
    }
    else {
        echo "Le paramètre âge n'existe pas.";
        return;
    }
    ?>
</body>
</html>