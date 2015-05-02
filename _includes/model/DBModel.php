<?php

Class DBModel{

    	public function __construct(&$db) {
            $this->db = $db;
        }

public function execQueryValidation($query){
    $e = "";

    try { 
        $rs = $this->db->Execute($query);
	}catch (exception $e) {} 
    
    if (!$rs) {
        return "FALSE";
    }  else {
        return "TRUE";
    }
}

public function getArrayQueryValidation($query){
    $e = "";

    try { 
      $rs = $this->db->Execute($query);          
	} catch (exception $e) {
        return "FALSE";
    } 
       
    if ($e != "") {
        
    }else {
	    if ($rs) {
	        $data = $rs->getArray();
	        $rs->Close();
	        if ($data) {
	            return $data;
	        }else{
	            return "FALSE";    
	        }       
	    }       
    }

}




}

?>