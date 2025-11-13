<?php
/**
 * Script: crear_admin.php
 * Crea un usuario administrador del área "Sistemas" con permisos totales.
 */

$host = "127.0.0.1";
$user = "root";   // Cambia si tu servidor MySQL usa otro usuario
$pass = "";        // Contraseña de MySQL
$dbname = "comisaria"; // Asegúrate de que esta BD exista

// ----------------------------------------------------
// CONEXIÓN A BASE DE DATOS
// ----------------------------------------------------
$conn = new mysqli($host, $user, $pass, $dbname);
if ($conn->connect_error) {
    die("❌ Error de conexión: " . $conn->connect_error);
}
echo "✅ Conectado correctamente a la base de datos.<br>";

// ----------------------------------------------------
// 1️⃣ Crear el rol 'Administrador' si no existe
// ----------------------------------------------------
$sqlRol = "SELECT id FROM roles WHERE nombre = 'Administrador' LIMIT 1";
$resRol = $conn->query($sqlRol);

if ($resRol->num_rows > 0) {
    $idRol = $resRol->fetch_assoc()['id'];
} else {
    $conn->query("INSERT INTO roles (nombre, descripcion) VALUES ('Administrador', 'Acceso total al sistema')");
    $idRol = $conn->insert_id;
    echo "🆕 Rol 'Administrador' creado.<br>";
}

// ----------------------------------------------------
// 2️⃣ Crear el área 'Sistemas' si no existe
// ----------------------------------------------------
$sqlArea = "SELECT id FROM areas WHERE nombre = 'Sistemas' LIMIT 1";
$resArea = $conn->query($sqlArea);

if ($resArea->num_rows > 0) {
    $idArea = $resArea->fetch_assoc()['id'];
} else {
    $conn->query("INSERT INTO areas (nombre, descripcion) VALUES ('Sistemas', 'Departamento de Sistemas')");
    $idArea = $conn->insert_id;
    echo "🆕 Área 'Sistemas' creada.<br>";
}

// ----------------------------------------------------
// 3️⃣ Crear usuario administrador (si no existe)
// ----------------------------------------------------
$email = "admin@sistemas.com";
$nombre = "Administrador";
$apellidos = "Sistemas";
$passwordPlano = "admin123";
$password = password_hash($passwordPlano, PASSWORD_BCRYPT);

$sqlUser = "SELECT id FROM users WHERE email = '$email' LIMIT 1";
$resUser = $conn->query($sqlUser);

if ($resUser->num_rows === 0) {
    $stmt = $conn->prepare("INSERT INTO users (nombre, apellidos, email, password, id_rol, id_area) VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssii", $nombre, $apellidos, $email, $password, $idRol, $idArea);
    $stmt->execute();
    $idUser = $stmt->insert_id;
    echo "✅ Usuario administrador creado con ID: $idUser<br>";
} else {
    echo "ℹ️ El usuario administrador ya existe.<br>";
}

// ----------------------------------------------------
// 4️⃣ Crear permisos totales para el rol Administrador
// ----------------------------------------------------
$areas = $conn->query("SELECT id FROM areas");
while ($a = $areas->fetch_assoc()) {
    $idA = $a['id'];
    $sqlPerm = "SELECT id FROM permisos WHERE id_rol = $idRol AND id_area = $idA";
    $resPerm = $conn->query($sqlPerm);

    if ($resPerm->num_rows === 0) {
        $conn->query("INSERT INTO permisos (id_rol, id_area, puede_leer, puede_escribir, puede_editar, puede_eliminar)
                      VALUES ($idRol, $idA, 1, 1, 1, 1)");
        echo "🆕 Permisos totales agregados para área ID: $idA<br>";
    }
}

echo "<br>🎉 Usuario administrador del área 'Sistemas' configurado con todos los permisos.<br>";
echo "📧 Email: $email<br>";
echo "🔑 Contraseña: $passwordPlano<br>";

$conn->close();
?>
