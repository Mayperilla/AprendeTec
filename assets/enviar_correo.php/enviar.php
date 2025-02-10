<?php
if($_POST){
  $nombre = $_POST['nombre'];
  $correo = $_POST['correo'];
  $mensaje = $_POST['mensaje'];
  $destinatario = "aprendeteccolombia@gmail.com";
  $asunto = "Nuevo mensaje de " . $nombre;
  $cuerpo = "Nombre: " . $nombre . "\r\n";
  $cuerpo .= "Correo electrónico: " . $correo . "\r\n";
  $cuerpo .= "Mensaje: " . $mensaje . "\r\n";
  $headers = "From: aprendeteccolombia@gmail.com" . "\r\n" .
    "Reply-To: " . $correo . "\r\n" .
    "X-Mailer: PHP/" . phpversion();
  mail($destinatario, $asunto, $cuerpo, $headers);
  echo "¡Correo enviado correctamente!";
}
?>
