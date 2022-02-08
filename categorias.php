<?php
/*comprueba que el usuario haya abierto sesión o redirige */
require 'sesiones.php';
require_once 'bd.php';
comprobar_sesion();
?>
<!DOCTYPE html>
<html>
    <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="/src/components/header.js" type="text/javascript" defer></script>
    <script src="/src/components/footer.js" type="text/javascript" defer></script>
        <meta charset="UTF-8">

        <title>Lista de categorias</title>


    
    </head>
    <body>

    <header-component></header-component>
        <?php require 'cabecera.php';?>
        <h1>Lista de categorias</h1>
        <!-- Lista de vinculos con la forma productos.php?categoria=1 -->
        <?php
        $categorias = cargar_categorias();
        if ($categorias === FALSE) {
            echo "<p class='error'>Eror al conectar con la base de datos</p>";
        }else{
            echo "<ul>"; //abir la lista
            foreach($categorias as $cat){
                // $cat ['nombre'] $cat['codCat']
                $url = "productos.php?categoria=".$cat['codCat'];
                echo "<li><a href='$url'>".$cat ['nombre']."</a></li>";
            }
            echo "</ul>";
        }
        ?>
        
    </body>
</html>

