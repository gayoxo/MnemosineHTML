<?php include 'top.php'; ?>
<?php $LinkAtras="index.php"; ?>
<?php include 'cabecera.php'; ?>
<?php include 'form_buscador.php'?>	
<?php include 'listanegra.php'?>	

	

<?php 
	
	$Basica=$_POST["BarraBasica"];
	$Basica2=$_POST["Campo"];
	
	$TypeNumber=intval($Basica2);
	
	
	$TypeNumber=$CamposArray->findElem($TypeNumber);

	$ArrayBasico=preg_split("/[\s,]+/",$Basica); 
	
	$BusquedaArray=array();
	
	foreach ($ArrayBasico as $elem)
	{
		if (!empty($elem)||!listanegra($elem))
		{
			$Busqueda= array("value"=>$elem,"type" => $TypeNumber,"positive" => true, "and" =>true) ;
			array_push($BusquedaArray,$Busqueda);
			
		}
	}
	
	//var_dump($BusquedaArray);
	
	/*$Busqueda= array("type" => $TypeNumber,"positive" => true, "and" =>false) ;
	$BusquedaArray=array($Basica => $Busqueda);*/
	
	include 'buscar_codigo_general.php';
	
	
	?>
	
<?php include 'botton.php'; ?>