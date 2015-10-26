<?php

class IndexController extends Base_Controller_BaseController
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

