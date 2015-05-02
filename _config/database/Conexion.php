<?php
require 'parameters.php';
include '../resources/libs/adodb5/adodb.inc.php';


class Conexion {

    var $db;
    
    public function __construct() {
        
        $this->db = ADONewConnection(DB_DRIVER);
        $this->db->Connect(DB_SERVER,  DB_USER, DB_PASS, DB_NAME);
        $this->db->SetFetchMode(ADODB_FETCH_ASSOC);
    }    

    
}

?>
