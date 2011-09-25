<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of MongoDB
 *
 * @author Rogerio
 */
class MongoDB extends Mongo{
    //put your code here
    protected $mongo;
    protected $db;
    protected $collection;
    
    private function __construct() {
        $this->mongo = new Mongo();
        $this->db = $this->mongos->test;
    }   
    
   
}

?>
