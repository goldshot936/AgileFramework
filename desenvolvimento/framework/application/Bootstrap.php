<?php

class Bootstrap extends Zend_Application_Bootstrap_Bootstrap
{

    protected function _initAutoLoaderCollections(){
        $autoloader = Zend_Loader_Autoloader::getInstance();
        $autoloader->registerNamespace('Collections_');
        $autoloader->setFallbackAutoloader(true);
    }
    
}

