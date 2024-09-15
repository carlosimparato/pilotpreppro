<?php
session_start();

if (!isset($_SESSION['usuario'])) {
    header("Location: ../html/fe-login-register.php");
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
    <title>Perfil del Usuario</title>
    <link rel="stylesheet" href="../assets/css/profile.css">
    <link rel="icon" type="image/x-icon" href="../assets/css/images/icons/PilotPrepProicono.ico">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <?php
    $page_title = "Perfil del Usuario";
    include '../assets/php/navbar.php';
    ?>

<main class="profile-container">
    <section class="bloks">
        <section class="profile-section-data">
            <h2>Datos del Usuario</h2>

            <form action="../assets/php/update-profile.php" method="POST">
                <div class="input-row">
                    <div class="input-group">
                        <label for="nombre">Nombre:</label>
                        <input type="text" id="nombre" name="nombre" value="<?php echo htmlspecialchars($nombreCompleto); ?>" readonly>
                    </div>
                </div>

                <div class="input-row">
                    <div class="input-group">
                        <label for="usuario">Usuario:</label>
                        <input type="text" id="usuario" name="usuario" value="<?php echo htmlspecialchars($_SESSION['usuario']); ?>" readonly>
                    </div>

                    <div class="input-group">
                        <label for="correo">Email:</label>
                        <input type="email" id="correo" name="correo" value="<?php echo htmlspecialchars($_SESSION['correo']); ?>" readonly>
                    </div>
        
                </div>

                <div class="input-row">
                    <div class="input-group">
                        <label for="fecha_r">Fecha de Registro:</label>
                        <input type="date" id="fecha_r" name="fecha_r" value="<?php echo $_SESSION['fecha_registro']; ?>" readonly>
                    </div>

                    <div class="input-group">
                        <label for="fecha_n">Fecha de Nacimiento:</label>
                        <input type="date" id="fecha_n" name="fecha_n" value="<?php echo $_SESSION['fecha_nacimiento']; ?>" readonly>
                    </div>

                </div>
            </form>
        </section>

        <section class="profile-section-data">
            <h2>Datos de Facturación</h2>
            <form action="../assets/php/update-billing.php" method="POST">
                <div class="input-row">
                    <div class="input-group">
                        <label for="ciudad">Ciudad:</label>
                        <input type="text" id="ciudad" name="ciudad" value="Ciudad del Usuario" readonly>
                    </div>
                    <div class="input-group">
                        <label for="direccion">Dirección:</label>
                        <input type="text" id="direccion" name="direccion" value="Dirección del Usuario" readonly>
                    </div>
                </div>
                <div class="input-row">
                    <div class="input-group">
                        <label for="codigo_postal">Código Postal:</label>
                        <input type="text" id="codigo_postal" name="codigo_postal" value="12345" readonly>
                    </div>
                    <div class="input-group">
                        <label for="pais">País:</label>
                        <input type="text" id="pais" name="pais" value="País" readonly>
                    </div>
                </div>
            </form>
        </section>
    </section>

    <section class="bloks">
        <div class="profile-section-data">
            <h2>Seguridad</h2>
            <button class="btn">Cambiar Contraseña</button>
            <button class="btn">Verificación en 2 Pasos</button>
        </div>

        <div class="profile-section-data">
            <h2>Otras Opciones</h2>
            <button class="btn btn-danger">Eliminar Cuenta</button>
        </div>
    </section>
</main>


    <!-- Pie de página -->
    <footer>
        <p>© 2024 - Todos los derechos reservados | PilotPrepPro</p>
        <ul>
            <li><a href="../html/fe-nosotros.php">Sobre Nosotros</a></li>
            <li><a href="../html/fe-contacto.php">Contáctanos</a></li>
            <li><a href="../html/fe-p-frecuentes.php">Preguntas Frecuentes</a></li>
        </ul>
        <div class="social-icons">
            <a href="https://facebook.com" target="_blank" class="facebook"><i class="fab fa-facebook-f"></i></a>
            <a href="https://twitter.com" target="_blank" class="twitter"><i class="fab fa-twitter"></i></a>
            <a href="https://instagram.com" target="_blank" class="instagram"><i class="fab fa-instagram"></i></a>
        </div>
    </footer>
</body>
</html>
