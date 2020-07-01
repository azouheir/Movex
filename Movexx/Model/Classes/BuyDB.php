<?php

class BuyDB
{

    private $_monPDO;
    
    public function __construct(){
        $this->_monPDO = Connect::connexion();
    }
    
    public function check($id_film,$id_user){
        $sql = "select * from acheter where id_film = ".$id_film." AND id_user = ".$id_user;
        $line = $this->_monPDO->query($sql);
        if($line->rowCount() == 1) return TRUE;
        else return FALSE;
    }
    
    public function buy($id_film,$id_user){
        $sql= "INSERT INTO `acheter` (`id_film`, `id_user`, `date`) VALUES (?, ?, CURRENT_TIMESTAMP)";
        $stmt = $this->_monPDO->prepare($sql);
        $stmt->execute(array($id_film,$id_user));
    }
    
    public function getAll($id_user){
        $sql = "SELECT * FROM `film` JOIN acheter a USING(id_film) WHERE a.id_user=".$id_user ." ORDER BY a.date DESC";
            $result = $this->_monPDO->query($sql);
            $liste_film = array();
            while(($line = $result->fetch())!==false){
                $obj_pers = new Film($line["id_film"],$line["titre"],$line["link_img"]);
                $liste_film[] = $obj_pers;
            }
            return $liste_film;
    }
    
    public function getBy($cat,$qlt,$prix) {
        $sql = "SELECT * from film where ";
            if($cat!="all") $sql.=" categorie LIKE '%".$cat."%' AND ";
            if($qlt !="all") $sql.=" qualite LIKE '".$qlt."' AND ";
            if($prix!="all"){
                if($prix == "1") $sql.=" prix < 10 AND ";
                if($prix == "2") $sql.=" prix BETWEEN 10 AND 20 AND ";
                if($prix == "3") $sql.=" prix > 20 AND ";
            }
            $sql.=" 1";
        $result = $this->_monPDO->query($sql);
        $liste_film = array();
            while(($line = $result->fetch())!==false){
                $obj_pers = new Film($line["id_film"],$line["titre"],$line["link_img"]);
                $liste_film[] = $obj_pers;
            }
            return $liste_film;
    }
    
    public function getBill($user){
        $sql = "SELECT f.titre, f.link_img,f.prix,a.date FROM `acheter` a JOIN film f USING(id_film) WHERE id_user=".$user." ORDER BY `a`.`date` DESC";
        $result = $this->_monPDO->query($sql);
        $liste_bill = array();
        while(($line = $result->fetch())!==false){
            $obj_pers = new Bill($line["titre"],$line["link_img"], substr($line["date"],0,10), $line["prix"]);
            $liste_bill[] = $obj_pers;
        }
        return $liste_bill;
    }
}

