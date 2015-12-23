<?php
class Application_Model_RestModel extends Base_Model_BaseModel{

	 public function init(){
    	parent::init();
    }

    public function getEmployees(){
        $employees = $this->getDbTable('employees');

        return $employees;
    }

    public function getPolicies(){
        $policies = $this->getDbTable('policies');

        return $policies;
    }
}
?>