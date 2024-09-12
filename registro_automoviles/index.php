<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Gestión de Automóviles</title>
    <link rel="stylesheet" href="style.css"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }
        header {
            background-color: #00cfff;
            padding: 20px;
            text-align: center;
        }
        h1 {
            color: white;
        }
        .main-content {
            flex: 1;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }
        .main-content a {
            display: inline-block;
            margin: 10px;
            padding: 15px 30px;
            background-color: #007bff;
            color: white;
            border-radius: 20px;
            text-align: center;
            text-decoration: none;
            font-size: 18px;
        }
        .main-content a:hover {
            background-color: #0056b3;
        }
        footer {
            background-color: black;
            color: white;
            text-align: center;
            padding: 10px 0;
            font-size: 14px;
            position: relative;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>
<body>

    <header>
        <h1>Bienvenido al Sistema de Gestión de Automóviles</h1>
    </header>

    <div class="main-content">
        <a href="registrar_automovil.php">Registrar un nuevo automóvil</a>
        <a href="buscar_registro.php">Buscar un automóvil</a>
    </div>

    <footer>
        <p>&copy; 2024 - Sistema de Gestión de Automóviles. Todos los derechos reservados.</p>
        <p>Alejandro Carrasco / 8-1002-696 / Grupo #8</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
