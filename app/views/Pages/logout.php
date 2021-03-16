<?php
session_start();

if(isset($_SESSION['em'])){
    session_destroy();
    header("Location:index.php");
}
else{
    header("Location:login.php");
}
