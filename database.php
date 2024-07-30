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
<body background="BG.jpg" >

<?php
 

   $connection = mysqli_connect("localhost","root","","mydb");
 

    $fname = $_POST['First_Name'];
    $Mark1 = $_POST['Mark1'];
    $Mark2 = $_POST['Mark2'];

    $sql = "INSERT INTO Marks (First_Name, Mark1, Mark2) VALUES ('$fname', '$Mark1', '$Mark2')";

    if (mysqli_query($connection, $sql)){
        echo "<br>New record created successfully";
    }
    
?>
  <?php include('footer.php'); ?>
</body>
</html>
