<?php

class LoginController extends Base_Controller_BaseController
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