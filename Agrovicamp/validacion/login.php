<?php
// Conexión a la base de datos
$servername = "localhost";  // normalmente localhost
$username = "root";   // tu usuario de MySQL
$password = ""; // tu contraseña de MySQL
$dbname = "agrovicamp";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $pass = $_POST['contraseña'];

    $stmt = $conn->prepare("SELECT id, contraseña FROM usuarios WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        $stmt->bind_result($id, $hashed_password);
        $stmt->fetch();

        if (password_verify($pass, $hashed_password)) {
            session_start();
            $_SESSION['user_id'] = $id;
            $_SESSION['user_email'] = $email;
            echo "¡Login exitoso!";
            exit();
        } else {
            echo "Contraseña incorrecta.";
        }
    } else {
        echo "El usuario no existe.";
    }

    $stmt->close();
}

$conn->close();
?>
