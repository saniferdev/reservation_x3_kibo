<?php

ini_set('display_errors', 1); 
ini_set('display_startup_errors', 1); 
error_reporting(E_ALL);
ini_set('default_socket_timeout', 600);


$key                = "JQZZK353BEFIXVY9GY9KJS6DXUNCZYPF";
$url    			= "https://www.kibo.mg";

$url_soap  			= "http://192.168.130.55:8124/soap-wsdl/syracuse/collaboration/syracuse/CAdxWebServiceXmlCC?wsdl";

$login 				= 'admin';
$password 			= 'mW33Yjf8q88Bex';
$codeLang 			= 'FRA';
//$poolAlias 			= 'PREPROD'; //Pool de developpement
$poolAlias 			= 'PROD'; //Pool de production

$sqlServerHost 		= '192.168.130.71';
$sqlServerDatabase 	= 'COMMANDE_KIBO';
$sqlServerUser 		= 'commande_x3';
$sqlServerPassword 	= 'WesoKhu640Rfz0Yi';

$connectionInfo 	= array("Database" => $sqlServerDatabase, "UID" => $sqlServerUser, "PWD" => $sqlServerPassword, "CharacterSet" => "UTF-8");
$link 				= sqlsrv_connect($sqlServerHost, $connectionInfo);
if (!$link) {
     die( print_r( sqlsrv_errors(), true));
}

?>