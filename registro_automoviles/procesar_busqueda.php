<?php
include 'includes/Database.php';
include 'includes/Automovil.php';

$database = new Database();
$db = $database->getConnection();

$automovil = new Automovil($db);

// Asignar la placa desde el formulario
$automovil->placa = $_POST['placa'];

// Llamar al método de búsqueda
$datosAutomovil = $automovil->buscar();

// Incluye el archivo de la vista con la variable $datosAutomovil
include 'buscar_registro.php';
?>
