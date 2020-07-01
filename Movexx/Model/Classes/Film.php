<?php

class Film
{
    private $_id_film;
    private $_titre;
    private $_prix;
    private $_qualite;
    private $_rating;
    private $_duree;
    private $_categorie;
    private $_datesortie;
    private $_description;
    private $_directeurs;
    private $_ecrivains;
    private $_stars;
    private $_linkIMG;
    private $_linkVID;
    private $_idPROV;
    private $_URL;
    
    public function __construct($id=null,$t,$lIMG=null,$p=null,$q=null,$r=null,$dure=null,$cat=null,$date=null,$desc=null,$dir=null,$ecr=null,$star=null,$lVID = null,$idPRV=null,$URL=null){
        $this->_id_film = $id;
        $this->_titre = $t;
        $this->_prix = $p;
        $this->_qualite = $q;
        $this->_rating = $r;
        $this->_duree = $dure;
        $this->_categorie = $cat;
        $this->_datesortie = $date;
        $this->_description = $desc;
        $this->_directeurs = $dir;
        $this->_ecrivains = $ecr;
        $this->_stars = $star;
        $this->_linkIMG = $lIMG;
        $this->_linkVID = $lVID;
        $this->_idPROV = $idPRV;
        $this->_URL = $URL;
    }
    
    /**
     * @return mixed
     */
    public function getId_film()
    {
        return $this->_id_film;
    }

    /**
     * @return mixed
     */
    public function getTitre()
    {
        return $this->_titre;
    }

    /**
     * @return mixed
     */
    public function getPrix()
    {
        return $this->_prix;
    }

    /**
     * @return mixed
     */
    public function getQualite()
    {
        return $this->_qualite;
    }

    /**
     * @return mixed
     */
    public function getRating()
    {
        return $this->_rating;
    }

    /**
     * @return mixed
     */
    public function getDuree()
    {
        return $this->_duree;
    }

    /**
     * @return mixed
     */
    public function getCategorie()
    {
        return $this->_categorie;
    }

    /**
     * @return mixed
     */
    public function getDatesortie()
    {
        return $this->_datesortie;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->_description;
    }

    /**
     * @return mixed
     */
    public function getDirecteurs()
    {
        return $this->_directeurs;
    }

    /**
     * @return mixed
     */
    public function getEcrivains()
    {
        return $this->_ecrivains;
    }

    /**
     * @return mixed
     */
    public function getStars()
    {
        return $this->_stars;
    }

    /**
     * @return mixed
     */
    public function getLinkIMG()
    {
        return $this->_linkIMG;
    }

    /**
     * @return mixed
     */
    public function getLinkVID()
    {
        return $this->_linkVID;
    }

    /**
     * @return mixed
     */
    public function getIdPROV()
    {
        return $this->_idPROV;
    }
    
    public function getURL()
    {
        return $this->_URL;
    }
    
    public function setURL($_URL)
    {
        $this->_URL = $_URL;
    }
    
    /**
     * @param mixed $_id_film
     */
    public function setId_film($_id_film)
    {
        $this->_id_film = $_id_film;
    }

    /**
     * @param mixed $_titre
     */
    public function setTitre($_titre)
    {
        $this->_titre = $_titre;
    }

    /**
     * @param mixed $_prix
     */
    public function setPrix($_prix)
    {
        $this->_prix = $_prix;
    }

    /**
     * @param mixed $_qualite
     */
    public function setQualite($_qualite)
    {
        $this->_qualite = $_qualite;
    }

    /**
     * @param mixed $_rating
     */
    public function setRating($_rating)
    {
        $this->_rating = $_rating;
    }

    /**
     * @param mixed $_duree
     */
    public function setDuree($_duree)
    {
        $this->_duree = $_duree;
    }

    /**
     * @param mixed $_categorie
     */
    public function setCategorie($_categorie)
    {
        $this->_categorie = $_categorie;
    }

    /**
     * @param mixed $_datesortie
     */
    public function setDatesortie($_datesortie)
    {
        $this->_datesortie = $_datesortie;
    }

    /**
     * @param mixed $_description
     */
    public function setDescription($_description)
    {
        $this->_description = $_description;
    }

    /**
     * @param mixed $_directeurs
     */
    public function setDirecteurs($_directeurs)
    {
        $this->_directeurs = $_directeurs;
    }

    /**
     * @param mixed $_ecrivains
     */
    public function setEcrivains($_ecrivains)
    {
        $this->_ecrivains = $_ecrivains;
    }

    /**
     * @param mixed $_stars
     */
    public function setStars($_stars)
    {
        $this->_stars = $_stars;
    }

    /**
     * @param mixed $_linkIMG
     */
    public function setLinkIMG($_linkIMG)
    {
        $this->_linkIMG = $_linkIMG;
    }

    /**
     * @param mixed $_linkVID
     */
    public function setLinkVID($_linkVID)
    {
        $this->_linkVID = $_linkVID;
    }

    /**
     * @param mixed $_idPROV
     */
    public function setIdPROV($_idPROV)
    {
        $this->_idPROV = $_idPROV;
    }

    
    
}

