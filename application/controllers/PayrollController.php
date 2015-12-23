<?php

class PayrollController extends Base_Controller_BaseController
{

    public function init()
    {
    	parent::init();
    }

    public function indexAction()
    {
        
    }

    public function insuranceAction()
    {
        $this->view->title = 'INS';
    }

    public function weeklyAction()
    {
        $this->view->title = 'Semanal';
    }

    public function loansAction()
    {
        $this->view->title = 'Prestamos';
    }

    public function employeesAction()
    {
        $this->view->title = 'Empleados';
    }

    public function policiesAction()
    {
        $this->view->title = 'Polizas';
    }


}

