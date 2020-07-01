<?php
require_once 'Model/DB/Connect.php';
require_once 'Model/Classes/Film.php';
require_once 'Model/Classes/BuyDB.php';


$bDB = new BuyDB();
$liste = $bDB->getAll($_SESSION["id"]);
