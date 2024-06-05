<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $asunto = $_POST['asunto'];
    $mensaje = $_POST['mensaje'];

    $destinatario = "rodrigoo1.fernandezz@gmail.com"; // Cambiar con tu dirección de correo electrónico
    $contenido = "Nombre: $nombre\nCorreo electrónico: $email\n\nMensaje:\n$mensaje";

    if (mail($destinatario, $asunto, $contenido)) {
        echo "El mensaje ha sido enviado correctamente.";
    } else {
        echo "Error al enviar el mensaje. Por favor, inténtalo de nuevo más tarde.";
    }
}
?>
