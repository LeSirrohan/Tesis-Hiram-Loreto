<?PHP
include("../Modelo/ClsConectar.php");
include("../Modelo/ClsSoportes.php");

$soporte= new ClsSoportes();
$nombres=$soporte-> consultar_nombre_tecnico();
$cantidad_tecnicos = $soporte -> cantidad_tecnicos();
echo "<option value=''>Seleccione...</option>";
for($i=0;$i<count($nombres);$i++){
	echo "<option value='".$nombres[$i]["bd_solicitud_idtecnico"]."'>".$nombres[$i]["bd_solicitud_idtecnico"]."</option>";

}
	

?>