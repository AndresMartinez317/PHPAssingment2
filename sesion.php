<?php
$connection = mysqli_connect("localhost","root","","mydb");
?>
<!DOCTYPE html>
<html lang="en">
<?php
session_start();
include('header2.php');
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
</head>
<body background="BG.jpg" >
<form action="Update.php" method="post">
            <fieldset class= "box-1"> 
                <legend> Update info </legend>
                <div>
                <label for="input1" >ID</label>
                   <input type="number" name="ID" id="ID">
             </div>
            <div>
                <label for="input1" >First Name</label>
                   <input type="text" name="First_Name" id="First_Name">
             </div>
             <div>
                <label for="input2" >Mark1</label>
                   <input type="number" name="Mark1" id="Mark1">
             </div>
             <div>
                <label for="input3" >Mark2</label>
                   <input type="number" name="Mark2" id="Mark2">
             </div>
            <div>
                <input type="reset">
                <input type="submit">
            </div>
        </fieldset>
        </form>

        <form action="Delete.php" method="post" id = "delete">
            <fieldset class="box-2"> 
                <legend> Delete a register </legend>
            <div>
                <label for="input1" >ID</label>
                   <input type="number" name="ID" id="ID">
             </div>
             <div>
                <input type="reset">
                <input type="submit" value="Delete">
            </div>
            </fieldset>
            </form>
   
    
<?php include('footer.php'); ?>
</body>
</html>