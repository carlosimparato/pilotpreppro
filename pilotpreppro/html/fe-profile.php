<?php
session_start();

if (!isset($_SESSION['usuario'])) {
    header("Location: ../html/fe-login.php");
    exit();
}



// Concatenar nombre y apellidos
$nombreCompleto = isset($_SESSION['nombre']) ? $_SESSION['nombre'] : 'Nombre no disponible';
$apellidos = isset($_SESSION['apellidos']) ? $_SESSION['apellidos'] : 'Apellidos no disponibles';
$correo = isset($_SESSION['correo']) ? $_SESSION['correo'] : 'Correo no disponible';
$fecha_registro = isset($_SESSION['fecha_registro']) ? $_SESSION['fecha_registro'] : 'Fecha de registro no disponible';
$fecha_nacimiento = isset($_SESSION['fecha_nacimiento']) ? $_SESSION['fecha_nacimiento'] : 'Fecha de nacimiento no disponible';

// Concatenar nombre y apellidos
$nombreCompleto = $nombre . ' ' . $apellidos;
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PilotPrepPro | Perfil</title>
    <link rel="stylesheet" href="../assets/css/login.css"/>
    <link rel="icon" type="image/x-icon" href="../assets/css/images/icons/PilotPrepProicono.ico">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <?php
    $page_title = " ";
    include '../assets/php/navbar.php';
    ?>
    
    <main class="hero">
        <div class="container user-data">
            <h2>Datos del Usuario</h2>
            <p><strong>Nombre:</strong> <?php echo htmlspecialchars($nombreCompleto); ?></p>
            <p><strong>Email:</strong> <?php echo htmlspecialchars($_SESSION['correo']); ?></p>
            <p><strong>Usuario:</strong> <?php echo htmlspecialchars($_SESSION['usuario']); ?></p>
            <p><strong>Suscripción:</strong> <?php echo htmlspecialchars($_SESSION['suscripcion']); ?></p>
            <p><strong>Escuela de Vuelo:</strong> <?php echo htmlspecialchars($_SESSION['escuela_aviacion']); ?></p>
        </div>

        <div class="container update-form">
            <h2>Actualizar Datos</h2>
            <form action="../assets/php/update_profile.php" method="POST">
                <label for="nombre">Nombre:</label>
                <input type="text" id="nombre" name="nombre" value="<?php echo htmlspecialchars($_SESSION['nombre']); ?>" required>
                
                <label for="email">Email:</label>
                <input type="email" id="correo" name="correo" value="<?php echo htmlspecialchars($_SESSION['correo']); ?>" required>
                
                <input type="submit" value="Actualizar">
            </form>
        </div>

        <div class="container exam-history">
            <h2>Historial de Exámenes</h2>
            <ul>
                <!-- Aquí deberías incluir el historial de exámenes del usuario, por ejemplo: -->
                <!-- <?php foreach ($examenes as $examen) : ?>
                    <li><?php echo htmlspecialchars($examen['nombre']); ?> - <?php echo htmlspecialchars($examen['fecha']); ?></li>
                <?php endforeach; ?> -->
                <li>Ejemplo de examen 1 - 01/01/2024</li>
                <li>Ejemplo de examen 2 - 15/01/2024</li>
            </ul>
        </div>
    </main>

    <footer>
        <p>© 2024 - Todos los derechos reservados</p>
        <ul>
            <li><a href="../html/nosotros.php">Sobre Nosotros</a></li>
            <li><a href="../html/contacto.php">Contáctanos</a></li>
            <li><a href="../html/p-frecuentes.php">Preguntas Frecuentes</a></li>
        </ul>
        <div class="social-icons">
            <a href="https://facebook.com" target="_blank" class="facebook"><i class="fab fa-facebook-f"></i></a>
            <a href="https://twitter.com" target="_blank" class="twitter"><i class="fab fa-twitter"></i></a>
            <a href="https://instagram.com" target="_blank" class="instagram"><i class="fab fa-instagram"></i></a>
        </div>
    </footer>
</body>
</html>