<?php
// Capa de abstracción entre el controlador central y el modelo.
// Requiere importar el modelo para establecer conexión con sus funciones:
require_once("modelo.php");

/**
 * Muestra la lista de artículos en la vista de Catálogo.
 *
 * @return void Esta función no retorna ningún valor.
 */
function mostrarArticulos() {
    $articulos = listarArticulos();
    require "vistaCatalogo.php"; 
}
/**
 * Muestra los detalles de un artículo en la vista Detalles.
 *
 * @param int $id identificador de el artículo a detallar.
 *
 * @return void Esta función no retorna ningún valor.
 */
function detallarArticulos($id) { 
    $articulo = detalleArticulos($id);
    require "vistaDetalles.php";
}
/**
 * Procesa los datos del formulario que se obtienen en la vista Sugerencias .
 *
 * @return void Esta función no retorna ningún valor.
 */
function procesarFormulario() {
    if (isset($_POST["nombre"]) && ($_POST["comentario"])){
        $nombre = $_POST["nombre"];
        $comentario = $_POST["comentario"];
    } 
    $formulario = array(
  // Patrón: ('label', 'type', 'name', 'value')
        array('Nombre: ', 'text', 'nombre', ''),
        array('Comentario: ', 'txtarea', 'comentario', ''),
        array('', 'submit', 'comentar', 'Comentar')
        );
    require "vistaSugerencias.php"; 
}
/**
 * Procesa los datos del formulario que se obtienen en la vista del Registro.
 *
 * @return void Esta función no retorna ningún valor.
 */ 
function procesarRegistro() {
    if (isset($_POST["nombre"]) && ($_POST["email"])){
        $nombre = $_POST["nombre"];
        $email = $_POST["email"];
        $telefono = $_POST["telefono"];
    } 
    $formulario = array(
        array('Nombre: ', 'text', 'nombre', ''),
        array('E-mail: ', 'email', 'email', ''),
        array('Teléfono: ', 'tel', 'telefono', ''),
        array('', 'submit', 'login', 'Registro'),
        );
    require "vistaRegistro.php"; 
} 
?>