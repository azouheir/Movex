<?php

class ProviderDB
{
    private $_host;
    private $_id;
    /**
     * @return mixed
     */
    public function getHost()
    {
        return $this->_host;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->_id;
    }

    /**
     * @param mixed $_host
     */
    public function setHost($_host)
    {
        $this->_host = $_host;
    }

    /**
     * @param mixed $_id
     */
    public function setId($_id)
    {
        $this->_id = $_id;
    }

    public function __construct($id,$host)
    {
        $this->_host=$host;
        $this->_id=$id;
    }
    
    public function getURL(){
        return "http://".$this->getHost().":80/provider_".$this->getId().".php"; //TEST
    }
    
    public function getFURL($titre){
        $curl = curl_init($this->getURL()."?titre=".rawurlencode($titre));
        echo rawurlencode($titre);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE);
        $return = curl_exec($curl);
        curl_close($curl);
        return json_decode( preg_replace('/[\x00-\x1F\x80-\xFF]/', '', $return), TRUE);
    }
    
    public function postFilm($film){
        $curl = curl_init($this->getURL());
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE);
        curl_setopt($curl, CURLOPT_POST, true);
        curl_setopt($curl, CURLOPT_HTTPHEADER, array("Content-type:application/json"));
        $data = json_encode(array("titre" => $film->getTitre(),
                                  "prix" => $film->getPrix(),
                                  "qualite" => $film->getQualite(),
                                   "rating"=> $film->getRating(),
                                   "duree"=>$film->getDuree(),
                                   "datesortie"=>$film->getDatesortie(),
                                   "categorie"=>$film->getCategorie(),
                                   "dispo" => 1,
                                   "url"=>$film->getLinkVID()
        ));
        curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
        $return = curl_exec($curl);
        curl_close($curl);
        return json_decode($return)->id ?? null;
    }
    
}

