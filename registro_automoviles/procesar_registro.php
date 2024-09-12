<?php
// Incluir archivos de conexión y clase Automovil
include 'includes/Database.php';
include 'includes/Automovil.php';

// Crear una instancia de la clase Database y obtener la conexión
$database = new Database();
$db = $database->getConnection();

// Verificar si la conexión fue exitosa
if ($db) {
    // Crear una instancia de la clase Automovil
    $automovil = new Automovil($db);

    // Obtener los datos del formulario
    $automovil->placa = $_POST['placa'];
    $automovil->marca = $_POST['marca'];
    $automovil->modelo = $_POST['modelo'];
    $automovil->anio = $_POST['anio'];
    $automovil->color = $_POST['color'];
    $automovil->num_motor = $_POST['num_motor'];
    $automovil->num_chasis = $_POST['num_chasis'];
    $automovil->tipo_vehiculo = $_POST['tipo_vehiculo'];

    // Registrar el automóvil
    if ($automovil->registrar()) {
        echo "<script>
                alert('Registro realizado exitosamente.');
                setTimeout(function(){ window.location.href = 'registrar_automovil.php'; }, 5000);
              </script>";
    } else {
        echo "Error al registrar el automóvil.";
    }
} else {
    echo "Error de conexión con la base de datos.";
}
?>
