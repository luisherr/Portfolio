<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["name"];
    $correo = $_POST["email"];
    $telefono = $_POST["number"];
    $asunto = $_POST["text"];
    $mensaje = $_POST["textarea"];

    // Configurar los destinatarios del correo electrónico
    $para = "luisherrerawebdeveloper@gmail.com";

    // Configurar el asunto y el cuerpo del correo electrónico
    $titulo = "Nuevo mensaje de contacto: $asunto";
    $cuerpo = "Has recibido un nuevo mensaje de contacto:\n\n";
    $cuerpo .= "Nombre: $nombre\n";
    $cuerpo .= "Correo electrónico: $correo\n";
    $cuerpo .= "Número telefónico: $telefono\n";
    $cuerpo .= "Mensaje:\n$mensaje\n";

    // Configurar los encabezados del correo electrónico
    $encabezados = "From: $correo\r\n";
    $encabezados .= "Reply-To: $correo\r\n";
    $encabezados .= "X-Mailer: PHP/".phpversion();

    // Enviar el correo electrónico
    mail($para, $titulo, $cuerpo, $encabezados);

    // Redireccionar al usuario a una página de agradecimiento
    header("Location: index.html");
    exit;
}
?>

