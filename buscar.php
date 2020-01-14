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
                    //devuelve todos los usuarios
                    echo "todos los usuarios:" . "<br>";
                    $usuarios = $bd->usuarios->find();
                    foreach($usuarios as $usuario){
                        print_r($usuario);
                    }
                    //users con nombre
                    echo "usuarios con nombre:" . "<br>";
                    $usuarios = $bd->usuarios->find(['nombre' => 'Ana']);
                    foreach($usuarios as $usuario){
                        print_r($usuario);
                    }
                    // primer usuario encontrado
                    echo "primer usuario encontrado:" . "<br>";
                    $usuario = $bd->usuarios->findOne();
                    print_r($usuario);
                } catch (Exception $ex) {
                    print($ex);
                }
        ?>
    </body>
</html>
