<?php
session_start();
$err="";
 if ($_SERVER["REQUEST_METHOD"] == 'POST') {
    $nombre = $_POST["nombre"];
    $contraseña = $_POST["contraseña"];
 


    include('con.php');

    $consulta=$conexion->prepare('select * from usuarios where Nombres=:name');
    $consulta->execute([':name'=>$nombre]);

    $resultado=$consulta->fetch();
     if($resultado){
      if($resultado['Contraseña']==$contraseña){
       
 $_SESSION['apellidos']= $resultado['Apellidos'];
 $_SESSION['nombres']=$resultados['Nombres'];

 $_SESSION['ID_USUARIOS']=$resultado['ID_USUARIOS'];

 $_SESSION['telefono']=$resultado['Telefono'];
 $_SESSION['correo']=$resultado['Correo'];


 





         header("Location:menu.html");
         exit;
      }else{
         $err="Contraseña invalida";
      }
    }else{
      $err="Usuario inexistente";
    }
 
 }


 include('formu.php');
?>
