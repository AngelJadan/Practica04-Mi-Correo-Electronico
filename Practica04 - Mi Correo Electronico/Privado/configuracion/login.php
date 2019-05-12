<?php
    session_start();
    
    include '/conexiondb.php'
    $usuario = isset($_POST["usuario"])?trim($_POST["correo"]):null;
    $contrasena = isset($_POST["contrasena"])?trim($_POST["contrasena"]):null;

    $sql="SELECT * FROM usuario where usu_correo='$usuario' and usu_contrasena = MD5('$contrasena')";
    $result = $conn->query($sql);
    if($result->num_rows>0){
        $_SESSION['isLogged']=TRUE;
        header("Location:..            falta terminar direccion  ")
    }else{
        header("Location:../index.html")
    }
    $conn->close();
?>