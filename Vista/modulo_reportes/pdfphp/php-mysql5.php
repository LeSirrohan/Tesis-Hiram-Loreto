<?php
require_once('class.ezpdf.php');
$pdf =& new Cezpdf('a4');
$pdf->selectFont('../fonts/courier.afm');
$pdf->ezSetCmMargins(1,1,1.5,1.5);
include ("../../Clases/conectar.php");

$conexion = new Clsconexion_bd();
$conectar = $conexion->conexion();
$sql = "SELECT * FROM soporte WHERE 1 ORDER BY area ASC"; 
$consul=pg_query($sql) ;


$ixx = 0;
while($datatmp = pg_fetch_assoc($consul)) { 
	$ixx = $ixx+1;
	$data[] = array_merge($datatmp, array('num_soporte'=>$ixx));

		$datatmp["nombre_soporte"] = utf8_decode($datatmp["nombre_soporte"]);
		$datatmp["tipo_soporte"] = utf8_decode($datatmp["tipo_soporte"]);
		$datatmp["area"] = utf8_decode($datatmp["area"]);
		$datatmp["nombre_tecnico"] = utf8_decode($datatmp["nombre_tecnico"]);
		$datatmp["observacion"] = utf8_decode($datatmp["observacion"]);
		
}
$titles = array(
				'num_soporte'=>'<b>Num</b>',				
				'nombre_soporte'=>'<b>Nombre</b>',				
				'fecha'=>'<b>Fecha</b>',				
				'tipo_soporte'=>'<b>Tipo Soporte</b>',				
				'area'=>'<b>Area </b>',				
				'nombre_tecnico'=>'<b>Tecnico</b>',				
				'observacion'=>'<b>Observacion</b>'
			);
$options = array(
				'shadeCol'=>array(0.9,0.9,0.9),
				'xOrientation'=>'center',
				'width'=>500
			);
//$txttit = "<b>Reportes</b>\n";

//$pdf->ezText($txttit, 12);
$pdf->ezImage("odebrecht.jpg", 0, 210, 'none', 'left');

$pdf->ezTable($data, $titles, '', $options);
$pdf->ezText("\n\n\n", 10);
$pdf->ezText("<b>Fecha:</b> ".date("d/m/Y"), 10);
/*$pdf->ezText("<b>Hora:</b> ".date("H:i:s")."\n\n", 10);*/
$pdf->ezStream();
?>