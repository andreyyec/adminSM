<?php

require_once("../_includes/model/DBModel.php");

Class Model extends DBModel{

    public function __construct(&$db) {
        parent::__construct($db);
    }


function example(){

	//your code;

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