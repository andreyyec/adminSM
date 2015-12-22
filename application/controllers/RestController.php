<?php

class RestController extends Base_Controller_BaseController
{

    public function init()
    {
    	parent::init();
        $this->_helper->layout->disableLayout();
        $this->_response->setHeader('Content-Type', 'text/plain');
        $this->_helper->viewRenderer->setNoRender(true);
        $this->restModel = new Application_Model_RestModel();
    }

    public function indexAction()
    {

    }

    public function getemployeesAction(){

        $data = array();
        $data1 = array("Peter","Joe", "Peter","Joe", 35);
        array_push($data, $data1);

        echo json_encode($data);
    }

    public function setemployeeAction(){

        $data = 'setEmployee';

        echo json_encode($data);
    }


}

