<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Automóviles</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .header {
            background-color: #e0f7fa;
            padding: 15px;
            text-align: center;
        }
        .footer {
            background-color: black;
            color: white;
            text-align: center;
            padding: 10px 0;
            font-size: 14px;
            position: relative;
            bottom: 0;
            width: 100%;
        }
        .container {
            display: flex;
            justify-content: space-between;
            padding: 20px;
            margin-top: 20px;
        }
        .form-container {
            width: 50%;
        }
        .form-box {
            padding: 20px;
            background-color: #f8f9fa;
            border-radius: 8px;
        }
        .form-box input, .form-box select {
            width: 100%;
            margin-bottom: 15px;
            padding: 8px;
            border-radius: 4px;
            border: 1px solid #ced4da;
        }
        .form-box input[type="submit"] {
            background-color: #333;
            color: #fff;
            border: none;
            border-radius: 20px;
            padding: 10px;
            cursor: pointer;
        }
        .form-box input[type="submit"]:hover {
            background-color: #555;
        }
        .image-container {
            width: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .image-container img {
            max-width: 100%;
            height: auto;
            border-radius: 15px; /* Redondear los bordes de la imagen */
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
    </style>
</head>
<body>
    <button class="back-button" onclick="window.location.href='index.php'">Inicio</button>
    <div class="header">
        <h1>Bienvenido al Sistema de Gestión de Automóviles</h1>
    </div>

    <div class="container">
        <div class="form-container">
            <div class="form-box">
                <h2><strong><em>Registrar Automóvil</em></strong></h2>
                <form action="procesar_registro.php" method="post">
                    <label for="marca">Marca:</label>
                    <input type="text" id="marca" name="marca" required>

                    <label for="modelo">Modelo:</label>
                    <input type="text" id="modelo" name="modelo" required>

                    <label for="anio">Año:</label>
                    <input type="number" id="anio" name="anio" required>

                    <label for="color">Color:</label>
                    <input type="text" id="color" name="color" required>

                    <label for="placa">Placa:</label>
                    <input type="text" id="placa" name="placa" required>

                    <label for="num_motor">Número de Motor:</label>
                    <input type="text" id="num_motor" name="num_motor" required>

                    <label for="num_chasis">Número de Chasis:</label>
                    <input type="text" id="num_chasis" name="num_chasis" required>

                    <label for="tipo_vehiculo">Tipo de Vehículo:</label>
                    <select id="tipo_vehiculo" name="tipo_vehiculo" required>
                        <option value="Motocicleta">Motocicleta</option>
                        <option value="Hatchback">Hatchback</option>
                        <option value="Sedan">Sedán</option>
                        <option value="Camioneta">Camioneta</option>
                        <option value="Microbus">Microbús</option>
                    </select>

                    <input type="submit" value="Registrar">
                </form>
            </div>
        </div>
        <div class="image-container">
            <img src="assets/plate.jpg" alt="Imagen de Registro">
        </div>
    </div>
    <br>
    <br>
    <br>
    <div class="footer">
        <p>© 2024 Sistema de Gestión de Automóviles</p>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
