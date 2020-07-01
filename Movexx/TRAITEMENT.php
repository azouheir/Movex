<?php
require_once 'Model/Classes/Film.php';
require_once 'Model/Classes/FilmDB.php';
require_once 'Model/Classes/ProviderDB.php';

if(isset($_POST["titre"])){
    
    $Film = new Film(0,$_POST["titre"],
                       $_POST["linkIMG"],
                       $_POST["prix"],
                       $_POST["qualite"],
                       $_POST["rating"],
                       $_POST["duree"],
                       $_POST["categorie"],
                       $_POST["datesortie"],
                       $_POST["description"],
                       $_POST["directeurs"],
                       $_POST["ecrivains"],
                       $_POST["stars"],
                       $_POST["linkVID"],
                       $_POST["idPROV"]
                       );
    
    //Ajouter le film au Broker
    $fDB = new FilmDB();
    $fDB->addFilm($Film);
    
    //Ajouter le film au Provider
    $id_prov = substr($_POST["idPROV"],0,1);
    $host = substr($_POST["idPROV"],2);
    echo $id_prov."  ".$host;
    $pDB = new ProviderDB($id_prov, $host);
    echo $pDB->getURL();
    $i = $pDB->postFilm($Film);

    //Uploader le film
    echo $i;
}