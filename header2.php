<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<Header style="background-color: mediumpurple;">
        <h1> Welcome  </h1>
        <a href="index.html"> Form </a>
        <a href="Table.php"> Table </a>
        <a href="Sesion.php"> Update </a>
        <a href="Logout.php"> Logout </a>
        <hr>
        <h2>
        <?php
            echo $_SESSION['Username'];
        
        ?> 
        </h2>
    </Header>
    </body>
</html>
