<?php
    include('conexiondb.php');
    
    $nombre = $_POST['nombre'];
    $producto = $_POST['producto'];

    switch($producto ){
        case 'papel_a4':
            $producto_id = '1';
            break;
        case 'toner_hp':
            $producto_id = '2';
            break;
        case 'marcador_indeleble':
            $producto_id = '3';
            break;
        case 'laptop_hp':
            $producto_id = '4';
            break;
        case 'camara_web':
            $producto_id = '5';
            break;
        case 'bateria_hp':
            $producto_id = '6';
            break;        
        default:
            $producto_id = '100';
            break;
    }

    $email = $_POST['email'];
    $dni = $_POST['dni'];
    $direccion = $_POST['direccion'];
    $ciudad = $_POST['ciudad'];
    $id = time();

    $consulta = mysqli_query($dbconnection, "insert into pedido values('$id', '$nombre', '$producto_id', '$email', '$dni', '$direccion', '$ciudad') ");

    if( !empty($consulta)){
        header("Location: index.php?insercionok");
    } else {
        header("Location: index.php?insercionfail");
    }

?>