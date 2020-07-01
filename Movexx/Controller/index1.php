<?php
require_once 'Model/Classes/Film.php';
require_once 'Model/Classes/FilmDB.php';

$fDB = new FilmDB();
$LastFilms = $fDB->getLastAdd();
$MostPopu = $fDB->getMostPop();
$MostSugg=$fDB->getSuggested();
