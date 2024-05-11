<?php
// Modelo para la lógica interna.
//Incluye en el modelo la estructura HTML y los estilos de base.php:
include("base.php");

if (!defined('CON_CONTROLADOR')) {
        echo "Acceso restringido. No se puede llamar a este archivo directamente.";
        die();
    }
/**
 * Crea un array articulos con los detalles de varios artículos.
 *
 * @return devuelve el array conteniendo los detalles de los artículos.
 */
function mostrarArticulo() {
    $articulos = array(
        0 => array(
            "id" => 0,
            "titulo" => "Jackson 🎶 Kelly Snow White",
            "imagen" => "/T5DWES/img/kellySW.jpg",
            "descripcion" => "🎸 Cuerpo de álamo <br>
                 🎸 Mástil de 1 pieza de arce<br>🎸 Diapasón de amaranto<br>🎸 2 pastillas Humbucker Jackson de alto nivel de salida.
                 <br>🎸 Radio compuesto de 304,8 - 406,4 mm"),
        1 => array(
            "id" => 1,
            "titulo" => "Jackson 🎶 King V AH Gloss Black",
            "imagen" => "/T5DWES/img/kingV.jpg",
            "descripcion" => "🎸 Cuerpo de álamo.<br>🎸 Ancho de la cejilla: 42,8 mm.<br>
            🎸 Diapasón de amarant.<br>🎸 2 pastillas Jackson humbucker con alto nivel de salida.<br>🎸 Acabado: Negro brillante."),
        2 => array(
            "id" => 2,
            "titulo" => "Jackson 🎶 Rhoads AH SBK",
            "imagen" => "/T5DWES/img/rohadsAH.jpg",
            "descripcion" => "🎸 Modelo Randy Rhoads<br>🎸 Mástil de arce<br>🎸 Radio del diapasón (compuesto): 305 mm 12'' - 406 mm 16p''<br>
            🎸 Clavijas de afinación selladas fundidas a presión<br>🎸 Interruptor de palanca de 3 posiciones"),
        3 => array(
            "id" => 3,
            "titulo" => "Jackson 🎶 Dinky AH BLK",
            "imagen" => "/T5DWES/img/dinkyAH.jpg",
            "descripcion" => "🎸 Diapasón de amaranto<br>🎸 Montaje del mástil: Atornillado (bolt-on)<br>
            🎸 Interruptor de palanca de 3 posiciones<br>🎸 Trémolo Fulcrum de 2 puntos<br>🎸 Color: Negro brillante<br>"),
        4 => array(
            "id" => 4,
            "titulo" => "Jackson 🎶 JS32 Rhoads AH Ivory",
            "imagen" => "/T5DWES/img/rhoadsIvory.jpg",
            "descripcion" => "🎸 Cuerpo de álamo.<br>🎸 Anchura de la cejilla: 42,8 mm.<br>
             🎸 Trémolo Jackson con licencia Floyd Rose, con doble bloqueo.<br>🎸 Escala de 648 mm.<br>
             🎸 Acabado: Marfil (Ivory)"),
        5 => array(
            "id" => 5,
            "titulo" => "Jackson 🎶 Dinky MR AH",
            "imagen" => "/T5DWES/img/dinkyMR.jpg",
            "descripcion" => "🎸 Mástil de arce atornillado (bolt-on)<br>🎸 22 trastes Jumbo<br>
            🎸 Interruptor de palanca de 3 posiciones<br>🎸 Trémolo Fulcrum de 2 puntos<br>
            🎸 Acabado: Rojo metalizado"),
        6 => array(
            "id" => 6,
            "titulo" => "Jackson 🎶 Kelly AH SBK",
            "imagen" => "/T5DWES/img/kellyAH.jpg",
            "descripcion" => "🎸 Cuerpo de álamo<br>🎸 Mástil 'speed' de 1 pieza de arce atornillado (bolt-on), con refuerzo de grafito y unión en bisel
            <br>🎸 Puente Jackson compensado y ajustable con cuerdas a través del cuerpo<br>🎸 Clavijas Jackson selladas fundidas a presión
            <br>🎸 Acabado: Negro satinado"),
    );
    return $articulos;
};
/**
 * Obtiene la lista de todos los artículos.
 *
 * @return array Retorna el array con la lista de artículos.
 */
function listarArticulos() {
    $articulos = mostrarArticulo();
    return $articulos;
}
/**
 * Obtiene los detalles de un artículo específico.
 *
 * @param int $id es el identificador de los artículos.
 * @return devuelve los detalles de un artículo si se encuentra, muestra un mensaje de error HTML si el ID no existe.
 */
function detalleArticulos($id) {
    $articulos = mostrarArticulo();
    if (isset($articulos[$id])) {
        return $articulos[$id];
    } else {
        echo "<h2><br>Error 404 - No se encuentra la página<br><br>Este artículo no existe.</h2>";}
}

?>