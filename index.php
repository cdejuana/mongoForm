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
        require 'vendor/autoload.php';
        $cliente = new MongoDB\Client();
        echo 'buena conexion' . '<br>';
        //var_dump($cliente);
        $db = $cliente->LibroServidor;
        //var_dump($db);
        try{
            $res = $db->usuarios->insertOne([
                'nomre'=>'Carlos',
                'clave'=>'1234',
                'saldo'=>50000
                ]);
            echo "\nId del ultimo registro: " . $res->getInsertedId() . '<br>';
        } catch (Exception $ex) {
            print($e);
            //comentario prueba
        }
        ?>
    </body>
</html>
