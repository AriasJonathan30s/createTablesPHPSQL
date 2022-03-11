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
    //$sql="CREATE TABLE productos (id_Producto INT(1) UNSIGNED AUTO_INCREMENT PRIMARY KEY,nombre_Producto VARCHAR(50),
    //version_Producto VARCHAR(50),cantidad_Total INT(1) NOT NULL,id_Almacen INT(1) NOT NULL,total_Lotes INT(2) NOT NULL,
    //Caducidad TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP)";

    //if($conn->query($sql) === TRUE){
    //    echo "Tabla perfilEncargado creada correctamente.";
    //}else{
    //    echo"Error al crear la tabla: ".$conn->error;
    //}

    //LLenado de tabla
    //$sql="INSERT INTO productos (nombre_Producto,version_Producto,cantidad_Total,id_Almacen,
    //total_Lotes)
    //VALUES('HDMI Logi','3 metros','30','1','2')";
    //$sql="INSERT INTO productos (nombre_Producto,version_Producto,cantidad_Total,id_Almacen,
    //total_Lotes)
    //VALUES('HDMI Logi','5 metros','20','1','4')";
    //$sql="INSERT INTO productos (nombre_Producto,version_Producto,cantidad_Total,id_Almacen,
    //total_Lotes)
    //VALUES('HDMI Torra','3 metros','25','1','1')";
    //$sql="INSERT INTO productos (nombre_Producto,version_Producto,cantidad_Total,id_Almacen,
    //total_Lotes)
    //VALUES('HDMI Torra','8 metros','10','1','2')";
    //$sql="INSERT INTO productos (nombre_Producto,version_Producto,cantidad_Total,id_Almacen,
    //total_Lotes)
    //VALUES('VGA','3 metros','5','1','5')";
    $sql="INSERT INTO productos (nombre_Producto,version_Producto,cantidad_Total,id_Almacen,
    total_Lotes)
    VALUES('VGA','5 metros','11','1','3')";

    if($conn->query($sql)===TRUE){
        echo"Registro capturado.";
    } else{
        echo"Error: ".$sql."<br>".$conn->error;
    }

    //Cerrar conexion
    $conn->close();
?>