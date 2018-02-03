<?php
  	include 'adodb5/adodb.inc.php';
	include 'adodb5/adodb-errorhandler.inc.php';
	include 'adodb5/tohtml.inc.php';

  	// Activar errores
  	//ini_set('display_errors', 'On');
  	// Notificar solamente errores de ejecución
  	//error_reporting(E_ERROR);

	$dbdriver='mysqli';
	$server='localhost';
	$user='root';
	$password='Toshiba-2018';
	$database='reservas';

	$db = newADOConnection($dbdriver);
	$db->debug = true;
	$db->Connect($server, $user, $password, $database);

	if ($db->isConnected()) print "Conectado! ";
  	else print "Error no se pudo conetar a Base de Datos.";

/*
	//$dbdriver='oci8';
	$dbdriver='odbc_oracle'; // tambien puede probar con el oci8 
  	$user='bun_paciente';
	$password='bun';
	$database='PRODUCCION'; // nombre del ODBC o servicio se Oracle respectivamente

	$conn = ADONewConnection($dbdriver);  // create a connection
	$conn->debug=false;
	$conn->Connect($user, $password, $database);

	//$conn = OCIlogon("amperez","amperez1", "PROD") or die ("no se ha podido conectar a oracle");
	//print "Conectado ! ";
*/
?>
