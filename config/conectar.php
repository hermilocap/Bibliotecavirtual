<?php 

/*** funcion conectar que se conecata a mysql y devuelve el identificador de conexión***/
function conectar(){
	global $hostname, $usuario, $password, $bd;

	$idconexion = mysql_connect($hostname, $usuario, $password) or die(mysql_error());
	mysql_select_db($bd, $idconexion);
	return $idconexion;
	}
?>
