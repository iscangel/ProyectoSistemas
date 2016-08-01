<?php
//Se Agrega el archivo que contine la conexion a la BD
include "conexion.php";
$id=$_POST['id'];
$nom=$_POST['nombre'];
$dir=$_POST['dir'];
$rfc=$_POST['Rfc'];
$tel=$_POST['tel'];
$clasif=$_POST['classif'];
$lat=$_POST['lat'];
$longt=$_POST['long'];
$foto=$_POST['fot'];

$sql="UPDATE Servicios SET NombreServicio='$nom', Direccion='$dir', RFC='$rfc', Telefono='$tel', Latitud='$lat', Longitud='$longt', Foto='$foto', clasificacion_id='$clasif' WHERE IdServicios=$id";
$res=mysqli_query($conexion,$sql);
if($res){
	echo "Los datos se actualizaron de manera exitosa";
	}else{
		  echo "Se produjo un error al momento de Actualizar los datos:".mysqli_error();
		}
mysqli_close($conexion);
?>
