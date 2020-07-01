<?php
require_once 'Model/Classes/FilmDB.php';

switch($_SERVER["REQUEST_METHOD"]){
    case "POST":
        $fDB= new FilmDB();
        $json = file_get_contents("php://input");
        $data= json_decode($json, true);
        $id = $fDB->addFilm($data);  
        echo ($id == 0) ? json_encode(array("error" => "problème lors de l'insertion")) : json_encode(array("id" => $id));
        break;
     default:
        break;
}