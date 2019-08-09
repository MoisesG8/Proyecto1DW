<?php

    $nombre=$_POST['nombre'];
    $segundo=$_POST['segundo'];
    $apellidos=$_POST['apellidos'];
    $dpi=$_POST['dpi'];
    $edad=$_POST['edad'];
    $email=$_POST['email'];
    $telefono=$_POST['telefono'];

    if($nombre === '' || $apellidos=== '' || $dpi === ""|| $edad === "" || $email === "" || $telefono === ""){
        echo json_encode('Error');
    }else {
        echo json_encode('Registro agregado exitosamente <br>'.$nombre.'<br>'.$segundo.'<br>'.$apellidos.'<br>'.$dpi.'<br>'.$edad.'<br>'.$email.'<br>'.$telefono);
    }

?>