<?php
class Application_Model_RestModel extends Base_Model_BaseModel{

	 public function init(){
    	parent::init();
    }

    public function getEmployees(){
        $employees = $this->getDbTable('employees');

        $data = $this->_setDataTableRegistries($employees);

        return $data;
    }

    public function getPolicies(){
        $policies = $this->getDbTable('policies');

        $data = $this->_setDataTableRegistries($policies);

        return $data;
    }

    public function setPolicy($data){

        $policy = $this->_createDBObject('policies');
        
        //return $policy;

    }

    public function _setDataTableRegistries($table){

        $data = array();

        foreach ($table as $row) {
            $actions = '<button class="btn btn-primary btn-edit">Editar</button> <button class="btn btn-danger btn-delete">Eliminar</button>';
            $temp = array($row->id, $row->name, $row->type, $row->pname, $actions);
            array_push($data, $temp);
        }

        return $data;
    }


}
?>