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
        <form action="insertar.php" method="get">
            Insertar Usuario:
            <input type="text" name="usuario"><br>
            Clave:<input type="text" name="clave"><br>
            Saldo:<input type="text" name="saldo"><br>
            <input type="submit" name="enviar">
        </form><br>
        <form action="buscar.php" method="get">
            Buscar usuario: <input type="text" name="usuario">
            <input type="submit" name="enviar">
        </form><br>
        <form action="actualizar.php" method="get">
            Usuario: <input type="text" name="usuario">
            Saldo nuevo: <input type="number" name="saldo">
            <input type="submit" name="enviar">
        </form><br>
        
    </body>
</html>
