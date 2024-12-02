<?php
session_start();

include('con.php');

$mensaje = ""; 

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
 
    $nombre = $_POST['nombres'];
    $apellidos = $_POST['apellidos'];
    $contraseña = $_POST['contraseña'];
    $telefono = $_POST['telefono'];
    $correo = $_POST['correo'];

    $consulta_insertar = $conexion->prepare('INSERT INTO usuarios (Nombres, Apellidos, Contraseña, Correo, Telefono) VALUES (:nom, :apell, :con, :cor, :tel)');
    

    $resultado = $consulta_insertar->execute(array(
        ':nom' => $nombre,
        ':apell' => $apellidos,
        ':con' => $contraseña,
        ':cor' => $correo,
        ':tel' => $telefono
    ));

    

         header("Location:menu.html");
    if ($resultado) {
        $mensaje = "Te has dado de alta correctamente";
    } else {
        $mensaje = "Error al intentar darte de alta";
    }
}








?>
