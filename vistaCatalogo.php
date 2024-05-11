
<?php startblock("contenido") ?>
    <h3> Catálogo </h3>
    <ul>
        <?php foreach($articulos as $articulo) { ?>
        <li><a href="index.php/detalles?id=<?= $articulo['id'] ?>">
        <?= $articulo['titulo'] ?></a></li>
        <?php } ?>
    </ul>
<?php endblock() ?>

