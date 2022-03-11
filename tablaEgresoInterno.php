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
    $sql="CREATE TABLE egresoInterno (id_SalidaInterna INT(1) UNSIGNED AUTO_INCREMENT PRIMARY KEY,id_Encargado INT(1) NOT NULL,
    fecha_Hora TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,id_Producto INT(4) NOT NULL,cantidad INT(4) NOT NULL,
    id_Trabajador INT(3) NOT NULL)";

    if($conn->query($sql) === TRUE){
        echo "Tabla perfilEncargado creada correctamente.";
    } else{
        echo"Error al crear la tabla: ".$conn->error;
    }
    //Cerrar conexion
    $conn->close();
?>