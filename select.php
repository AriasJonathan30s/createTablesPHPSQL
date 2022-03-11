<?php
$servername="127.0.0.1:3307";
$username="webadmin";
$password="admin";
$dbname="nombreBD";
// Crear conexión
$conn = new mysqli($servername,$username, $password, $dbname);

// Revisar conexión
if ($conn->connect_error) {
die("Conexion fallida: " . $conn->connect_error);
}

$sql = "UPDATE productos SET nombre_Producto='VGA Terra' WHERE id_Producto=5";
$result = $conn->query($sql);

$sql="SELECT id_Producto, nombre_Producto, cantidad_Total FROM productos";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Datos de salida para cada fila
    while($row = $result->fetch_assoc())
    {
    echo "id: " . $row["id_Producto"]. " -Producto: " . $row["nombre_Producto"]. " -Cantidad: " .
    $row["cantidad_Total"]. "<br>";
    }
    } else {
    echo "0 resultados";
    }

$conn->close();
?>