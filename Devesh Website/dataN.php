<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CONFIRMATION SCREEN</title>
    <link rel="icon" href="images/5052366.png">
</head>
<body>
    <?php
    $a=$_POST['Id'];
    //$b=$_POST['remark'];
    $e=$_POST['E-mail'];

    echo "<h2> Thank you ".$a." </h2>";
    echo "<h2> U will be notified at ".$e." once the Product is in store </h2>";
    ?>
