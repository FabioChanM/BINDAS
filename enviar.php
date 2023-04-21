<?php

$destino = "fabioleon00@gmail.com";
$asunto = "Contacto desde el sitio web";


$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];
$empresa = $_POST["empresa"];
$telefono = $_POST["Telefono"];
$Ciudad = $_POST["Ciudad"];
$Estado = $_POST["Estado"];
$Pais = $_POST["Pais"];
$email = $_POST["email"];
$comentarios = $_POST["comentarios"];


$contenido = "
	<b>Nombre :</b> " . $nombre . "<br><b>Apellido :</b>" . $apellido . "<br><b>Empresa :</b> " . $empresa . "<br><b>Teléfono :</b>" . $telefono . "<br><b>Ciudad :</b> " . $Ciudad . "<br><b>Estado:</b>" . $Estado . "<br><b>Pais:</b> " . $Pais . "<br><b>email:</b>" . $email . "<br><b>Comentarios :</b> " . $comentarios;

// PARA QUE RECONOZCA LAS ETIQUETAS HTML

$encabezados  = "MIME-Version: 1.0" . "\r\n";
$encabezados .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// FUNCION MAIL Y REDIRECCIONAMIENTO
mail($destino, $asunto, $contenido, $encabezados);
header("Location: gracias.html");
