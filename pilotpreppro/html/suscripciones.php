<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PilotPrepPro | Suscripciones</title>
    <link rel="stylesheet" href="../assets/css/base.css"/>
    <link rel="icon" type="image/x-icon" href="../assets/css/images/icons/PilotPrepProicono.ico">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
<?php
    
    $page_title = "Planes y Suscripciones";
    include '../assets/php/navbar.php';
    ?>
    
    <main class="hero">
        <div class="plans-container">
            <div class="plan">
                <h2>Plan Gratis</h2>
                <div class="plan-price"><strong>0 &euro;</strong></div>
                
                <ul>
                    <li>- Acceso a contenido básico</li>
                    <li>- 1 examen gratuito</li>
                    <li>- Soporte por correo electrónico</li>
                </ul>
                <button>Elegir Plan</button>
            </div>

            <div class="plan">
                <h2>Plan Intermedio</h2>
                <div class="plan-price"><strong>&euro; 17.99/mes</strong></div>
                
                <ul>
                    <li>- Acceso a todo el contenido</li>
                    <li>- 5 exámenes gratuitos</li>
                    <li>- Soporte prioritario</li>
                </ul>
                <button>Elegir Plan</button>
            </div>

            <div class="plan">
                <h2>Plan Premium</h2>
                <div class="plan-price"><strong>&euro; 39.99/ 2 mes</strong></div>
                
                <ul>
                    <li>- Acceso completo a todos los materiales</li>
                    <li>- Exámenes ilimitados</li>
                    <li>- Soporte personalizado</li>
                    <li>- Acceso a seminarios exclusivos</li>
                </ul>
                <button>Elegir Plan</button>
            </div>
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