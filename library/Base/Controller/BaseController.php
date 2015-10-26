<?php

class Base_Controller_BaseController extends Zend_Controller_Action{

    public function init()
    {
    	$this->_session_hander();
    }

    protected function _session_hander(){
    	$baseModel = new Base_Model_BaseModel();
    	$session = $baseModel->userValidate();
    	if ($session === true) {
    		echo "EN SESION";
    	}else{
    		echo "Session expirada";
    	};
    }

}