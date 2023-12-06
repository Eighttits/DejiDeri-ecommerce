<?php

class productoModel {
    private $conn;

    public function __construct($conn) {
        $this->conn = $conn;
        if ($this->conn) {
            echo "Conexión establecida correctamente";
        } else {
            echo "Error al establecer la conexión";
        }
    }

    public function obtenerProductos(){
        $SqlConsulta = "SELECT p.*,c.nombre AS 'categoria'
                        FROM producto p 
                        INNER JOIN categoria c ON p.id_categoria = c.id
                        ORDER BY p.id ASC;";
        $result = mysqli_query($this->conn, $SqlConsulta);
        if($result){
            return $result;
        }
    }

}


?>
