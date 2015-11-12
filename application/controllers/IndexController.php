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
        $this->view->oilChanges = 0;
        $this->view->severance = 1;
        $this->view->dailyLoans = 3;
        $this->view->unattendedClients = 2;
        //$UserModel = new Application_Model_UserModel();
        //$testModel->sayHello();
    }


}

