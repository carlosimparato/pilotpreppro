<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PilotPrepPro | Exámenes</title>
    <link rel="stylesheet" href="../assets/css/examenes.css"/>
    <link rel="icon" type="image/x-icon" href="../assets/css/images/icons/PilotPrepProicono.ico">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <?php
    $page_title = "Examenes y Test";
    include '../assets/php/navbar.php';
    ?>

    <main class="hero">
        <div class="container-test">
            <!-- Contenedor de los circle checks -->
            <div class="circle-container">
                <h2>Modalidad</h2>
                <div class="circle-option">
                    <input type="radio" id="examen" name="modalidad" value="examen">
                    <label for="examen">
                        <span class="circlecheck"></span>
                        Examen
                    </label>
                </div>

                <div class="circle-option">
                    <input type="radio" id="test" name="modalidad" value="test">
                    <label for="test">
                        <span class="circlecheck"></span>
                        Test
                    </label>
                </div>
            </div>
            <!-- Contenedor de la lista desplegable -->
            <div class="select-container">
                <label for="examenes">Seleccione un exámen:</label>
                <select id="examenes" name="examenes">
                    <option value="comunicaciones">Comunicaciones</option>
                    <option value="principios_de_vuelo">Principios de Vuelo</option>
                    <option value="limitaciones_factores_humanos">Limitaciones y Factores Humanos</option>
                    <option value="performance_planificacion_vuelo">Performance y Planificacion de Vuelo</option>
                    <option value="meteorologia">Meteorología</option>
                    <option value="procedimientos_operacionales">Procedimientos Operacionales</option>
                    <option value="legislacion">Legislacion Aerea y Procedimientos ATC</option>
                    <option value="conocimiento_general_aviacion">Conocimiento General de la aviacion</option>
                    <option value="navegacion_aerea">Navegacion Aerea</option>
                </select>
            </div>
        </div>

        <!-- Botón para ir a más detalles del examen -->
        <div class="button-container">
            <button id="verDetalles" onclick="irADetalles()">Ver detalles del examen</button>
        </div>
        
    </main>
        <script src="../js/script.js"></script>
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