<?php
require_once 'includes/database.php';

$database = new Database();
$db = $database->getConnection();

if ($db) {
    echo "Conexión exitosa!";
} else {
    echo "No se pudo conectar a la base de datos.";
}
?>
