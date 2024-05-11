<!-- Requiere la libreria de PHP Template Inheritance-->
<?php require_once("ti.php"); ?>

<!-- Plantilla para las Vistas -->
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <title>Jackson Guitars</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;}
        h2 {text-align: center;
            color: red}
        h3 {
            border:3px solid #000;
            border-radius: 10px;
            width: 32%;
            margin-left: 32%;
            margin-top: 2%;
            background-color: #3c3d35;
            color: #fff;
            text-align: center;
            padding: 0.5%;
            font-size: 25px;
            font-family: monospace;
        }
        header {
            position: relative;
            width: 100%;
            font-family: monospace;  
            font-size: 20px;
            background-color: #3c3d35;
            box-shadow: 2px 0 5px rgba(0, 0, 0, 0.7);
            color: #fff;
            padding: 5px;
            text-align: center;
            z-index: 2000;}
        img{
            padding-top: 4%;
            margin-left: 30%;
            transform: rotate(-23deg);}
        #tit{font-size: 22px; text-decoration: underline;}
        li {
            display:flex;
            margin-left: 41%;
            padding-bottom: 2%;}
        li a {
            color: #3c3d35;
            text-decoration: none;
            font-size: 18px;}
        li a:focus{
            color: #666;}
        p, span{
            display:flex;
            justify-content:center;}
        #coment{
            color: #fff; 
            background: #3c3d35;
            border:3px solid #000;
            border-radius: 10px;
            width:40%;
            margin-left: 30%;
            justify-content:center;}
        input{border-radius: 7px;
             margin: 0.1%;}
        nav {
            display: flex;
            width: 99%;
            background-color: #000;
            padding: 10px;
            box-shadow: 2px 0 5px rgba(0, 0, 0, 0.7);}
        nav a {
            padding: 8px 16px;
            text-decoration: none;
            font-family: monospace;
            font-size: 18px;
            color: #fff;}
        nav a:hover {
            background-color: #3c3d35;
            border-radius: 10px;}
        footer {
            background-color: #111;
            color: #fff;
            text-align: center;
            padding: 10px;
            position: fixed;
            bottom: 0;
            width: 99%;
            z-index: 999;}
        form{
            text-align: right;
            margin-right: 45%;
            padding: 2% 0 2% 0;}
    </style> 
</head>
<body>
    <header>
        <h1> Jackson Guitar Masters 🎸</h1>
    </header>
    <nav>
        <a href="/T5DWES/index.php">Inicio</a>
        <a href="/T5DWES/index.php"> Catálogo</a>
        <a href="/T5DWES/index.php/registro"> Registro</a>
        <a href="/T5DWES/index.php/sugerencias"> Contacto</a>
    </nav>
        <section>
            <?php startblock("contenido") ?> <?php endblock() ?>
        </section>

    <footer>
        <?php startblock("footer") ?>
           Alba Tolosa Bonora // 29216542-X &copy 
        <?php endblock() ?>
    </footer>
</body>
</html>
    
    