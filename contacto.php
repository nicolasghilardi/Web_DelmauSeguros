<?php
$nombre = $_POST['name'];
$email = $_POST['email'];
$telefono = $_POST['phone'];
$mensaje = $_POST['message'];
$para = 'info@delmauseguros.com.ar';
$header = "From: info@delmauseguros.com.ar\nReply-to:".$_POST["email"]."\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";
$titulo = "Contacto Web: " .$nombre ;
$msjCorreo = " Nombre: $nombre\n E-mail: $email\n Telefono: $telefono\n Mensaje: $mensaje\n ";
$msjCorreo .= "Enviado el " . date('l jS \of F Y h:i:s A');
if ($_POST) {
    if (mail ( $para, $titulo, $msjCorreo, $header)){
        echo "<script language='javascript>
        alert('Muchas Gracias!.');
        window.location.href = 'https://www.delmauseguros.com.ar';
        </script>";
    } else {
        header("Location: https://www.delmauseguros.com.ar");
    }
}
?>