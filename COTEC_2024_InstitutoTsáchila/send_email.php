<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener los datos enviados por el formulario
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Configurar el destinatario y asunto del correo
    $to = 'cotec@tsachila.edu.ec'; // Cambia esto por tu dirección de correo
    $subject = 'Nuevo mensaje de contacto';

    // Crear el cuerpo del correo
    $body = "Nombre: $name\nCorreo: $email\nMensaje:\n$message";

    // Configurar encabezados del correo
    $headers = "From: $email\r\n";

    // Enviar el correo
    if (mail($to, $subject, $body, $headers)) {
        http_response_code(200); // Si el correo se envía con éxito
    } else {
        http_response_code(500); // Si hay un problema al enviar el correo
    }
}
?>
