

<?php startblock("contenido") ?>
    <h3 id="sugest">Registro 💀 Login</h3>
    <?php
        echo '<form action="/T5DWES/index.php/registro" method="POST">';
            foreach ($formulario as $campo):
                echo $campo[0].'<input type="'.$campo[1].'",
                    name="'.$campo[2].'", value="'.$campo[3].'">';
                echo '<br>';
            endforeach;
        echo '</form>';
        ?>
        <div id="coment">
            <?php if (isset($nombre) && $email) { ?>
            <h3>Usuario registrado</h3>
                <p><?php echo "<b>Nombre: </b><span>&nbsp;</span>" . $nombre ?></p>
                <p><?php echo "<b>E-mail: </b><span>&nbsp;</span>" . $email ?></p>
                <p><?php echo "<b>Telefono: </b><span>&nbsp;</span>" . $telefono ?></p>
            <?php } ?>
        <div>
<?php endblock() ?>