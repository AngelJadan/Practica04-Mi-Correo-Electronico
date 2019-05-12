<?php
$db_servername="localhost";
$db_username="root";
$db_password="";
$db_name="siscorreodb";

$conn=new mysqli($db_servername,$db_username,$db_password,$db_name);

if ($conn->connect_error){
    die("Conexión fallida!! ".$conn->connect_error);
}else{
    echo"<p>Conexion exitosa</p>";
}

?>