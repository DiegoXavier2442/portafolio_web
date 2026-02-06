# Portafolio Web - Contacto (MVC PHP)

# Descripción 
Proyecto de portafolio web con formulario de contacto. Implementa MVC sencillo (controladores, modelos, vistas) y medidas básicas de seguridad para el envío de mensajes.

# Demo 
https://diego-xavier.infinityfree.me/index.php



## Tecnologías
- PHP (PDO)
- MySQL
- HTML5
- Tailwind / Bootstrap (según vista)
- Hosting: InfinityFree (opcional)



## Estructura de archivos (resumen)
/portafolioweb

/assets
 /cv
 /img

/controladores
 formulario.controlador.php
 plantilla.controlador.php

/db
 contactos.sqñ

/modelos
 conexion.php
 formulario.modelo.php

/vistas
 plantilla.php

index.php
README.md

## Conexión a la base de datos
Archivo: `modelos/conexion.php`
## Cambiar por los datos lo host al momento de subirlo a un hosting 
"mysql:host=localhost;dbname=portafolio_web",
      "root",
      "",


## Validaciones y seguridad implementadas

CSRF token: generado con bin2hex(random_bytes(32)), validado con hash_equals.

Sanitización (XSS): htmlspecialchars antes de guardar o mostrar.

Validaciones de entrada: nombres (solo letras y espacios), email (filter_var), límites de longitud para asunto/descripcion.

Prepared statements (PDO): prepare() + bindParam() para evitar SQL injection.

Prevención de spam: bloqueo por email si ya envió en los últimos 5 minutos (consulta fecha_envio >= DATE_SUB(NOW(), INTERVAL 5 MINUTE)).

Configuración PDO: ERRMODE_EXCEPTION, EMULATE_PREPARES=false

## Como funciona  

index.php carga controladores y entrega la plantilla.

plantilla.controlador.php detecta POST del formulario y llama a ControladorFormularios::ctrRegistroContacto().

ControladorFormularios valida y sanitiza datos, valida token CSRF y el check anti-spam.

ModeloFormularios ejecuta la inserción con consultas preparadas (PDO).

## Creación del dominio o subdominio

Ingresar al panel de InfinityFree.

Crear un subdominio o dominio gratuito desde Subdomains o Addon Domains.

InfinityFree asigna automáticamente una carpeta /htdocs donde se alojarán los archivos del proyecto.


## Creación de la base de datos

En el panel, abrir MySQL Databases.

Crear una nueva base de datos (InfinityFree agregará un prefijo obligatorio al nombre).

Guardar los datos generados


## Importación de la base de datos

Abrir phpMyAdmin desde el mismo panel.

Seleccionar la base de datos creada.

Importar el archivo .sql correspondiente a la tabla contactos

## Subida de archivos del proyecto

Abrir File Manager o usar un cliente FTP.

Ingresar a la carpeta /htdocs.

Eliminar archivos predeterminados creados por InfinityFree (por ejemplo index2.html).

Subir todos los archivos del proyecto

## Prueba del sitio en línea

Acceder al proyecto mediante el dominio creado

https://diego-xavier.infinityfree.me/index.php

# ADICIONAL

El archivo tailwind.config.js es para que funciona la extencion Tailwind CSS IntelliSense es una extencion de autocompletado.

En la carpeta assets intente implementar un sprite.svg para guardar los iconos, sin envargo no puede implementar por que me presentavan fallas en

navegadres como Firefox.
