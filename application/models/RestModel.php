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

        die(var_dump($data));

        return $data;
    }

    public function setPolicy($data){

        $policy = $this->_createDBObject('policies');

        $policy ->namepolicy = $data['policyName'];
        $policy->numberpolicy = $data['policyNumber'];
        $policy->employeridtype = $data['idType'];
        $policy->employerid = $data['employerIdNumber'];
        $policy->employername = $data['employerName'];
        $policy->employerphone = $data['employerPhone'];
        $policy->employermail = $data['employerEmail'];
        $policy->employeraddress = $data['employerAddress'];
        $policy->active = (isset($data['']) ? 1 : 0);

        $output = $this->_storeDBObject($policy);

        return $output;
    }

    public function setPoliciesDataTable($table){

        $data = array();

        foreach ($table as $row) {
            $actions = '<button class="btn btn-primary btn-edit">Editar</button> <button class="btn btn-danger btn-delete">Eliminar</button>';
            $temp = array($row->id, $row->numberpolicy, $row->namepolicy, $row->employeridtype, $row->employerid , $row->employername, $row->employerphone, $row->employerfax, $row->employermail, $row->employeraddress, $row->active, $actions);
            array_push($data, $temp);
        }

        return $data;
    }
}
?>