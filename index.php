<?php
session_start();
// Activar errores para debugging
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Requerir todos los archivos necesarios
require_once "controladores/plantilla.controlador.php";
require_once "controladores/formulario.controlador.php";
require_once "modelos/formulario.modelo.php";
require_once "modelos/conexion.php";

// Instanciar el controlador de plantilla
$plantilla = new ControladorPlantilla();
$plantilla->ctrTraerPlantilla();

?>
