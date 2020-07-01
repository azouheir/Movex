<?php
require_once 'Model/DB/Connect.php';
require_once 'Model/Classes/ProviderDB.php';
class FilmDB{
    
    private $_monPDO;
    
    public function __construct(){
        $this->_monPDO = Connect::connexion();
    }
    
    public function getLastAdd(){
        $sql = "SELECT * FROM `film` ORDER BY datesortie DESC";
        $result = $this->_monPDO->query($sql);
        $list = array();
        while(($line = $result->fetchObject()) !== false)
            $list[] = new Film($line->id_film, $line->titre, $line->link_img);
            
        return $list;
        }
     public function getMostPop(){
        $sql = "SELECT f.id_film,f.titre,COUNT(f.id_film) nb,f.link_img FROM `film` f JOIN `acheter` a ON(f.id_film=a.id_film) GROUP BY f.titre ORDER BY COUNT(f.id_film) DESC";
        $result = $this->_monPDO->query($sql);
        $list = array();
        for ($i = 0; $i < 4; $i++) {
            if(($line = $result->fetchObject())!== false) $list[] = new Film($line->id_film, $line->titre, $line->link_img);
        }
        return $list;
        }
        public function getSuggested(){
            $sql = "SELECT id_film,`titre`, `prix`, `qualite`, `rating`,link_img FROM `film` WHERE 1 ORDER BY qualite DESC,rating DESC,prix ASC";
            $result = $this->_monPDO->query($sql);
            $list = array();
            for ($i = 0; $i < 4; $i++) {
                if(($line = $result->fetchObject())!== false) $list[] = new Film($line->id_film, $line->titre, $line->link_img,null,$line->qualite,$line->rating);
            }
            return $list;
        }
        public function getById($id){
            $sql = "select * from film where id_film = " . $id;
            $result = $this->_monPDO->query($sql);
            if ($result->rowCount() == 1){
                $line = $result->fetchObject();
                return new Film($line->id_film, 
                                $line->titre, 
                                $line->link_img, 
                                $line->prix,
                                $line->qualite,
                                $line->rating,
                                $line->duree,
                                $line->categorie,
                                $line->datesortie,
                                $line->description,
                                $line->directeurs,
                                $line->ecrivains,
                                $line->stars,
                                $line->link_video,
                                $line->id_prov);
            }
            else
                return null;
        }
        public function getByTitle($tit) {
            $sql="SELECT * FROM `film` WHERE  LOWER(titre) LIKE '%".strtolower($tit)."%'";
            $result = $this->_monPDO->query($sql);
            $list = array();
            while(($line = $result->fetchObject()) !== false)
                $list[] = new Film($line->id_film, $line->titre, $line->link_img);
                return $list;
        }
        
        public function getFilm_URL($Film){
            $sql = "SELECT film.titre titre, film.id_prov prov,URL FROM film JOIN provider ON(film.id_prov) WHERE film.id_film=".$Film->getId_film();
            $result = $this->_monPDO->query($sql);
            if ($result->rowCount() == 1){
                $line = $result->fetchObject();
                $pDB = new ProviderDB($line->prov, $line->URL);
                $obj = $pDB->getFURL($line->titre);
                $Film->setURL($obj["URL"]);
            }
            return $Film;
        }
        
        public function addFilm($film){
            $sql = "INSERT INTO `film`(`titre`, `prix`, `qualite`, `rating`, `duree`, `categorie`, `datesortie`, `description`, `directeurs`, `ecrivains`, `stars`, `link_img`, `link_video`, `id_prov`) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
            $stmt = $this->_monPDO->prepare($sql);
            $stmt->execute(array($film->getTitre(),
                $film->getPrix(),
                $film->getQualite(),
                $film->getRating(),
                $film->getDuree(),
                $film->getCategorie(),
                $film->getDatesortie(),
                $film->getDescription(),
                $film->getDirecteurs(),
                $film->getEcrivains(),
                $film->getStars(),
                $film->getLinkIMG(),
                $film->getLinkVID(),
                $film->getIdPROV()
            ));
            return $this->_monPDO->lastInsertId();
        }
}