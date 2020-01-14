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

        $nombre = $_GET["usuario"];
        $clave = (int) $_GET["clave"];
        $saldo = (int) $_GET["saldo"];

        try{            
            $res = $db->usuarios->insertOne([
                'nombre'=>$nombre,
                'clave'=>$clave,
                'saldo'=>$saldo
                ]);
            echo "\nId del ultimo registro: " . $res->getInsertedId() . '<br>';
            /*$res = $db->usuarios->insertMany(
               ['nombre'=>'Manolo',
                'clave'=>'0000',
                'saldo'=>50],
               ['nombre'=>'Pepe',
                'clave'=>'6969',
                'saldo'=>69]);
            echo "\nId del ultimo registro: " . $res->getInsertedId() . '<br>';*/
        } catch (Exception $ex) {
            print($e);
            //comentario prueba
        }

        ?>
    </body>
</html>
