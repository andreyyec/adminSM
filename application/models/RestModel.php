<?php
class Application_Model_RestModel extends Base_Model_BaseModel{

	 public function init(){
    	parent::init();
    }

    public function getEmployees(){
        $this->getDbTable('employees');
    }
}
?>