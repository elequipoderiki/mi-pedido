<?php
    include('conexiondb.php');
    
    $dni = $_POST['dni_buscar'];
    $mail = $_POST['mail_buscar'];

  
    $consulta = mysqli_query($dbconnection, "select * from pedido where dni = '$dni' and email = '$mail'; ");

    if( !empty($consulta)){
        $res  = mysqli_fetch_array($consulta);
        if(!empty($res)){
            header("Location: index.php?busquedaok&user=$res[1]");

        } else {
            header("Location: index.php?busquedafail");
        }
    } else {
        echo "<h1> consulta fallida </h1>";
    }

?>