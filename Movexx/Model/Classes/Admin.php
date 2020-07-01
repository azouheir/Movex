<?php 
class Admin{
    private $_id;
    private $_login;
    private $_motdepasse;
    
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
    public function getLogin()
    {
        return $this->_login;
    }

    /**
     * @return mixed
     */
    public function getMotdepasse()
    {
        return $this->_motdepasse;
    }

    /**
     * @param mixed $_id
     */
    public function setId($_id)
    {
        $this->_id = $_id;
    }

    /**
     * @param mixed $_login
     */
    public function setLogin($_login)
    {
        $this->_login = $_login;
    }

    /**
     * @param mixed $_motdepasse
     */
    public function setMotdepasse($_motdepasse)
    {
        $this->_motdepasse = $_motdepasse;
    }

    public function __construct($id, $log, $pass){
        $this->_id = $id;
        $this->_login = $log;
        $this->_motdepasse = $pass;
    }
  
}
?>