<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */


require_once 'PHPUnit/Extensions/SeleniumTestCase.php';

/**
 * Description of newSeleneseTest
 *
 * @author Rogerio
 */
class newSeleneseTest extends PHPUnit_Extensions_SeleniumTestCase {

    protected function setUp()
  {
    $this->setBrowser("*chrome");
    $this->setBrowserUrl("http://www.internetjob.com.br/sgmidia_hom/");
  }

  public function testMyTestCase()
  {
    $this->open("/sgmidia_hom/");
    $this->type("txtNOLogonUsuario", "casa");
    $this->type("txtDSSenha", "casa");
    $this->click("css=input.btnForm.arredondado");
    $this->waitForPageToLoad("30000");
    $this->click("css=li.users > ul > li.categories > a");
    $this->waitForPageToLoad("30000");
    $this->click("link=EDITAR");
    $this->click("link=Last created");
    $this->click("link=CADASTRAR");
    $this->click("link=REVISAR");
    $this->click("link=DELETE");
    $this->click("link=TABELAS DE APOIO");
    $this->waitForPageToLoad("30000");
    $this->click("css=label");
    $this->type("txtNOPrograma", "CASA DE PRAIA");
  }

}

?>