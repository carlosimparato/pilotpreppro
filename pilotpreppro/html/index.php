
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PilotPrepPro | Inicio</title>
    <link rel="stylesheet" href="../assets/css/index.css">
    <link rel="icon" type="image/x-icon" href="../assets/css/images/icons/PilotPrepProicono.ico">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <!-- Encabezado -->
    <?php
    // Para index.php
    $page_title = "Bienvenido a PilotPrepPro";
    include '../assets/php/navbar.php';
    ?>
    <main>
        <!-- Sección Principal (Hero) -->
        <section class="hero">
            <div class="hero-content">
                <h1>Prepárate para tus exámenes de piloto</h1>
                <p>Accede a exámenes de simulación y recursos para aprobar tus exámenes de aviación</p>
                <a href="../html/suscripciones.php" class="btn-primary">Ver Planes</a>
            </div>
        </section>
    </main>
    <!-- Sección de Beneficios -->
    <section class="benefits">
        <div class="container">
            <h2>¿Por qué elegir PilotPrepPro?</h2>
            <div class="benefit-grid">
                <div class="benefit-item">
                    <i class="fas fa-graduation-cap"></i>
                    <h3>Exámenes actualizados</h3>
                    <p>Preguntas basadas en los últimos exámenes oficiales.</p>
                </div>
                <div class="benefit-item">
                    <i class="fas fa-desktop"></i>
                    <h3>Plataforma amigable</h3>
                    <p>Diseñada para que te concentres en aprender.</p>
                </div>
                <div class="benefit-item">
                    <i class="fas fa-dollar-sign"></i>
                    <h3>Planes flexibles</h3>
                    <p>Opciones para todos los presupuestos.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Sección de Planes -->
    <section class="plans">
        <div class="container">
            <h2>Elige tu plan</h2>
            <div class="plan-grid">
                <div class="plan-item">
                    <h3>Gratis</h3>
                    <p>Acceso limitado a exámenes</p>
                    <a href="fe-register.php" class="btn-secondary">Empieza Gratis</a>
                </div>
                <div class="plan-item">
                    <h3>Intermedio</h3>
                    <p>Acceso a más exámenes y análisis de resultados</p>
                    <a href="fe-register.php" class="btn-secondary">Suscribirse</a>
                </div>
                <div class="plan-item">
                    <h3>Premium</h3>
                    <p>Acceso total a todos los recursos y soporte</p>
                    <a href="fe-register.php" class="btn-secondary">Suscribirse</a>
                </div>
            </div>
        </div>
    </section>

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
