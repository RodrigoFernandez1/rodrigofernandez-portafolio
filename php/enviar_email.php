<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $names = $_POST['names'];
    $phone = isset($_POST['phone']) ? $_POST['phone'] : '';
    $email = $_POST['email'];
    $mensaje = $_POST['mensaje'];

    // Validate the data
    if (empty($names) || empty($email) || empty($mensaje)) {
        echo "Todos los campos obligatorios deben ser completados.";
        exit;
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Correo electrónico no válido.";
        exit;
    }

    // Prepare the email
    $to = 'rodrigoo1.fernandezz@gmail.com';
    $subject = 'Nuevo mensaje de contacto';
    $message = "Nombres: $names\n";
    $message .= "Teléfono: $phone\n";
    $message .= "Correo electrónico: $email\n";
    $message .= "Mensaje:\n$mensaje\n";
    $headers = "From: $email";

    // Send the email
    if (mail($to, $subject, $message, $headers)) {
        echo "Mensaje enviado con éxito.";
    } else {
        echo "Error al enviar el mensaje.";
    }
} else {
    echo "Método de solicitud no válido.";
}
?>
