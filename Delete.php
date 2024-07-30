<!DOCTYPE html>
<html lang="en">
<?php 
session_start();
if(isset($_SESSION['Username'])){
    include('header2.php');
} else{
    include('header.php');
}
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body background="BG.jpg" >
<?php

 $connection = mysqli_connect("localhost","root","","mydb");

 $ID = $_POST['ID'];

 $sql = "DELETE FROM Marks WHERE Student_ID = '$ID'";


  if (mysqli_query($connection, $sql)){
      echo "<br> Record Deleted successfully";
  }
?>
    
</body>
<?php include('footer.php'); ?>
</html>