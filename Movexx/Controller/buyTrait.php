<?php
require_once '../Model/DB/Connect.php';
require_once '../Model/Classes/BuyDB.php';

session_start();

$bDB = new BuyDB();
$id_film = $_GET['id'];
$bDB->buy($id_film, $_SESSION['id']);

header("Location: ../single.php?id=$id_film");