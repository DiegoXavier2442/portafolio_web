<?php

class ControladorFormularios {
    
    static public function ctrGenerarTokenCSRF() {
        if(empty($_SESSION['csrf_token'])) {
            $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
        }
        return $_SESSION['csrf_token'];
    }
    
    static private function ctrValidarTokenCSRF($token) {
        if(isset($_SESSION['csrf_token']) && hash_equals($_SESSION['csrf_token'], $token)) {
            return true;
        }
        return false;
    }
    
    public function ctrRegistroContacto() {
        
        if(isset($_POST["nombre_completo"])) {
            
            // VALIDAR TOKEN CSRF
            if(!isset($_POST["csrf_token"]) || !self::ctrValidarTokenCSRF($_POST["csrf_token"])) {
                return "csrf_error";
            }
            
            // VALIDACIONES
            if(preg_match('/^[a-zA-ZáéíóúÁÉÍÓÚñÑ ]+$/', $_POST["nombre_completo"]) &&
               strlen($_POST["nombre_completo"]) >= 3 &&
               strlen($_POST["nombre_completo"]) <= 100) {
                $nombreValido = true;
            } else {
                $nombreValido = false;
            }
            
            $emailValido = filter_var($_POST["email"], FILTER_VALIDATE_EMAIL);
            
            if(strlen(trim($_POST["asunto"])) >= 5 &&
               strlen(trim($_POST["asunto"])) <= 150) {
                $asuntoValido = true;
            } else {
                $asuntoValido = false;
            }
            
            if(strlen(trim($_POST["descripcion"])) >= 10 &&
               strlen(trim($_POST["descripcion"])) <= 1000) {
                $descripcionValida = true;
            } else {
                $descripcionValida = false;
            }
            
            // Si pasan las validaciones
            if($nombreValido && $emailValido && $asuntoValido && $descripcionValida) {
                
                // Verificar spam
                $verificarSpam = ModeloFormularios::mdlVerificarSpam("contactos", $_POST["email"]);
                
                if($verificarSpam) {
                    return "spam";
                }
                
                // Generar token único
                $tokenMensaje = hash('sha256', $_POST["nombre_completo"] . $_POST["email"] . time() . random_bytes(16));
                
                // Sanitizar datos
                $datos = array(
                    "token" => $tokenMensaje,
                    "nombre_completo" => htmlspecialchars(trim($_POST["nombre_completo"]), ENT_QUOTES, 'UTF-8'),
                    "email" => htmlspecialchars(trim($_POST["email"]), ENT_QUOTES, 'UTF-8'),
                    "asunto" => htmlspecialchars(trim($_POST["asunto"]), ENT_QUOTES, 'UTF-8'),
                    "descripcion" => htmlspecialchars(trim($_POST["descripcion"]), ENT_QUOTES, 'UTF-8')
                );
                
                // Registrar en BD
                $respuesta = ModeloFormularios::mdlRegistroContacto("contactos", $datos);
                
                if($respuesta == "ok") {
                    // Regenerar token CSRF
                    $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
                    return "exito";
                } else {
                    return "error";
                }
                
            } else {
                return "validacion_error";
            }
        }
    }
}

?>
