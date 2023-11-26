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

    <form id="filtroForm" method="POST">
        <label for="filtroID">Filtrar por ID:</label>
        <input type="number" id="filtroID" name="filtroID">
        
        <input type="submit" name="btnBuscar" value="Aplicar Filtros">
    </form>

    <table id="tabla-Resultados">
        <thead>
            <tr>
                <th>ID Reporte</th>
                <th>Cliente</th>
                <th>Desea ser contactado</th>
                <th>Asesor</th>
                <th>Detalle</th>
            </tr>
        </thead>
        <tbody>
        </tbody>
    </table>

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
        <a href="../web/solicitudes.html">Consulta de Solicitudes</a>
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