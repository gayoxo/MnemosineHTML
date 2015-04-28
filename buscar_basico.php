<?php include 'top.php'; ?>
<?php $LinkAtras="index.php"; ?>
<?php include 'cabecera.php'; ?>
<?php include 'form_buscador.php'?>	
<?php 
	
	$Basica=$_POST["BarraBasica"];
	
	$TypeNumber=0;
	if ($Campo=='A')
		$TypeNumber=0;
	else if ($Campo=='N')
		$TypeNumber=21814;
	else if ($Campo=='T')
		$TypeNumber=25119;
	else if ($Campo=='E')
		$TypeNumber=19749;
	
	$Busqueda= array("type" => $TypeNumber,"prositive" => true, "and" =>true) ;
	$BusquedaArray=array($Basica => $Busqueda);
	
	include 'buscar_codigo_general.php';
	
	
	?>
	
<?php include 'botton.php'; ?>