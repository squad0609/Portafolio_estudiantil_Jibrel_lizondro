<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recoger y limpiar los datos del formulario
    $first = htmlspecialchars($_POST['first_name']);
    $last = htmlspecialchars($_POST['last_name']);
    $username = htmlspecialchars($_POST['username']);
    $email = htmlspecialchars($_POST['email']);
    $password = htmlspecialchars($_POST['password']);
    $confirmed = htmlspecialchars($_POST['confirmed_password']);

    // Validar que los campos no estén vacíos
    if (!empty($first) && !empty($last) && !empty($username) && !empty($email) && !empty($password) && !empty($confirmed)) {
        // Aquí puedes realizar acciones como guardar en una base de datos, enviar correos, etc.
        // Por ejemplo, solo mostraremos los datos recibidos:
        echo "Nombre: " . $first . "<br>";
        echo "Apellido: " . $last . "<br>";
        echo "Usuario: " . $username . "<br>";
        echo "Email: " . $email . "<br>";
        echo "Contraseña: " . $password . "<br>";
        echo "Confirmación de Contraseña: " . $confirmed . "<br>";
    } else {
        echo "Por favor, rellena todos los campos.";
    }
} else {
    echo "Método no permitido.";
}
?>
