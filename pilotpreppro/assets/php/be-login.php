<?php
session_start();
include '../php/conexion_be.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $correo = mysqli_real_escape_string($conexion, $_POST['correo']);
    $contrasena = $_POST['contrasena'];

    $query = "SELECT * FROM usuarios WHERE correo = ?";
    $stmt = mysqli_prepare($conexion, $query);
    mysqli_stmt_bind_param($stmt, 's', $correo);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);

    if ($result && mysqli_num_rows($result) > 0) {
        $user = mysqli_fetch_assoc($result);

        if (password_verify($contrasena, $user['contrasena'])) {
            // Almacena información en la sesión
            $_SESSION['usuario'] = $user['usuario'];
            $_SESSION['usuario_id'] = $user['id'];
            $_SESSION['nombre'] = $user['nombre']; 
            $_SESSION['apellidos'] = $user['apellidos']; 
            $_SESSION['correo'] = $user['correo'];
            $_SESSION['suscripcion'] = $user['suscripcion'];
            $_SESSION['escuela_aviacion'] = $user['escuela_aviacion'];
            $_SESSION['fecha_registro'] = $user['fecha_r']; // Correcto para la tabla
            $_SESSION['fecha_nacimiento'] = $user['fecha_n']; // Correcto para la tabla
                
            // Redirige al perfil del usuario
            header("Location: ../html/pagina-base.php");
            exit();
        } else {
            // Contraseña incorrecta
            echo '<script>alert("Contraseña incorrecta."); window.location = "../html/fe-login-register.php";</script>';
        }
    } else {
        // Correo no encontrado
        echo '<script>alert("Correo no encontrado."); window.location = "../html/fe-login-register.php";</script>';
    }

    mysqli_close($conexion);
}
?>
