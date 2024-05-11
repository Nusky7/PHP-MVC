
<?php startblock("contenido") ?>
    <h3 id="sugest">Sugerencias 💀 Comentarios</h3>
    <?php
        echo '<form action="/T5DWES/index.php/sugerencias" method="POST">';
            foreach ($formulario as $campo):
                echo $campo[0].'<input type="'.$campo[1].'",
                    name="'.$campo[2].'", value="'.$campo[3].'">';
                echo '<br>';
            endforeach;
        echo '</form>';
        ?>
        <div id="coment">
            <?php if (isset($nombre) && $comentario) { ?>
                <p><?php echo "<b>Nombre: </b><span>&nbsp;</span>" . $nombre ?></p>
                <p><?php echo "<b>Comentarios: </b> "?></p>
                <p><?=  $comentario ?></p>
            <?php } ?>
        <div>
<?php endblock() ?>