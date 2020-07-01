<?php 

class User{
    
    private $_id;
    private $_nomcomplet;
    private $_email;
    private $_motdepasse;
    private $_solde;
    
    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->_id;
    }

    /**
     * @return mixed
     */
    public function getNomcomplet()
    {
        return $this->_nomcomplet;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->_email;
    }

    /**
     * @return mixed
     */
    public function getMotdepasse()
    {
        return $this->_motdepasse;
    }

    /**
     * @return mixed
     */
    public function getSolde()
    {
        return $this->_solde;
    }

    /**
     * @param mixed $_id
     */
    public function setId($_id)
    {
        $this->_id = $_id;
    }

    /**
     * @param mixed $_nomcomplet
     */
    public function setNomcomplet($_nomcomplet)
    {
        $this->_nomcomplet = $_nomcomplet;
    }

    /**
     * @param mixed $_email
     */
    public function setEmail($_email)
    {
        $this->_email = $_email;
    }

    /**
     * @param mixed $_motdepasse
     */
    public function setMotdepasse($_motdepasse)
    {
        $this->_motdepasse = $_motdepasse;
    }

    /**
     * @param mixed $_solde
     */
    public function setSolde($_solde)
    {
        $this->_solde = $_solde;
    }

    public function __construct($id, $n, $log, $pass, $sol){
        $this->_id = $id;
        $this->_nomcomplet = $n;
        $this->_email = $log;
        $this->_motdepasse = $pass;
        $this->_solde = $sol;
    }
    
}

?>