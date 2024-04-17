<?php
include 'claseEmpresa.php';
include 'ClaseMoto.php';
include 'ClaseCliente.php';

//$nombreCliente, $apellidoCliente, $estadoAlta, $dniCliente
$ObjCliente1 = new Cliente("Juan", "Perez", "alta","DNI", 263215636);
$ObjCliente2 = new Cliente("Luis", "Martinez", "baja","DNI", 365241251);


//($codigo, $añoFabricación, $descripción, $incrementoAnual, $disponibilidad)
$moto1 = new Moto (11,2230000, 2022, "Benelli Imperiale 400", 85, true);
$moto2 = new Moto (12, 584000, 2021, "Zanella Zr 150 Ohc", 70, true);
$moto3 = new Moto (13, 999900, 2023, "Zanella Patagonian Eagle 250", 55, false);


//($denominacion, $direccion)
$empresa = new Empresa("Alta Gama", "Av. Argenetina 123");
$empresa->ingresarClientes($cliente1);
$empresa->ingresarClientes($cliente2);
$empresa->ingresarObjMotos($moto1);
$empresa->ingresarObjMotos($moto2);
$empresa->ingresarObjMotos($moto3);

$empresa->registrarVenta([11,12,13], $ObjCliente2);
$empresa->registrarVenta([0], $ObjCliente2);
$empresa->registrarVenta([2], $ObjCliente2);

$empresa->retornarVentasXCliente("DNI",263215636);

echo $empresa . "\n";