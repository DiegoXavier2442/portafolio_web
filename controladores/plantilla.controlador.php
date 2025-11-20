<?php

class ControladorPlantilla {

    public function ctrTraerPlantilla() {
        
        $mensajeFormulario = null;
        
        // Procesar el formulario
        if(isset($_POST["nombre_completo"])) {
            $formulario = new ControladorFormularios();
            $mensajeFormulario = $formulario->ctrRegistroContacto();
        }
        
        include "vistas/plantilla.php";
    }
}

?>
