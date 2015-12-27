<?php

require_once 'Beans/rb.php';

class Base_Model_BaseModel{

    var $constants;

    function __construct(){
        $this->_init();
    }
    
    function _init(){
    	$this->_openDBConnection();
    	$this->_setExtendedFunctionsDB();
        $registry = Zend_Registry::getInstance();
        $this->constants = $registry['constants'];
    }

    // BASE DB functions
 
    public function _openDBConnection(){
    	R::setup( 'pgsql:host=localhost;dbname=postgres',
        'postgres', 'Admin123' );

        R::freeze(1);
    }

    protected function _closeDBConnection(){
    	R::close();
    }

    protected function _getDB(){
        return $this->db;
    }

    protected function _setExtendedFunctionsDB(){
        R::ext('xdispense', function( $type ){ 
            return R::getRedBean()->dispense( $type ); 
        });
    }

    public function _getDbTable($table) {
        $table = R::findAll('adminsm_'.$table);
        return $table;
    }


    public function _getDbRegistries($table, $parameters){

        $query = '';
        $paramArray = array();
        $counter = 0;
        foreach ($parameters as $key => $value) {
            if ($counter !== 0) {
                $query .= ' AND '.$key.' = :'.$key;
            }else{
                $query = $key.' = :'.$key;
            }

            $paramArray[':'.$key] = $value;
            $counter ++;
        }
        $registry = R::find($table, $query, $paramArray);
     
        return $registry;
    }

    public function _getDbRegistry($table, $parameters){

        $query = '';
        $paramArray = array();
        $counter = 0;
        foreach ($parameters as $key => $value) {
            if ($counter !== 0) {
                $query .= ' AND '.$key.' = :'.$key;
            }else{
                $query = $key.' = :'.$key;
            }

            $paramArray[':'.$key] = $value;
            $counter ++;
        }
        $registry = R::findOne($table, $query, $paramArray);
     
        return $registry;
    }

    public function _createDBObject($type){

        $obType = $this->constants->db_preffix.$type;

        $object = R::xdispense($obType);

        return $object;
    }

    public function _storeDBObject($object){
        R::store($object);
    }


    




    // Example Red Beans functions

    /*function example_redBeans(){

    	// -- Create
    	$user = R::dispense('user');
    	$user->login = 'test';
    	$user->password = sha1('fish');
    	$user->email = 'test@test.com';
    	$user->money = 100;
    	$id = R::store($user);
    	
    	//return $id;



    	// -- Retrieve
    	$users = R::findAll('user'); // Select * FROM user;
    	//$specUser = R::load('user', $users->[3]->id); // Buscan un id especifico obtenido anteriormente





    	// -- Update
    	$u = R::load('user', 1); //(table,id)
    	$u->login = 'DogFace';
    	R::store($u);


    	// -- Delete
    	$u = R::load('user', 1);
    	R::trash($u);




//FETCH
    $data = R::getAll("SELECT * From user");
    $data1 = R::getRow("SELECT * From user");

    //R::exec('DELETE FROM user WHERE id = ?', [3]);

    }*/


//Extended

    
    //$page = R::xdispense( 'cms_page' );

}



?>