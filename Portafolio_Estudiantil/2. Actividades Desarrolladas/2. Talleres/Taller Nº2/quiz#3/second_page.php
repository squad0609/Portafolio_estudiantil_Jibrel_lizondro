<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Confirmación de Registro</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .container {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 400px;
            text-align: center;
        }
        .avatar {
            margin: 0 auto 20px;
            width: 100px;
            height: 100px;
            border-radius: 50%;
            background-image: url('plantilla.jpg'); /* Ruta a tu imagen */
            background-size: cover;
            background-position: center;
        }
        h2 {
            margin-bottom: 20px;
        }
        p {
            font-size: 18px;
        }
        .info {
            text-align: left;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <img src="imagen.png" alt="Imagen" style="width: 100px; height: 100px; border-radius: 8px; margin-bottom: 40px;">
        <div class="avatar"></div>
        <h2>Confirmación de Registro</h2>
        
        <?php
        // Recibir los datos del formulario
        $first_name = isset($_POST['first_name']) ? $_POST['first_name'] : '';
        $last_name = isset($_POST['last_name']) ? $_POST['last_name'] : '';
        $username = isset($_POST['username']) ? $_POST['username'] : '';
        $email = isset($_POST['email']) ? $_POST['email'] : '';
        $tel = isset($_POST['tel']) ? $_POST['tel'] : '';

        // Mostrar los datos recibidos
        echo "<p>¡Registro exitoso!</p>";
        echo "<div class='info'>";
        echo "<p><strong>Nombre:</strong> $first_name $last_name</p>";
        echo "<p><strong>Usuario:</strong> $username</p>";
        echo "<p><strong>Email:</strong> $email</p>";
        echo "<p><strong>Teléfono:</strong> $tel</p>";
        echo "</div>";
        ?>
        
    </div>
</body>
</html>
