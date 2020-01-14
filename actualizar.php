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
        require vendor/autoload.php;
                try {
                    $cliente = new MongoDB\Client();
                    $bd = $cliente->LibroServidor;
                    $nombre = $GET['usuario'];
                    $saldo = (int) $GET['saldo'];
                    
                    $updateResult = $bd->usuarios->updateOne(['nombre' => $nombre],
                            ['$set' => ['saldo' => $saldo]]);
                    
                } catch (Exception $ex) {
                    print($ex);
                }
        ?>
    </body>
</html>
