<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
?>

<!-- navbar.php -->
<header class="fixed-header">
        <ul class="nav">
            <li><a href="../html/Index.php">
                    <img src="../assets/css/images/PilotPrepPro_Three_Ps_Logo.jpg" alt="PilotPrepPro Logo" style="height: 50px;"> 
                </a>
            </li>
            <li><a href="../html/examenes.php">Exámenes</a>
                <ul>
                    <li><a href="#">Comunicaciones</a></li>
                    <li><a href="#">Principios de vuelo</a></li>
                    <li><a href="#">Limitaciones y Factores Humanos</a></li>
                    <li><a href="#">Performance y Planificacón de Vuelo</a></li>
                    <li><a href="#">Meteorología</a></li>
                    <li><a href="#">Procedimientos Operacionales</a></li>
                    <li><a href="#">Legislación aérea y Procedimientos ATC</a></li>
                    <li><a href="#">Conocimiento General de la Aeronave</a></li>
                    <li><a href="#">Navegación Aérea</a></li>
                </ul>
            </li>
            <li><a href="../html/suscripciones.php">Suscripción</a>
                <ul>
                    <li><a href="#">Plan Gratis</a></li>
                    <li><a href="#">Plan Intermedio</a></li>
                    <li><a href="#">Plan Premium</a></li>
                </ul>
            </li>
            <li><a href="../html/noticias.php">Novedades</a></li>
        </ul>
        <ul class="nav-right">
            <?php if (isset($_SESSION['usuario'])): ?>
                <li><a href="../html/pagina-base.php"><i class="fas fa-user"></i> <?php echo htmlspecialchars($_SESSION['nombre']) . ' ' . htmlspecialchars($_SESSION['apellidos']); ?></a></li>
                <li><a href="../asset/php/be-logout.php"><i class="fas fa-sign-out-alt"></i> Cerrar sesión</a></li>
            <?php else: ?>
                <li><a href="../html/fe-login-register.php">Iniciar sesión | Regístrate</a></li>
            <?php endif; ?>
        </ul>
</header>

<!-- Nuevo Nav debajo del header -->
<nav class="dynamic-nav">
    <?php if (isset($_SESSION['usuario'])): ?>
        <p>Bienvenido, <?php echo htmlspecialchars($_SESSION['usuario']); ?>!</p>
    <?php else: ?>
        <p><strong><?php echo $page_title ?? 'Título de la Página'; ?></strong></p> <!-- Muestra el título dinámico -->
    <?php endif; ?>
</nav>
