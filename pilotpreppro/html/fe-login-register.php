<?php
session_start();

// Verificar si el usuario ya está autenticado
if (isset($_SESSION['usuario'])) {
    header("Location: ../html/fe-login-register.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PilotPrepPro | Acceso y Registro</title>
    <link rel="stylesheet" href="../assets/css/login-register.css"/>
    <link rel="icon" type="image/x-icon" href="../assets/css/images/icons/PilotPrepProicono.ico">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <?php
    $page_title = " Hola este es el nuevo login ";
    include '../assets/php/navbar.php';
    ?>
    <main class="hero">
        <div class="container-form register">
            <div class="information">
                <div class="info-childs">
                    <h2>Bienvenido</h2>
                    <p>Para poder realizar los tes debes rergistrarte o iniciar sesión</p>
                   <!-- <p><strong>¿Ya tienes Cuenta?<strong></strong></p> -->
                    <input type="button" value="Inicia Sesión" id="sign-in"> <!--boton login -->
                </div>
            </div>
            <div class="form-information">
                <div class="form-information-childs">
                    <h2>Crear una Cuenta</h2>
                    <div class="icons">
                        <i class='bx bxl-google'></i>
                        <i class='bx bxl-github' ></i>
                        <i class='bx bxl-linkedin' ></i>
                    </div>
                    <p>Usa tu email para registrarte</p>

                    <form class="form" action="../assets/php/be-register.php" method="POST">
                        <label >
                            <i class='bx bx-user' ></i>
                            <input type="text" name="nombre" id="nombre" placeholder="Nombre:" required>
                        </label>
                        <label >
                            <i class='bx bx-user' ></i>
                            <input type="text" name="apellidos" id="apellidos" placeholder="Apellidos:" required>
                        </label>
                        <label >
                            <i class='bx bx-envelope' ></i>
                            <input type="email" name="correo" id="correo" placeholder="Correo Electrónico:" required>
                        </label>
                        <label>
                            <i class='bx bx-user-check'></i>
                        <input type="text" id="usuario" name="usuario" placeholder="Usuario:" required>
                        </label>
                        <label>
                            <i class='bx bx-lock-alt' ></i>
                            <input type="password" name="contrasena" id="contrasena" placeholder="Contraseña:" required>
                            <i class="fas fa-eye" onclick="togglePassword('contrasena', this)"></i>
                        </label>
                        <input type="submit" value="Registrarse"> <!--boton registro -->
                    </form>
                </div>
            </div>
        </div>





        <div class="container-form login hide">
            <div class="information">
                <div class="info-childs">
                    <h2>¡Bienvenido!</h2>
                    <p>Para poder realizar los tes debes rergistrarte o iniciar sesión</p>
                    <p><strong>¿No tienes una cuenta?</strong></p>
                    <input type="button" value="Regístrate" id="sign-up">
                </div>
            </div>
            <div class="form-information">
                <div class="form-information-childs">
                    <h2>Inicio de Sesión</h2>
                    <div class="icons">
                        <i class='bx bxl-google'></i>
                        <i class='bx bxl-github' ></i>
                        <i class='bx bxl-linkedin' ></i>
                    </div>
                    <p>Inicia Sesión con una cuenta</p>
                    <form class="form" action="../assets/php/be-login.php" method="POST">
                        <label >
                            <i class='bx bx-envelope' ></i>
                            <input type="email" name="correo" id="correo" placeholder="Correo Electronico:">
                        </label>
                        <label >
                        <i class='bx bx-lock-alt' ></i>
                            <input type="password" name="contrasena" id="contrasena" placeholder="Contraseña:" required>
                            <i class="fas fa-eye" onclick="togglePassword('contrasena', this)"></i>
                        </label>
                        <input type="submit" value="Iniciar Sesión"> <!--boton login -->

                    </form>
                </div>
            </div>
        </div>
    </main>
        <script src="../js/script.js"></script>

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
