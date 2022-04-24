<?php
    $precio = $_POST['precio'];
    $cantidad = $_POST['cantidad'];
    $nuevoPrecio = $precio - ($precio*0.05);
    $importeCompra = $nuevoPrecio * $cantidad;
    $importeDesct = $importeCompra * 0.07;
    $importeTotal = $importeCompra - $importeDesct;

    echo "Nuevo precio: ".$nuevoPrecio."<br>";
    echo "Importe compra: ".$importeCompra."<br>";
    echo "Descuento: ".$importeDesct."<br>";
    echo "Importe Total: ".$importeTotal."<br>";
    echo "Regalo: ".$cantidad." caramelos<br>";
?>