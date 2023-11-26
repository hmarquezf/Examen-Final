<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Global Cars</title>
    <link rel="shortcut icon" href="../imagenes/carro.png">
    <link rel="stylesheet" href="../css/style.css">
    <script src="https://kit.fontawesome.com/a1074ad141.js" crossorigin="anonymous"></script>
</head>
<body>
    <header>
        <nav>
            <section class="contenedor nav">
                <div class="logo">
                    <a href="index.html"><img src="../imagenes/logo.jpeg" alt=""></a>
                </div>
                <div class="enlaces">
                    <a href="index.html">Inicio</a>
                    <a href="mision.html">Misión</a>
                    <a href="productos.html">Vehículos</a>
                    <a href="cuidados.html">Cuidados</a>
                    <a href="contactos.html">Contáctanos</a>
                </div>
                <div class="menu">
                    <i class="fa-solid fa-bars"></i>
                </div>
            </section> 
        </nav>
    </header>
    <div class="busqueda">
        <form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>">
            <label for="filtroID">Buscar por ID:</label>
            <input type="number" name="ID">
        
            <input type="submit" name="submit" value="Buscar">
        </form>
    </div>
    <div class="tabla">
    <?php
        if(isset($_POST['submit'])){
         require('../php/config.php');

        $idC = (int)$_REQUEST['ID'];

         $sql = "SELECT reportes.reportes as IDReporte, 
         clientes.nombre as Nombres, reportes.contactado as Contactado, 
         vehiculos.nombre as Vehiculo ,vendedores.Nombre as Asesor_seleccionado,
          reportes.detalle as Detalle FROM reportes, clientes, vendedores, vehiculos 
          WHERE reportes.idCliente = '$idC' and reportes.idCliente = clientes.id 
          and reportes.idAsesor = vendedores.id and reportes.idVehiculo = vehiculos.id";

         $resultado = $db_link->query($sql);

         if($resultado != null){

            echo "<h2>LISTADO SOLICITUDES</h2>";
            echo "    <table>
                        <thead>
                        <tr>
                            <th>ID Reporte</th>
                            <th>Nombre Cliente</th>
                            <th>Desea ser contactado</th>
                            <th>vehículo de Interés</th>
                            <th>Asesor Seleccionado</th>
                            <th>Detalle</th>
                        </tr>
                    </thead>
                    <tbody>
                    ";

            while ($row = $resultado->fetch_assoc()) {
                echo "<tr><td>" . $row['IDReporte'] . "</td><td>" . $row['Nombres'] . "</td><td>" . $row['Contactado'] . "</td><td>" . $row['Vehiculo'] . "</td><td>" . $row['Asesor_seleccionado'] . "</td><td>" . $row['Detalle'] . "</td></tr>";
            }
            echo "</tbody>
                </table>";
         }
         mysqli_close($db_link);
        }
?>
</div>
</body>

<footer>
    <div class="contenedor-Footer">
        <img src="../imagenes/logo.jpeg" alt="">
    </div>
    <div class="contenedor-Footer">
        <h3>Vehículos</h3>
        <a href="../web/productos.html">Conoce nuestros vehículos</a>
    </div>
    <div class="contenedor-Footer">
        <h3>Nosotros</h3>
        <a href="../web/mision.html">Misión</a>
        <a href="../web/cuidados.html">Cuidados y Recomendaciones</a>
        <a href="../web/contactos.html">Contáctanos</a>
        <a href="../web/solicitudes.php">Consulta de Solicitudes</a>
    </div>
    <div class="contenedor-Footer">
        <h3>Redes Sociales</h3>
        <div class="redes-Sociales">
            <i class="fa-brands fa-facebook-f"></i>
            <i class="fa-brands fa-instagram"></i>
            <i class="fa-brands fa-x-twitter"></i>
            <i class="fa-brands fa-whatsapp"></i>
        </div>
        
    </div>
    </footer>
</html>
