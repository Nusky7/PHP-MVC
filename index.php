<?php
/**
 * Controlador frontal para la aplicación.
 *
 * Este archivo maneja las solicitudes HTTP y llama a las funciones de el controlador
 * correspondientes según la URI solicitada.
 *
 * @author AlbaTB_6542X
 */
// Constante que indica que se está utilizando el controlador.
const CON_CONTROLADOR = true;

// Se requiere incluir el archivo que contiene las funciones de el controlador
require_once("controladores.php");

// Se obtiene la URI de la solicitud.
$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

// Se verifica la URI y se ejecuta la función correspondiente de el controlador.
if ($uri == '/T5DWES/index.php') {
    mostrarArticulos();
}
else if ($uri == '/T5DWES/index.php/detalles' && isset($_GET["id"])) {  
    detallarArticulos($_GET["id"]);
}
else if ($uri == '/T5DWES/index.php/sugerencias'){
    procesarFormulario();
} 
else if ($uri == '/T5DWES/index.php/registro'){
    procesarRegistro();
}
else {
    // Se muestra un mensaje de error si la URI no coincide con ninguna ruta esperada.
    header("Error 404 - Not Found");
    echo "<h3>Error 404 - Not Found</h3>";
    //echo "URI: $uri"; // indicar la uri correcta si experimentar errores de rutas.
}
?>