<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 
    $servername = "localhost";
    $username = "root";
    $password = "";
    $db_name = "bank";  
    $conn = new mysqli($servername, $username, $password, $db_name);
    if($conn->connect_error){
        die("Connection failed".$conn->connect_error);
    }
    echo "";
    include "connection.php";
    if(isset($_GET['Id'])){
        $Id = $_GET['Id'];
        $mysqli = "DELETE from `Profile` where Id=$Id";
        $conn->query($mysqli);
        

    }
    header('location:profile.php');
    exit;
    ?>
    
</body>
</html>
