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
        $cliente = new MongoDB\Client();
        $bd = $cliente->LibroServidor;
        $nombre = $GET['borrar'];
        $updateResult = $bd->usuarios->deleteOne(['nombre' => $nombre]);
        echo "documentos restantes después de borrar: " . $bd->usuarios->count();
        ?>
    </body>
</html>
