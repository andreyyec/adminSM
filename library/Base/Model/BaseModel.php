<?php

require 'Beans/rb.php';

class Base_Model_BaseModel{

    function __construct(){
        $this->init();
    }
    
    function init(){
    	$this->_openDBConnection();
    	$this->_setExtendedFunctionsDB();
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

    public function getDbTable($table) {
        $table = R::findAll($table);
        return $table;
    }


    public function getDbRegistries($table, $parameters){

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

    public function getDbRegistry($table, $parameters){

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
        $registry = R::findOne('res_users', $query, $paramArray);
     
        return $registry;
    }

    




    // Example Red Beans functions

    function example_redBeans(){

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

    }

    public function selectAllFromTable($table){
        $table = R::findAll($table);
        return $table;
    }


//Extended

    
    //$page = R::xdispense( 'cms_page' );

}



?>