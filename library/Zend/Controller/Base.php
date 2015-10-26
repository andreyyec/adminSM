<?php

class Zend_Controller_Base extends Zend_Controller_Action{

    public function init()
    {
    	$this->_session_hander();
    }

    protected function _session_hander(){
    	$baseModel = new Application_Model_Base();
    	$session = $baseModel->userValidate();
    	if ($session === true) {
    		echo "EN SESION";
    	}else{
    		echo "Session expirada";
    	};
    }

}