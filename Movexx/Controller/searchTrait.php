<?php
require_once 'Model/Classes/Film.php';
require_once 'Model/Classes/FilmDB.php';
$liste=null;
$fDB = new FilmDB();
if(isset($_GET["id"])) $liste = $fDB->getByTitle($_GET["id"]);