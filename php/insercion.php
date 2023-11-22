<?php

if(isset($_POST['btnEnviar'])){
     
    $tipo = $_POST['tdoc'];
    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $telefono = $_POST['telefono'];
    $sexo = $_POST['sexo'];
    $contacto = $_POST['contacto'];
    $asesor = $_POST['asesores'];
    $otros = $_POST['otros'];
   
    


    session_start();
    require('config.php');

	$register="INSERT INTO clientes(id, tipoid, nombre, email, telefono, sexo) VALUES('$id', '$tipo', '$nombre','$email','$telefono','$sexo')" or die("error".mysqli_errno($db_link));
	$result=mysqli_query($db_link,$register);

    $register="INSERT INTO reportes(idCliente, contactado, idAsesor, detalle) VALUES('$id','$contacto','$asesor','$otros')" or die("error".mysqli_errno($db_link));
    $result=mysqli_query($db_link,$register);
		header('location:..//web/contactos.html');
    
mysqli_close($db_link);
}
?>
