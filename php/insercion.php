<?php

try{

if(isset($_POST['btnEnviar'])){
     
    $tipo = $_POST['tdoc'];
    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $telefono = $_POST['telefono'];
    $sexo = $_POST['sexo'];
    $contacto = $_POST['contacto'];
    $asesor = $_POST['asesores'];
    $vehiculo = $_POST['vehiculo'];
    $otros = $_POST['otros'];
   
    

    session_start();
    require('config.php');

    $sql = "SELECT * FROM clientes WHERE id = '$id'";
    $resultado = mysqli_query($db_link, $sql);

    if($resultado != null){

        $register="INSERT INTO reportes(idCliente, contactado, idAsesor, idVehiculo, detalle) VALUES('$id','$contacto','$asesor','$vehiculo','$otros')";
        $result=mysqli_query($db_link,$register);

    }else{

    
	    $register="INSERT INTO clientes(id, tipoid, nombre, email, telefono, sexo) VALUES('$id', '$tipo', '$nombre','$email','$telefono','$sexo')";
	    $result=mysqli_query($db_link,$register);
        
        $register="INSERT INTO reportes(idCliente, contactado, idAsesor, idVehiculo, detalle) VALUES('$id','$contacto','$asesor','$vehiculo','$otros')";
        $result=mysqli_query($db_link,$register);
    
    }
   header('location:..//web/contactos.html');
   mysqli_close($db_link);
}
}catch(Exception $e){
    echo ''. $e->getMessage();
}
?>
