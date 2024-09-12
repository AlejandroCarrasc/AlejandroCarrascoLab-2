<?php
class Automovil {
    private $conn; // Conexión a la base de datos
    private $table_name = "automoviles"; // Nombre de la tabla

    // Propiedades de la clase
    public $placa;
    public $marca;
    public $modelo;
    public $anio;
    public $color;
    public $num_motor;
    public $num_chasis;
    public $tipo_vehiculo;

    // Constructor que recibe la conexión a la base de datos
    public function __construct($db) {
        $this->conn = $db;
    }

    // Método para registrar un nuevo automóvil
    public function registrar() {
        $query = "INSERT INTO " . $this->table_name . " (placa, marca, modelo, anio, color, num_motor, num_chasis, tipo_vehiculo)
                  VALUES (:placa, :marca, :modelo, :anio, :color, :num_motor, :num_chasis, :tipo_vehiculo)";

        $stmt = $this->conn->prepare($query);

        // Limpiar los datos para evitar inyección SQL
        $this->placa = htmlspecialchars(strip_tags($this->placa));
        $this->marca = htmlspecialchars(strip_tags($this->marca));
        $this->modelo = htmlspecialchars(strip_tags($this->modelo));
        $this->anio = htmlspecialchars(strip_tags($this->anio));
        $this->color = htmlspecialchars(strip_tags($this->color));
        $this->num_motor = htmlspecialchars(strip_tags($this->num_motor));
        $this->num_chasis = htmlspecialchars(strip_tags($this->num_chasis));
        $this->tipo_vehiculo = htmlspecialchars(strip_tags($this->tipo_vehiculo));

        // Enlazar los parámetros
        $stmt->bindParam(":placa", $this->placa);
        $stmt->bindParam(":marca", $this->marca);
        $stmt->bindParam(":modelo", $this->modelo);
        $stmt->bindParam(":anio", $this->anio);
        $stmt->bindParam(":color", $this->color);
        $stmt->bindParam(":num_motor", $this->num_motor);
        $stmt->bindParam(":num_chasis", $this->num_chasis);
        $stmt->bindParam(":tipo_vehiculo", $this->tipo_vehiculo);

        // Ejecutar la declaración
        return $stmt->execute();
    }

    // Método para buscar un automóvil por placa
    public function buscar() {
        $query = "SELECT * FROM " . $this->table_name . " WHERE placa = :placa";
        $stmt = $this->conn->prepare($query);

        $this->placa = htmlspecialchars(strip_tags($this->placa));
        $stmt->bindParam(":placa", $this->placa);

        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    // Método para eliminar un automóvil
    public function eliminar() {
        $query = "DELETE FROM " . $this->table_name . " WHERE placa = :placa";
        $stmt = $this->conn->prepare($query);

        $this->placa = htmlspecialchars(strip_tags($this->placa));
        $stmt->bindParam(":placa", $this->placa);

        return $stmt->execute();
    }

    // Método para actualizar los datos de un automóvil
    public function actualizar() {
        $query = "UPDATE " . $this->table_name . "
                  SET marca = :marca, modelo = :modelo, anio = :anio, color = :color, num_motor = :num_motor, num_chasis = :num_chasis, tipo_vehiculo = :tipo_vehiculo
                  WHERE placa = :placa";

        $stmt = $this->conn->prepare($query);

        // Limpiar los datos para evitar inyección SQL
        $this->placa = htmlspecialchars(strip_tags($this->placa));
        $this->marca = htmlspecialchars(strip_tags($this->marca));
        $this->modelo = htmlspecialchars(strip_tags($this->modelo));
        $this->anio = htmlspecialchars(strip_tags($this->anio));
        $this->color = htmlspecialchars(strip_tags($this->color));
        $this->num_motor = htmlspecialchars(strip_tags($this->num_motor));
        $this->num_chasis = htmlspecialchars(strip_tags($this->num_chasis));
        $this->tipo_vehiculo = htmlspecialchars(strip_tags($this->tipo_vehiculo));

        // Enlazar los parámetros
        $stmt->bindParam(":placa", $this->placa);
        $stmt->bindParam(":marca", $this->marca);
        $stmt->bindParam(":modelo", $this->modelo);
        $stmt->bindParam(":anio", $this->anio);
        $stmt->bindParam(":color", $this->color);
        $stmt->bindParam(":num_motor", $this->num_motor);
        $stmt->bindParam(":num_chasis", $this->num_chasis);
        $stmt->bindParam(":tipo_vehiculo", $this->tipo_vehiculo);

        // Ejecutar la declaración
        return $stmt->execute();
    }
}
?>