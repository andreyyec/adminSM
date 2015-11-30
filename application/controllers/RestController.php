<?php

class RestController extends Base_Controller_BaseController
{

    public function init()
    {
    	parent::init();
        $this->_helper->layout->disableLayout();
        $this->_response->setHeader('Content-Type', 'text/plain');
        $this->_helper->viewRenderer->setNoRender(true);
    }

    public function indexAction()
    {

    }

    public function getemployeesAction(){

       $data = array();
       $data1 = array("Peter","Joe", "Peter","Joe", 35, 43);
       array_push($data, $data1);

        //[["stuff","stuff","stuff","stuff","stuff","stuff","stuff","stuff","stuff","stuff"]]

        $response = json_encode($data);
        
        die($response);
    }


}

