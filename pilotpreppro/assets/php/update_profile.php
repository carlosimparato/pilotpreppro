<?php
session_start();
include '../php/conexion_be.php'; // Ajusta la ruta si es necesario

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $usuario_id = $_SESSION['usuario_id'];

    // Usa declaraciones preparadas para evitar inyecciones SQL
    $query = "UPDATE usuarios SET nombre = ?, correo = ? WHERE id = ?";
    $stmt = mysqli_prepare($conexion, $query);
    mysqli_stmt_bind_param($stmt, 'ssi', $nombre, $correo, $usuario_id);
    $success = mysqli_stmt_execute($stmt);

    if ($success) {
        // Actualiza la sesión con los nuevos datos
        $_SESSION['nombre'] = $nombre;
        $_SESSION['correo'] = $correo;
        header("Location: ../html/pagina-base.php");
        exit();
    } else {
        echo '<script>alert("Error al actualizar los datos."); window.location = "../html/pagina-base.php";</script>';
    }

    mysqli_close($conexion);
}
?>
