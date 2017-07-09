<?php

    $nombre = $_POST['name'];
	$correo = $_POST['email'];
	$mensaje = $_POST['comment'];
    $headers =  'MIME-Version: 1.0' . "\r\n"; 
    $headers .= 'From: Your name <info@address.com>' . "\r\n";
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n"; 

    if(!empty($nombre) && !empty($correo) && !empty($mensaje) && isset($nombre) && isset($correo) && isset($mensaje)){
        mail ("mavega998@misena.edu.co","Mensaje de Taller Web",$nombre."\n".$correo."\n".$mensaje,$headers);
        echo "Sus datos se recibieron correctamente...";
        header('Location: home.html');
    } else {
        echo "Hubo un error en la recepcion de datos...";
    }

?>