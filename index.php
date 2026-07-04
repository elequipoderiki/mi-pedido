<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Pedidos y Seguimiento</title>
    <link href="style.css" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Russo+One&display=swap" rel="stylesheet">
</head>

<body>
    <div class="main-title russo-one-regular">
        <h1>Mi Pedido</h1>
    </div>
        <?php
            if(isset($_GET['insercionok'])){
        ?>
            <div class="db-insertion-item">
                <h1> Ha realizado un pedido </h1>
            </div>
        <?php
            }elseif(isset($_GET['insercionfail'])){
        ?>
            <div class="db-insertion-item">
                <h1> ERROR AL REALIZAR PEDIDO </h1>
                <h2> Inténtelo de nuevo </h2>
            </div>
        <?php
            } elseif(isset($_GET['busquedaok'])){
                if(isset($_GET['user'])){
                $user = $_GET['user'];
                echo "<div class='db-insertion-item'>
                        <h1>$user su pedido está en camino</h1>
                    </div>";
    
            }else {
        ?>
            <div class="db-insertion-item">
                <h1> Su pedido está en camino </h1>
            </div>
        <?php
            }} elseif(isset($_GET['busquedafail'])){
        ?>
            <div class="db-insertion-item">
                <h1>No se ha encontrado el pedido</h1>
            </div>
        <?php
            } else{
        ?>
            <div class="db-insertion-item">
                <h1>Bienvenido! Consulte su pedido</h1>
            </div>
        <?php
            }
        ?>

    <div class="container">
        
        <!-- FORMULARIO IZQUIERDA: Seguimiento -->
        <div class="form-box">
            <h2>Consultar Seguimiento</h2>
            <form action="procesarbusqueda.php" method="post">

                <label for="dni_buscar">DNI</label>
                <input type="text" id="dni_buscar" name="dni_buscar" required>

                <label for="mail_buscar">Email</label>
                <input type="email" id="mail_buscar" name="mail_buscar" required>

                <button type="submit">Consultar</button>
            </form>
        </div>

        <!-- FORMULARIO DERECHA: Pedido -->
        <div class="form-box">
            <h2>Realizar Pedido</h2>
            <form action="procesarinsercion.php" method="post">

                <label for="producto">Producto</label>
                <select id="producto" name="producto" required>
                    <option value="">Seleccione un producto</option>
                    <option value="toner_hp">Toner HP</option>
                    <option value="papel_a4">Papel A4 Premium</option>
                    <option value="marcador_indeleble">Marcador Indeleble</option>
                    <option value="laptop_hp">Laptop HP</option>
                    <option value="camara_web">Camara Web</option>
                    <option value="bateria_hp">Bateria HP</option>
                    <option value="b">Producto Inexistente</option>

                </select>

                <label for="nombre">Nombre y Apellido</label>
                <input type="text" id="nombre" name="nombre" required>

                <label for="email">Email</label>
                <input type="email" id="email" name="email" required>

                <label for="dni">DNI</label>
                <input type="text" id="dni" name="dni" required>

                <label for="direccion">Dirección</label>
                <input type="text" id="direccion" name="direccion" required>

                <label for="ciudad">Ciudad</label>
                <input type="text" id="ciudad" name="ciudad" required>

                <button type="submit">Enviar Pedido</button>
            </form>
        </div>

    </div>

</body>

</html>