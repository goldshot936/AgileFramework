<?php

class UsuarioController extends Zend_Controller_Action
{
    /**
     *
     * @var Mongo
     */
    private $mongo;
    private $db;
    private $collection;
    
    public function init()
    {
        $this->mongo = new Mongo();
        $this->db = $this->mongo->test;
        $this->collection = $this->db->usuario;
    }

    public function indexAction()
    {
        $dadosUsuario = array("nome"=>"Rogerio222");
        $this->collection->insert($dadosUsuario);    
        $retorno = $this->collection->find();
        // iterate through the results
        foreach ($retorno as $obj) {
            echo $obj["nome"] . "\n";
        }

        
    }


}

