<?php
    $servername="127.0.0.1:3307";
    $username="webadmin";
    $password="admin";
    $dbname="nombreBD";
    //Crea conexion
    $conn= new mysqli($servername,$username,$password,$dbname);
    //Revisar conexion
    if($conn->connect_error){
        die("Conexion fallida: ".$conn->connect_error);
    }
    //SQL PARA CREAR TABLA
    $sql="CREATE TABLE perfilEncargado (id_encargado INT(000001) UNSIGNED AUTO_INCREMENT PRIMARY KEY,nombresEncargado VARCHAR(30) NOT NULL,
    apellidosEncargado VARCHAR(30) NOT NULL,puesto VARCHAR(30),area VARCHAR(30),fecha_Nacimiento_DDMMAAAA VARCHAR(20) NOT NULL,
    fechaContratacion TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP)";

    if($conn->query($sql) === TRUE){
        echo "Tabla perfilEncargado creada correctamente.";
    } else{
        echo"Error al crear la tabla: ".$conn->error;
    }
    //Cerrar conexion
    $conn->close();
?>