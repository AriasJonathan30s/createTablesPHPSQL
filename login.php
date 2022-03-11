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



   $usuario=$_POST['username'];
   $contraseña=$_POST['psw'];
   echo"<p> $usuario</p>";
   echo"<p> $contraseña</p>";
   





   // Cerrar conexión
   $conn->close();
?>