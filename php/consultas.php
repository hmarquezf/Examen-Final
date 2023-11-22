<?php

if(isset($_POST['btnBuscar'])){
require('config.php');

$filtroID = $_GET['filtroID'];
$sql = "SELECT reportes.reportes as IDReporte, clientes.nombre as Nombres, reportes.contactado as Contactado, vendedores.Nombre as Asesor_seleccionado, reportes.detalle as Detalle FROM reportes, clientes, vendedores WHERE reportes.idCliente = '$filtroID' and reportes.idCliente = clientes.id and reportes.idAsesor = vendedores.referencia";

$resultado = mysqli_query($db_link, $sql);

while ($fila = mysqli_fetch_array($resultado)) {
    echo "<tr>"
        ."<td>" . $fila['IDReporte'] . "</td>"
        . "<td>" . $fila['Nombres'] . "</td>"
        ."<td>" . $fila['Contactado'] . "</td>"
        . "<td>" . $fila['Asesor_seleccionado'] . "</td>"
        . "<td>" . $fila['Detalle'] . "</td>"
    . "</tr>";
}

mysqli_close($db_link);
}
?>
