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
    $e=$_POST['email'];

    echo "<h2> Thank you ".$a." </h2>";
    echo "<h2> U will be notified at ".$e." once registered</h2>";
    ?>

<?php 
//$servername="localhost";
//$username="root";
//$password="";
//$database="queries";

//$conn=new mysqli($servername,$username,$password,$database);
//if($conn->connect_error){
   // echo "Connection Failed<br>";
    //die;
//}
//else{
    //echo "Connection Successful<br>";
//}

// $z=date('Y-m-d');

// $sql="INSERT INTO queries (Name,E-mail,Query,CREATED_DATE)VALUES($a,$b,$e,'$z')";

//if($conn->query($sql)==TRUE){
    //echo "Query Has Been Submitted Successfully";
//}
//else{
    //echo "Error :" .$sql. "<br>".$conn->error;
//}
?>
</body>
</html>