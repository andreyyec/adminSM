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
        
        $employees = $this->restModel->getEmployees();
        die($employees);
        $data1 = array("Peter","Joe", "Peter","Joe", 35);
        array_push($data, $data1);

        echo json_encode($data);
    }

    public function setemployeeAction(){

        $data = 'setEmployee';

        echo json_encode($data);
    }

    public function getpoliciesAction(){

        $data = array();
        
        $policies = $this->restModel->getPolicies();

        foreach ($policies as $policy) {
            $actions = "This is the action";
            $temp = array($policy->id, $policy->name, $policy->type, $policy->pname, $actions);
            array_push($data, $temp);
        }
        //$data1 = array("Peter","Joe", "Peter","Joe", 35);
        //array_push($data, $data1);

        echo json_encode($data);
    }


}

