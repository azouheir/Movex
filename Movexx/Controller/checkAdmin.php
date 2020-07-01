<?php
session_start();
if(!isset($_SESSION['login']) || $_SESSION['type']!="Admin" ){
    header("Location: login.php");
}
?>