
<?php startblock("contenido") ?>
    <h3>Detalles de la Guitarra</h3>
        <p id="tit"><?php echo $articulo['titulo'] ?></p>
        <p><?php echo $articulo['descripcion'] ?></p>
        <img src="<?= $articulo['imagen'] ?>">
  
<?php endblock() ?>


