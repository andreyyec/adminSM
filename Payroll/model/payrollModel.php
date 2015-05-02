<?php

require_once("../_includes/model/DBModel.php");

Class PayrollModel extends DBModel{

    public function __construct(&$db) {
        parent::__construct($db);
    }

// ==========================================================  Employees functions
function getEmployee(){

		$sql = "SELECT * FROM admsm_employees;";
        $rs = parent::getArrayQueryValidation($sql);




}

function getEmployees(){

		$sql = "SELECT user, pass FROM SM_USUARIOS WHERE user='".$user."' AND pass='".$pass."';";
        $rs = parent::getArrayQueryValidation($sql);

}

function insertEmployee($id, $name, $active){

		$sql = "Insert INTO admsm_ocupations (idOcupation, ocupationName, ocupationActive) VALUES ('$id', '$name', '$active');";
        $rs = parent::execQueryValidation($sql);

}

function updateEmployee($id){

		$sql = "SELECT user, pass FROM SM_USUARIOS WHERE user='".$user."' AND pass='".$pass."';";
        $rs = parent::execQueryValidation($sql);

}

function removeEmployee($id){

		$sql = "SELECT user, pass FROM SM_USUARIOS WHERE user='".$user."' AND pass='".$pass."';";
        $rs = parent::execQueryValidation($sql);

}

// ==========================================================  Employees functions
function getOcupations(){

        $sql = "SELECT idocupation, ocupationname, ocupationactive FROM admsm_ocupations;";
        $rs = parent::getArrayQueryValidation($sql);

        return $rs;

}

function getOcupation(){

        $sql = "SELECT user, pass FROM SM_USUARIOS WHERE user='".$user."' AND pass='".$pass."';";
        $rs = parent::getArrayQueryValidation($sql);

}

function insertOcupation($id, $name, $active){

        $sql = "Insert INTO admsm_ocupations (idOcupation, ocupationName, ocupationActive) VALUES ('$id', '$name', '$active');";
        $rs = parent::execQueryValidation($sql);

}

function updateOcupation($id){

        $sql = "SELECT user, pass FROM SM_USUARIOS WHERE user='".$user."' AND pass='".$pass."';";
        $rs = parent::execQueryValidation($sql);

}

function removeOcupation($id){

        $sql = "SELECT user, pass FROM SM_USUARIOS WHERE user='".$user."' AND pass='".$pass."';";
        $rs = parent::execQueryValidation($sql);

}

/*


function example_DB_CALL(){

		$sql = "SELECT user, pass FROM SM_USUARIOS WHERE user='".$user."' AND pass='".$pass."';";
        $rs = parent::getArrayQueryValidation($sql); // llamada a la base de datos obteniendo un array de resultados
        $rs = parent::execQueryValidation($sql);	  // llamada a la base de datos sin array resultante

}

$query = "your sql query";			Establece el query a ejecutar en la base de datos
$rs = $this->db->Execute($query);	Ejecuta el query en la base de datos
$data = $rs->getArray();			Obtiene la informacion del resultset y lo convierte en un array
$rs->Close();						Cierra la conexion con la base de datos

*/

}

?>