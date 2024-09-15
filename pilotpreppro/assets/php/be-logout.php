<?php
session_start();

// Eliminar todos los datos de la sesión
$_SESSION = array();

// Si se ha configurado una cookie de sesión, eliminarla
if (ini_get("session.use_cookies")) {
    $params = session_get_cookie_params();
    setcookie(session_name(), '', time() - 42000,
        $params["path"], $params["domain"],
        $params["secure"], $params["httponly"]
    );
}

session_unset(); // Elimina todas las variables de sesión

// Destruir la sesión
session_destroy();

// Redirigir al usuario a la página de inicio de sesión si no esta autenticado
header("Location: ../html/fe-login-register.php");
exit();
?>
