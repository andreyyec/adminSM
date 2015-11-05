<?php

class LoginController extends Zend_Controller_Action{

	var $userModel;

    public function init(){
    	parent::init();
    	$this->userModel = new Application_Model_UserModel();
    }

    public function indexAction(){
    	$this->_helper->layout->setLayout('login');
        $this->view->title = 'Login';
    }

    public function validationAction(){
    	$loginParameters = $this->_request->getPost();
    	$user = $this->userModel->login($loginParameters['userid'], $loginParameters['password']);

    	if (isset($user)) {          // @TODO implement new php 5 sessions
            session_start();
            $_SESSION['userid'] = $user->id;
            $_SESSION['user'] = $user->login;

            $this->_redirect('/');
        }else{
            $this->_redirect('/login?status=error');
        }
    }

    public function logout(){
    	$this->userModel->logout();
    	$this->_redirect('/login');
    }

}