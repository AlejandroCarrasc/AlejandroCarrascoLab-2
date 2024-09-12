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

if ($datosAutomovil) {
    // Mostrar los datos del automóvil encontrado
    echo "Automóvil encontrado exitosamente.<br>";
    echo "Placa: " . $datosAutomovil['placa'] . "<br>";
    echo "Marca: " . $datosAutomovil['marca'] . "<br>";
    echo "Modelo: " . $datosAutomovil['modelo'] . "<br>";
    echo "Año: " . $datosAutomovil['anio'] . "<br>";
    echo "Color: " . $datosAutomovil['color'] . "<br>";
    echo "Número de motor: " . $datosAutomovil['num_motor'] . "<br>";
    echo "Número de chasis: " . $datosAutomovil['num_chasis'] . "<br>";
    echo "Tipo de vehículo: " . $datosAutomovil['tipo_vehiculo'] . "<br>";
} else {
    echo "No se encontró el automóvil con la placa proporcionada.";
}
?>
