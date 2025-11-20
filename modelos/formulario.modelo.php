<?php

require_once "conexion.php";

class ModeloFormularios {
    
    // Método para registrar el contacto con token
    static public function mdlRegistroContacto($tabla, $datos) {
        
        try {
            $stmt = Conexion::conectar()->prepare("INSERT INTO $tabla (token, nombre_completo, email, asunto, descripcion, fecha_envio) 
                                                    VALUES (:token, :nombre_completo, :email, :asunto, :descripcion, NOW())");
            
            $stmt->bindParam(":token", $datos["token"], PDO::PARAM_STR);
            $stmt->bindParam(":nombre_completo", $datos["nombre_completo"], PDO::PARAM_STR);
            $stmt->bindParam(":email", $datos["email"], PDO::PARAM_STR);
            $stmt->bindParam(":asunto", $datos["asunto"], PDO::PARAM_STR);
            $stmt->bindParam(":descripcion", $datos["descripcion"], PDO::PARAM_STR);
            
            if($stmt->execute()) {
                return "ok";
            } else {
                return "error";
            }
            
        } catch(PDOException $e) {
            error_log("Error en registro de contacto: " . $e->getMessage());
            return "error";
        }
        
        $stmt = null;
    }
    
    // Verificar spam por email y token
    static public function mdlVerificarSpam($tabla, $email) {
        
        try {
            $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla 
                                                    WHERE email = :email 
                                                    AND fecha_envio >= DATE_SUB(NOW(), INTERVAL 5 MINUTE)");
            
            $stmt->bindParam(":email", $email, PDO::PARAM_STR);
            $stmt->execute();
            
            return $stmt->fetch(PDO::FETCH_ASSOC);
            
        } catch(PDOException $e) {
            error_log("Error al verificar spam: " . $e->getMessage());
            return false;
        }
        
        $stmt = null;
    }
}

?>
