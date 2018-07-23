<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $tabla = $_GET['tabla'];
        $elementos = $_GET['elementos'];
        echo "<table border='1'>";
        for ($i = 1; $i <= $elementos; $i++) {
            $resultado=$tabla*$i;
            echo "<tr><td>".$tabla."</td><td>x</td><td>".$i."</td><td>".$resultado."</td></tr>";
        }
        echo "</table>";
        ?>
    </body>
</html>
