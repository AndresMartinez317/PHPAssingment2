<!DOCTYPE html>
<html lang="en">
<?php 
session_start();
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
<body background="BG.jpg" >
<?php

 $connection = mysqli_connect("localhost","root","","mydb");

 $fname = $_POST['First_Name'];
 $Mark1 = $_POST['Mark1'];
 $Mark2 = $_POST['Mark2'];
 $ID = $_POST['ID'];

 $sql = "UPDATE Marks SET First_Name = '$fname', Mark1 = '$Mark1', Mark2 = '$Mark2' WHERE Student_ID = '$ID'";


  if (mysqli_query($connection, $sql)){
      echo "<br> Table Updated successfully";
  }
?>
    
</body>
<?php include('footer.php'); ?>
</html>