<?php
    $importe = $_POST['importe'];
    $cantidad = $_POST['cantidad'];
    $sueldoBase = 600;
    $comision = $importe*0.075;
    $bonificacion = $cantidad * 50;
    $sueldoBruto = $sueldoBase + $comision + $bonificacion;
    $descuento = $sueldoBruto * 0.11;
    $sueldoNeto = $sueldoBruto - $descuento;

    echo "Comision: ".$comision."<br>";
    echo "Bonificacion: ".$bonificacion."<br>";
    echo "Sueldo Bruto: ".$sueldoBruto."<br>";
    echo "Descuento: ".$descuento."<br>";
    echo "Sueldo Neto: ".$sueldoNeto."<br>";
?>