<?php

require 'Beans/rb.php';

class Base_Controller_BaseController extends Zend_Controller_Action{

    public function init()
    {
        session_start();
        $this->_setConstants();
        $this->_session_handler();
    }

    protected function _session_handler(){
        if (!isset($_SESSION['userid'])) {
            $this->_redirect('/login?status=sessionExpired');
        }else{
            
        };
    }

    protected function _setConstants(){
        $constants = Zend_Registry::get('constants');
        $this->view->constants = $constants;
    }

}