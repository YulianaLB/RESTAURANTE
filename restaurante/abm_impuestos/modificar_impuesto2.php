<?php
session_start();
include"../conexion.php";
$nombre = $_REQUEST['nom_impuesto'];
$porcentaje=$_REQUEST['porcentaje'];
$id=$_REQUEST['identificador'];
/*echo $nombre. "<br>";
echo $porcentaje. "<br>";
echo $id. "<br>";
*/
if ($id="1"){

}else{
    echo "Es un numero".$id;
}
$sql ="UPDATE 'impuestos' SET 'nombre'='$nombre','porcentaje'='$porcentaje' WHERE ID_impuestos= $id";
mysqli_query($conexion,$sql);

