<?php

class Cesta {

    private $time;
    private $itens;

    public function __construct(){
        $this->time = date("Y-m-d H:i:s");
        $this->itens = array();
    }

    /**
     * This method adds an item.
     * @access public
     * @param Object $produto;
     * @return Void 
     */
    public function addItem(Produto $produto){
        $this->itens[] = $produto;
    }

    /**
     * This method return all the itens added.
     * @access public
     * @return Array
     */    
    public function getItens(){
        return $this->itens;
    }

    /**
     * This method return the set time.
     * @access public
     * @return String 
     */
    public function getTime(){
        return $this->time;    
    }
}