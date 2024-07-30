<!DOCTYPE html>
<html lang="en">
<?php
 if(isset($_SESSION['Username'])){
    include('header2.php');
} else{
    include('header.php');
}
$connection = mysqli_connect("localhost","root","","mydb");
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body background="BG.jpg">
<form action="Login.php" method="post">
            <fieldset> 
                <legend> Login </legend>
            <div>
                <label for="input1" >Username</label>
                   <input type="text" name="Username" id="Username">
             </div>
             <div>
                <label for="input2" >Password</label>
                   <input type="text" name="Password" id="Password">
             </div>
            <div>
                <input type="reset">
                <input type="submit" value="Login" name="login" >
            </div>
        </fieldset>
        </form>

<?php
    if(isset($_POST['login'])){
        $Username = $_POST['Username'];
        $Password = $_POST['Password'];

        $select = mysqli_query($connection,"SELECT * FROM users WHERE Username = '$Username' AND Password = '$Password'");
        $row = mysqli_fetch_array($select);

        if(is_array($row)){
            $_SESSION["Username"] = $row["Username"];
            $_SESSION["Password"] = $row["Password"];
        } else {
            echo 'invalid username or password';
        }
    }
    if(isset($_SESSION['Username'])){
        header("Location:sesion.php");
    }
    
 ?>
    
<?php include('footer.php'); ?>
</body>
</html>