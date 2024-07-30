<!DOCTYPE html>
<html lang="en">
<?php 
 if(isset($_SESSION['Username'])){
    include('header2.php');
} else{
    include('header.php');
} ?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body background="BG.jpg">
<?php
 

 $connection = mysqli_connect("localhost","root","","mydb");


 $username = $_POST['Username'];
 $password = $_POST['Password'];

 $sql = "INSERT INTO users (Username,Password) VALUES ('$username', '$password')";

  if (mysqli_query($connection, $sql)){
      echo "<br>New User created successfully";
  }  
?>
<?php include('footer.php'); ?>
</body>
</html>