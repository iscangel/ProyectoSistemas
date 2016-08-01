<?php

$usario="u783648944_migue";
$passwd="sistemas";
$servidor="mysql.hostinger.mx";
$BD="u783648944_pc";

/*$usario="u253135181_movil";
$passwd="drag0n";
$servidor="mysql.hostinger.mx";
$BD="u253135181_servi";*/

/*$usario="root";
$passwd="alex";
$servidor="localhost";
$BD="serviciosLibres";*/



$conexion=mysqli_connect($servidor,$usario,$passwd, $BD)or die("Error al conectarse a la base de datos:".mysqli_error());
//mysql_select_db($BD,$conexion);
?>
