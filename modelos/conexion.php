<?php 
class Conexion {
    static public function conectar() {
        try {
            $link = new PDO(
                "mysql:host=localhost;dbname=portafolio_web",  
                "root",
               "",
                array(
                    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                    PDO::ATTR_EMULATE_PREPARES => false,
                    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
                )
            );
            return $link;
        } catch(PDOException $e) {
            error_log("Error de conexión: " . $e->getMessage());
            die("Error al conectar con la base de datos: " . $e->getMessage());
        }
    }
}
?>



