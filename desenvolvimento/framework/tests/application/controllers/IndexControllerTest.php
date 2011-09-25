<?php
require '../../../application/controllers/IndexController.php';

class IndexControllerTest extends Zend_Test_PHPUnit_ControllerTestCase
{
    /**
     * @var $object IndexController 
     */

    private $object;
    
    public function setUp()
    {
        $this->bootstrap = new Zend_Application(APPLICATION_ENV, APPLICATION_PATH . '/configs/application.ini');
        $this->object = new IndexController($this->getRequest(), $this->getResponse());
        parent::setUp();
    }
    
    public function testIncluir(){
        $this->assertTrue($this->object->inserir());
    }

}

