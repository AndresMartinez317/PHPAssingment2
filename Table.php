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
    <link rel="stylesheet" href="styles.css">
    <title>Document</title>
</head>
<body background="BG.jpg" >
    <main> 
        <table style="width:600px; line: height 40px;">
            <thead>
            <tr>
                <th> Student_ID </th>
                <th> First_Name </th>
                <th> Mark1 </th>
                <th> Mark2 </th>
            </tr>
            </thead>
    
            <?php
            $conn = mysqli_connect("localhost","root","","mydb");

            $sql="select * from marks";
            $result = mysqli_query($conn, $sql);

           if($result-> num_rows > 0){
            while($rows = mysqli_fetch_assoc($result)){
                echo "<tr>
                <td>" .$rows ['Student_ID']. "</td>
                <td>" . $rows ['First_Name']."</td>
                <td>" .$rows ['Mark1']. "</td>
                <td>" .$rows ['Mark2']."</td>
                </tr>";

            }
           } 
            ?>
        </table> 

    </main>
    <?php include('footer.php'); ?>
</body>
</html>