<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Busqueda de Registros</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .container {
            margin-top: 20px;
            padding: 20px;
            background-color: #f8f9fa;
            border-radius: 8px;
        }
        .header {
            background-color: #e0f7fa;
            padding: 15px;
            border-radius: 8px;
            text-align: center;
        }
        .footer {
            background-color: #000;
            color: #fff;
            padding: 10px;
            text-align: center;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
        .search-box {
            margin-bottom: 20px;
        }
        .search-input {
            width: calc(100% - 120px);
            display: inline-block;
            border-radius: 4px;
        }
        .search-button {
            border-radius: 4px;
        }
        .btn-container {
            display: flex;
            justify-content: center;
            margin-top: 10px;
        }
        .btn-container .btn {
            border-radius: 20px;
            margin: 0 10px;
            width: 150px;
        }
        .back-button {
            position: absolute;
            top: 10px;
            right: 20px;
            background-color: #333;
            color: #fff;
            border: none;
            border-radius: 20px;
            padding: 5px 10px;
        }
        .back-button:hover {
            background-color: #555;
        }
        .table-container {
            overflow-x: auto;
        }
        .table {
            border-radius: 8px;
        }
        .modal-content {
            border-radius: 8px;
        }
    </style>
</head>
<body>
    <button class="back-button" onclick="window.location.href='index.php'">Inicio</button>
    <div class="header">
        <h1>Bienvenido al Sistema de Gestión de Automóviles</h1>
    </div>

    <div class="container">
        <h2><strong><em>Buscar registro</em></strong></h2>
        <p><strong><em>Ingrese la placa del vehículo para ver su registro completo</em></strong></p>
        <form action="procesar_busqueda.php" method="post">
            <div class="search-box">
                <label for="placa" class="visually-hidden">Placa</label>
                <input type="text" id="placa" name="placa" class="search-input" placeholder="Ingrese la placa" required>
                <input type="submit" value="Buscar" class="btn btn-primary search-button">
            </div>
        </form>

        <div class="table-container">
            <?php if (isset($datosAutomovil) && $datosAutomovil): ?>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Placa</th>
                            <th>Marca</th>
                            <th>Modelo</th>
                            <th>Año</th>
                            <th>Color</th>
                            <th>Número de Motor</th>
                            <th>Número de Chasis</th>
                            <th>Tipo de Vehículo</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><?php echo htmlspecialchars($datosAutomovil['placa']); ?></td>
                            <td><?php echo htmlspecialchars($datosAutomovil['marca']); ?></td>
                            <td><?php echo htmlspecialchars($datosAutomovil['modelo']); ?></td>
                            <td><?php echo htmlspecialchars($datosAutomovil['anio']); ?></td>
                            <td><?php echo htmlspecialchars($datosAutomovil['color']); ?></td>
                            <td><?php echo htmlspecialchars($datosAutomovil['num_motor']); ?></td>
                            <td><?php echo htmlspecialchars($datosAutomovil['num_chasis']); ?></td>
                            <td><?php echo htmlspecialchars($datosAutomovil['tipo_vehiculo']); ?></td>
                        </tr>
                    </tbody>
                </table>
            <?php else: ?>
                <p>No se encontró el automóvil con la placa proporcionada.</p>
            <?php endif; ?>
        </div>

        <div class="btn-container">
            <button class="btn btn-success" onclick="location.href='actualizar_vehiculo.php'">Actualizar Vehículo</button>
            <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#confirmDeleteModal">Eliminar Vehículo</button>
        </div>
    </div>

    <div class="footer">
        <p>© 2024 Sistema de Gestión de Automóviles</p>
    </div>

    <!-- Modal de Confirmación para Eliminar -->
    <div class="modal fade" id="confirmDeleteModal" tabindex="-1" aria-labelledby="confirmDeleteModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="confirmDeleteModalLabel">Confirmar Eliminación</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    ¿Está seguro de que desea eliminar el vehículo con la placa <strong><em>XXX-123</em></strong>? Esta acción no se puede deshacer.
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                    <button type="button" class="btn btn-danger" onclick="confirmDelete()">Eliminar</button>
                </div>
            </div>
        </div>
    </div>

    <script>
        function confirmDelete() {
            // Aquí puedes agregar el código para eliminar el vehículo, por ejemplo mediante una llamada AJAX
            alert("El vehículo ha sido eliminado correctamente.");
        }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
