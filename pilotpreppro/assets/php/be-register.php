<?php
session_start();
include '../php/conexion_be.php'; // Ajusta la ruta si es necesario

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    
    // Recibir los datos del formulario
    $nombre = $_POST['nombre'];
    $apellidos = $_POST['apellidos'];
    $correo = $_POST['correo'];
    $usuario = $_POST['usuario'];
    $contrasena = password_hash($_POST['contrasena'], PASSWORD_BCRYPT);
    //$suscripcion = $_POST['suscripcion'];
    //$escuela_aviacion = $_POST['escuela_aviacion'] ?? null; // Valor opcional
    //$fecha_r = $_POST['fecha_r']; // Fecha de registro
    //$fecha_n = $_POST['fecha_n']; // Fecha de nacimiento

    // Usa declaraciones preparadas para evitar inyecciones SQL
    $query = "INSERT INTO usuarios (nombre, apellidos, correo, usuario, contrasena) VALUES (?, ?, ?, ?, ?)";
    $stmt = mysqli_prepare($conexion, $query);

    if ($stmt) {
        // Asignar los valores a los parámetros
        mysqli_stmt_bind_param($stmt, 'sssss', $nombre, $apellidos, $correo, $usuario, $contrasena);

        // Ejecuta la consulta
        $result = mysqli_stmt_execute($stmt);

        // Verificar si el registro fue exitoso
        if ($result) {
            // Obtener el ID del nuevo usuario registrado
            $user_id = mysqli_insert_id($conexion);

            // Guardar información en la sesión
            $_SESSION['usuario_id'] = $user_id; // Corregido para almacenar el ID correcto
            $_SESSION['usuario'] = $usuario;
            $_SESSION['nombre'] = $nombre;
            $_SESSION['apellidos'] = $apellidos;
            $_SESSION['correo'] = $correo;
           

            // Redirigir a la página de perfil
            header("Location: ../pilotpreppro/html/pagina-base.php");
            exit();
        } else {
            // Error al registrar al usuario
            echo '<script>alert("Error al registrar el usuario."); window.location = "../html/fe-login-register.php";</script>';
        }

        // Cerrar la declaración
        mysqli_stmt_close($stmt);
    } else {
        // Error en la preparación de la consulta
        echo '<script>alert("Error en la preparación de la consulta."); window.location = "../html/fe-login-register.php";</script>';
    }

    // Cerrar la conexión
    mysqli_close($conexion);
}
?>
