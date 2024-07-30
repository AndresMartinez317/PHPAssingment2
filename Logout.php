<?php
session_start();
$_SESSION['Username'] = null;
if(session_destroy()){
    header("Location:Login.php");
}
?>