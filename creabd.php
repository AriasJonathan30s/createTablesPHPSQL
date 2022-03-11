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
    //echo"**Conexion correcta**";

    //Crear base de datos
    $sql ="CREATE DATABASE nombreBD";
    if($conn->query($sql)===TRUE){
        echo"**Base de datos creada correctamente**";
    } else{
        echo"Error al crear la bd: ".$conn->error;
    }






    // Cerrar conexión
    $conn->close();
?>