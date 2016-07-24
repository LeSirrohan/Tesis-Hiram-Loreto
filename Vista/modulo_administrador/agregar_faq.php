<?php
	session_start();
	$equipo=$_SESSION['_Equipo'];
	$registrado=$_SESSION['_Registrado'];
	include("../../Modelo/ClsConectar.php");
	include("../../Modelo/ClsSoportes.php");
	$soporte = new ClsSoportes();

?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Soporte Técnico</title>
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
	<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css"/>
	<link href="../../css/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
	<link href="../../css/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css"/>
	<link href="../../css/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
	<link href="../../css/uniform/css/uniform.default.css" rel="stylesheet" type="text/css"/>
	<link href="../../css/bootstrap-switch/css/bootstrap-switch.min.css" rel="stylesheet" type="text/css"/>
<!-- END GLOBAL MANDATORY STYLES -->
    <!-- BEGIN THEME STYLES -->
	<link href="../../css/components.css" id="style_components" rel="stylesheet" type="text/css"/>
	<link href="../../css/layout.css" rel="stylesheet" type="text/css"/>
	<link id="style_color" href="../../css/darkblue.css" rel="stylesheet" type="text/css"/>
	<link href="../../css/custom.css" rel="stylesheet" type="text/css"/>
	<!-- END THEME STYLES -->
    <!-- Bootstrap core CSS -->
    <link href="../../css/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

 <body>
	<div class="container">
	<div class="row">
    <div class="col-md-12"><img width="100%" src="../../imagenes/banner2.fw.png">  
		
	</div><BR>
	<div class="row">	  	
	  	<div class="col-md-2">
		  	<span id="enlaces"></span>
		</div>		  	

	  	<div class="col-md-10">
	  		<!-- BEGIN SAMPLE FORM PORTLET-->
			<div class="portlet box blue">
				<div class="portlet-title">
					<div class="caption">
						 <i class="fa fa-globe"> </i>Preguntas más Frecuentes
					</div>
					<div class="actions">
						<a class="btn btn-sm blue-madison"  onclick="javascript: window.location='faq.php'">
							<i class="fa fa-arrow-left"></i>
							 Regresar
						</a>
					</div>
				</div>
				<div class="portlet-body">
					<div class="row">
						<div class="col-sm-9">
							<div class="form-group">
								<label class="col-md-4 control-label">Pregunta</label>
								<div class="col-md-6">
									<input type="text" id="pregunta" class="form-control" placeholder="Pregunta">
								</div>
							</div>
							
						</div>
					</div>
					&nbsp;
					<div class="row">
						<div class="col-sm-9">
							<div class="form-group">
								<label class="col-md-4 control-label">Respuesta</label>
								<div class="col-md-6">
									<textarea name="respuesta" id="respuesta" class="form-control" rows="3"  placeholder="Escriba una respuesta..."></textarea>
								</div>
							</div>
							
						</div>
					</div>
					&nbsp;
					<div class="row">
						<div class="col-sm-9">
							<div class="form-group">
								<label class="col-md-4 control-label">Tipo Soporte</label>
								<div class="col-md-6">
									<select  class="form-control" name="tipo_soporte" id="tipo_soporte">								
							</select>
								</div>
							</div>
							
						</div>
					</div>
					&nbsp;
					<div class="row">
						<div class="text-center">
							<a id="sig1" class="btn blue button-next">AGREGAR</a>
						</div>
					</div>
				</div>
			</div>
			<!-- END SAMPLE FORM PORTLET-->


		</div>
	  </div>
	</div>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- BEGIN PAGE LEVEL PLUGINS -->
	<script src="../../js/jquery/jquery.min.js" type="text/javascript"></script>
	<script src="../../js/jquery/jquery-migrate.min.js" type="text/javascript"></script>
	<!-- IMPORTANT! Load jquery-ui.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->
	<script src="../../js/jquery-ui/jquery-ui.min.js" type="text/javascript"></script>
	<script src="../../js/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="../../js/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js" type="text/javascript"></script>
	<script src="../../js/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
	<script src="../../js/jquery.blockui.min.js" type="text/javascript"></script>
	<script src="../../js/jquery.cokie.min.js" type="text/javascript"></script>
	<script src="../../js/uniform/jquery.uniform.min.js" type="text/javascript"></script>
	<script src="../../js/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>
	<!-- END CORE PLUGINS -->
	<!-- BEGIN PAGE LEVEL PLUGINS -->
	<script type="text/javascript" src="../../js/select2/select2.min.js"></script>
	<script type="text/javascript" src="../../js/datatables/media/js/jquery.dataTables.min.js"></script>
	<script type="text/javascript" src="../../js/datatables/extensions/TableTools/js/dataTables.tableTools.min.js"></script>
	<script type="text/javascript" src="../../js/datatables/extensions/ColReorder/js/dataTables.colReorder.min.js"></script>
	<script type="text/javascript" src="../../js/datatables/extensions/Scroller/js/dataTables.scroller.min.js"></script>
	<script type="text/javascript" src="../../js/datatables/plugins/bootstrap/dataTables.bootstrap.js"></script>
	<!-- END PAGE LEVEL PLUGINS -->

    <!-- Placed at the end of the document so the pages load faster -->
    <script src="../../js/metronic.js" type="text/javascript"></script>
	<script src="../../js/layout.js" type="text/javascript"></script>
	<script src="../../js/demo.js" type="text/javascript"></script>
    <script src="../../js/listarTipoSoportes.js"></script>
	<script>
	$(document).ready(function()
	{
		TableAdvanced.init();
		listarTipoSoporte();			
		$("#sig1").on("click",function(){
			var pregunta=$("#pregunta").val();
			var respuesta=$("#respuesta").val();
			var tipo_soporte=$("#tipo_soporte").val();
				alert(pregunta+" "+respuesta+" "+tipo_soporte);

			$.get("../../Control/insertarPreguntas.php",
				{pregunta:pregunta,respuesta:respuesta,tipo_soporte:tipo_soporte},function(resultado){
				if (resultado) 
				{
					alert("Pregunta agregada exitosamente");
					location.href('faq.php');
				};
			});
		});
		function listarTipoSoporte()
		{	
			
			$.get("../../Control/listarTipoSoporte.php",function(tiposoporte)
			{

				$("#tipo_soporte").append(tiposoporte);
				
				
			});
		}
		$.get("../../Control/enlacesAdministrador.php",function(resultado){
			$("#enlaces").html(resultado);

		});
	});
	</script>
  </body>
</html>