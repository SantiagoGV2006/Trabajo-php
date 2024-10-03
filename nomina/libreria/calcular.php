<?php
include('nomina.php');

$valorDia = 10; // valor del día predeterminado
$diasTrabajados = 1; // días trabajados predeterminados
$edad = 20;

$nomina = new Nomina($valorDia, $diasTrabajados, $edad); // Por ejemplo, la edad es 45/ Por ejemplo, la edad es 45

$response = [];
$response['salario'] = $nomina->salario();
$response['salud'] = $nomina->salud();
$response['pension'] = $nomina->pension();
$response['arl'] = $nomina->arl();
$response['subTrans'] = $nomina->subTrans();
$response['retencion'] = $nomina->retencion();
$response['extra'] = $nomina->extra();
$response['deducible'] = $nomina->deducible();
$response['totalPagar'] = $nomina->totalPagar();

header('Content-Type: application/json');
echo json_encode($response);
?>