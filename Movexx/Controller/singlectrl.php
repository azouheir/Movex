<?php 
require_once 'Model/DB/Connect.php';
require_once 'Model/Classes/Film.php';
require_once 'Model/Classes/FilmDB.php';
require_once 'Model/Classes/BuyDB.php';

$fDB = new FilmDB();
$id = $_GET['id'];

$Film = $fDB->getById($id);
$Film = $fDB->getFilm_URL($Film);

$bDB = new BuyDB();
$check = $bDB->check($id, $_SESSION["id"]);
