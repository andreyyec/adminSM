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
        //$UserModel = new Application_Model_UserModel();
        //$testModel->sayHello();
    }


}

