<?php

require 'Beans/rb.php';

class Base_Model_BaseModel{
    
    protected $db;

    function init(){
    	db_setup();
    	extended_functions();
        $this->db = R;
    }
 
    function db_setup(){
    	R::setup( 'pgsql:host=localhost;dbname=postgres',
        'postgres', 'Admin123' );

        R::freeze(1);
    }

    function extended_functions(){
    	R::ext('xdispense', function( $type ){ 
        	return R::getRedBean()->dispense( $type ); 
    	});
    }

    function db_close(){
    	R::close();
    }

    function dbReturn(){
        return $this->db;
    }

    function userValidate(){
        session_start();
        
        return false;
    }

    function getDbTable($table) {
        $table = R::findAll($table);
        return $table;
    }






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