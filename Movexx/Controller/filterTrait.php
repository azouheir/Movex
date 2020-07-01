<?php
require_once 'Model/DB/Connect.php';
require_once 'Model/Classes/BuyDB.php';
require_once 'Model/Classes/Film.php';
$liste = null;
if(isset($_GET["cat"]) && isset($_GET["qlt"]) && isset($_GET["prix"])){
    $bDB = new BuyDB();
    $liste = $bDB->getBy($_GET["cat"], $_GET["qlt"], $_GET["prix"]);
}

