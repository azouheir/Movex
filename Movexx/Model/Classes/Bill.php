<?php

class Bill
{
    private $_title;
    private $_linkIMG;
    private $_date;
    private $_price;
    
    /**
     * @return mixed
     */
    public function getTitle()
    {
        return $this->_title;
    }

    /**
     * @param mixed $_title
     */
    public function setTitle($_title)
    {
        $this->_title = $_title;
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
    public function getDate()
    {
        return $this->_date;
    }

    /**
     * @return mixed
     */
    public function getPrice()
    {
        return $this->_price;
    }

    /**
     * @param mixed $_iduser
     */
    public function setLinkIMG($_linkIMG)
    {
        $this->_linkIMG = $_linkIMG;
    }


    /**
     * @param mixed $_date
     */
    public function setDate($_date)
    {
        $this->_date = $_date;
    }

    /**
     * @param mixed $_price
     */
    public function setPrice($_price)
    {
        $this->_price = $_price;
    }

    public function __construct($tit,$img,$date,$price)
    {
        $this->_title=$tit;
        $this->_linkIMG=$img;
        $this->_date=$date;
        $this->_price=$price;
    }
}

