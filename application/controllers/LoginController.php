<?php

class LoginController extends Zend_Controller_Base
{

    public function init()
    {
    	parent::init();
    }

    public function indexAction()
    {
    	$this->_helper->layout->setLayout('login');
        $this->view->title = 'Login';
    }


}

`