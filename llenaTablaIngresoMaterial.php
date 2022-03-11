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
    $sql="INSERT INTO ingresoMaterial (id_Encargado,id_Pedido_in,id_Producto,cantidad,observacion)
    VALUES('1','80','5','150','No viene con daños y se muestra en buenas condiciones.')";
    if($conn->query($sql)===TRUE){
        echo"Registro capturado.";
    } else{
        echo"Error: ".$sql."<br>".$conn->error;
    }
    
    $conn->close();
?>