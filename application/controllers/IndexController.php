<?php

class IndexController extends Zend_Controller_Base
{

    public function init()
    {
    	parent::init();
    }

    public function indexAction()
    {
        $this->view->title = 'Home';
    }


}

