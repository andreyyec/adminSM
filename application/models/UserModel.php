<?php
class Application_Model_UserModel extends Base_Model_BaseModel{

	 public function init(){
    	parent::init();
    }

    public function login($user, $password){

        $user = $this->getDbRegistry('res_users', array('login'=>$user, 'password'=>$password, 'active'=>true));
        
        return $user;
    }

    public function logout(){
        session_unset();
        session_destroy();
    }

}
?>