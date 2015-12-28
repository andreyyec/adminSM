<?php
class Application_Model_RestModel extends Base_Model_BaseModel{

	 public function init(){
    	parent::init();
    }

    public function getEmployees(){
        $employees = $this->getDbTable('employees');

        //$data = $this->setDataTableRegistries($employees);

        return $data;
    }

    public function getPolicies(){
        $policies = $this->_getDbTable('policies');

        $data = $this->setPoliciesDataTable($policies);

        return $data;
    }

    public function setPolicy($data){

        $policy = $this->_createDBObject('policies');

        $policy ->namepolicy = 'test1';
        $policy->numberpolicy = 663562;
        $policy->employeridtype = 'M';
        $policy->employerid = 107260219;
        $policy->employername = 'Gerardo Castro Campos';
        $policy->employerphone = 83827273;
        $policy->employermail = 'gcastro@recicladorasanmiguel.com';
        $policy->employeraddress = 'San Jose, Alajuelita, Concepción abajo, 200 metros oeste del templo católico';
        $policy->active = 'Y';

        $test = $this->_storeDBObject($policy);
        
        return $test;

    }

    public function setPoliciesDataTable($table){

        $data = array();

        foreach ($table as $row) {
            $actions = '<button class="btn btn-primary btn-edit">Editar</button> <button class="btn btn-danger btn-delete">Eliminar</button>';
            $temp = array($row->id, $row->numberpolicy, $row->namepolicy, $row->employername, $row->active, $actions);
            array_push($data, $temp);
        }

        return $data;
    }


}
?>