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
    //$sql="CREATE TABLE almacenamiento (id_Lote INT(4) NOT NULL,id_Almacen INT(1) NOT NULL,id_Pasillo INT(1) NOT NULL,
    //id_Localizacion INT(3) NOT NULL,id_Nivel INT(1) NOT NULL,id_Producto INT(1) NOT NULL,cantidad_Total INT(10) NOT NULL,
    //Caducidad TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP)";

    //if($conn->query($sql) === TRUE){
    //    echo "Tabla perfilEncargado creada correctamente.";
    //} else{
    //    echo"Error al crear la tabla: ".$conn->error;
    //}

    //LLenado de tabla
    $sql="INSERT INTO almacenamiento (id_Lote,id_Almacen,id_Pasillo,id_Localizacion,id_Nivel,id_Producto,cantidad_Total)
    VALUES('240','1','4','17','3','5','80')";
    if($conn->query($sql)===TRUE){
        echo"Registro capturado.";
    } else{
        echo"Error: ".$sql."<br>".$conn->error;
    }

    //Cerrar conexion
    $conn->close();
?>