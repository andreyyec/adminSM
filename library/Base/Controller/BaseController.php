<?php

require 'Beans/rb.php';

class Base_Controller_BaseController extends Zend_Controller_Action{

    public function init()
    {
        session_start();
        $this->_session_handler();
    }

    protected function _session_handler(){
        if (!isset($_SESSION['userid'])) {
            $this->_redirect('/login?status=sessionExpired');
        };
    }

}