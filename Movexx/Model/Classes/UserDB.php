<?php 
require_once '../Model/DB/Connect.php';
class UserDB{
    
    private $_monPDO;
    
    public function __construct(){
        $this->_monPDO = Connect::connexion();
    }
    
    public function get($login,$mdp){
            $sql = "select * from administrateur where login = '".$login."' AND motdepasse = '".$mdp."'";

            $line = $this->_monPDO->query($sql);
            if($line->rowCount() == 1){
                $line = $line->fetch();
                return new Admin($line["id_admin"],$line["login"],$line["motdepasse"]);
            }else{
                $sql = "select * from utilisateur where email = '".$login."' AND motdepasse = '".$mdp."'";
                $line = $this->_monPDO->query($sql);
                
                if($line->rowCount() == 1) {
                    $line = $line->fetch();
                    return new User($line["id_user"],$line["nomcomplet"],$line["email"],$line["motdepasse"],$line["solde"]);
                }
                else return null;
             }    
    }     
}
?>