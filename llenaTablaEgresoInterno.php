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
    //LLenado de tabla
    $sql="INSERT INTO egresoInterno(id_Encargado,id_Producto,cantidad,id_Trabajador)
    VALUES('1','3','10','72')";
    if($conn->query($sql)===TRUE){
        echo"Registro capturado.";
    } else{
        echo"Error: ".$sql."<br>".$conn->error;
    }
    
    $conn->close();
?>