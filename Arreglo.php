<center>
   <!DOCTYPE html>
    <center><body background="https://www.xtrafondos.com/wallpapers/resoluciones/20/no-man-s-sky-origins_1920x1080_6496.jpg"></CENTER>
<?php
 echo '<H1>CONTENIDO DE LA TABLA</H1>';
        $juegos = array(
            
            "Accion" => array (" GTA 5 ", " COD  ", " PUGB "),
            "Aventura" => array ("ASSASINS  ", " CRASH BANDICOOT ", " PRINCE OF PERSIA "),
            "Deportes" => array (" FIFA 19 ", " PES 19 ", " MOTO GP 19 ")
        );
        
        $categorias = array_keys($juegos);
        ?>
    
<table border="2">
            
            <?php require_once 'encabezado.php';?>
            <?php require_once 'fila1.php';?>
            <?php require_once 'fila2.php';?>
            <?php require_once 'fila3.php';?>
            
        </table>

</center> 