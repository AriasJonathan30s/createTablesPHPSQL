<?php
     $servername="127.0.0.1:3307";
     $username="webadmin";
     $password="admin";
    //crear conexión
    $conn = new mysqli($servername,$username,$password);
    //Revisar conexión
    if($conn->connect_error){
        die("Conexion fallida: ".$conn->connect_error);
    }
    echo"**Conexion correcta**";
    // Cerrar conexión
    $conn->close();
?>