<?php
require_once 'Model/DB/Connect.php';
require_once 'Model/Classes/Bill.php';
require_once 'Model/Classes/BuyDB.php';
$bDB = new BuyDB();
$liste=$bDB->getBill($_SESSION['id']);