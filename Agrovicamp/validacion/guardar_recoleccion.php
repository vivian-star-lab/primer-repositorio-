<?php
include 'conexion.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    // Recoger y limpiar datos
    $fecha = trim($_POST['fecha']);
    $origen = trim($_POST['origen']);
    $tipo_materia = trim($_POST['tipo_materia']);
    $cantidad = trim($_POST['cantidad']);
    $estado = trim($_POST['estado']);
    $transporte = trim($_POST['transporte']);
    $observaciones = trim($_POST['observaciones']);

    // Validaciones
    $errores = [];

    if (empty($fecha)) $errores[] = "La fecha es obligatoria.";
    if (empty($origen)) $errores[] = "El origen es obligatorio.";
    if (empty($tipo_materia)) $errores[] = "Debe seleccionar un tipo de materia.";
    if (empty($cantidad) || !is_numeric($cantidad) || $cantidad <= 0) $errores[] = "La cantidad debe ser un número positivo.";
    if (empty($estado)) $errores[] = "Debe seleccionar el estado.";

    if (!empty($errores)) {
        // Mostrar errores
        foreach ($errores as $error) {
            echo "<p style='color:red;'>$error</p>";
        }
    } else {
        // Preparar consulta segura
        $stmt = $conn->prepare("INSERT INTO recoleccion_residuos 
            (fecha, origen, tipo_materia, cantidad, estado, transporte, observaciones)
            VALUES (?, ?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("sssisss", $fecha, $origen, $tipo_materia, $cantidad, $estado, $transporte, $observaciones);

        if ($stmt->execute()) {
            echo "<p style='color:green;'>¡Recolección registrada correctamente!</p>";
        } else {
            echo "<p style='color:red;'>Error: " . $stmt->error . "</p>";
        }

        $stmt->close();
    }

    $conn->close();
} else {
    echo "<p style='color:red;'>Método no permitido</p>";
}
?>
