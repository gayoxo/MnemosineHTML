<?php include 'top.php'; ?>
<?php $LinkAtras="index.php"; ?>
<?php include 'cabecera.php'; ?>
<?php include 'form_buscador.php'?>	
<?php 

	$Basica=$_POST["BarraBusqueda"];
	$Basica2=$_POST["Campo"];
	
	if (!isset($Basica)||empty($Basica))
		$Basica=array();
	
	if (!isset($Basica2)||empty($Basica2))
		$Basica2=array();
	
	if (count($Basica)!=count($Basica2))
		{
		echo "Error en POST del PHP";
		exit(0);
		}
		
/*	var_dump($Basica);
	
	echo "</br>";
	
	var_dump($Basica2); 
	echo "</br>";
	*/
	
	$BusquedaArray=array();
	
	
	
	
	
	for ($x = 0; $x < count($Basica); $x++) 
	{
		$BasicaUni=$Basica[$x];
		$Campo=$Basica2[$x];
	
		$TypeNumber=0;
		if ($Campo=='A')
			$TypeNumber=0;
		else if ($Campo=='N')
			$TypeNumber=21814;
		else if ($Campo=='T')
			$TypeNumber=25119;
		else if ($Campo=='E')
			$TypeNumber=19749;
	
/*	echo $BasicaUni;
	echo "</br>";
	*/
	
	$Busqueda= array("type" => $TypeNumber,"prositive" => true, "and" =>true) ;
	$BusquedaArray[$BasicaUni]=$Busqueda;
	}
	
	//var_dump($BusquedaArray);
		
	
	include 'buscar_codigo_general.php';
	
		
	?>
	
<?php include 'botton.php'; ?>