<?php include 'top.php'; ?>
<?php $LinkAtras="index.php"; ?>
<?php include 'cabecera.php'; ?>
<?php include 'form_buscador.php'?>	
<?php 

	
	$BusquedaArray=array();
	
	
	$BusquedaStringLabel="";
	
	
	for ($x = 1; isset($_GET["Id".$x]); $x++)
	{
	
	$Campo=$_GET["Id".$x];
	$BasicaUni=$_GET["Desc".$x];
	$Or=$_GET["Or".$x];
	
	$Positivo=true;
	
	if (!isset($Or))
		$Or=false;

	$AND=!$Or;
	
	
	/*
	if (isset($BasicaUni)&isset($Campo))
		echo "Tipo:".$Campo." Valor:".$BasicaUni." And:".$AND;
	echo "<br>";
	*/
	
	
	$TypeNumber=intval($Campo);
	$Inside=$CamposArray->isinside($TypeNumber);
	$TypeNumber=$CamposArray->findElem($TypeNumber);
	
	
/*	}
	
	exit();
	
	
	
	$BusquedaArray=array();
	
	
	$BusquedaStringLabel="";
	
	
	for ($x = 0; $x < count($Basica); $x++) 
	{
		$BasicaUni=$Basica[$x];
		$Campo=$Basica2[$x];
		
		$Positivo=true;
		$AND=true;
		
		if (array_key_exists($x,$Opciones))
			if ($Opciones[$x]=="OR")
				$AND=false;
			else
				if ($Opciones[$x]=="AND")
				$AND=true;
			else
				if ($Opciones[$x]=="NOT")
				$Positivo=false;	
	
		$TypeNumber=intval($Campo);
		$Inside=$CamposArray->isinside($TypeNumber);
		$TypeNumber=$CamposArray->findElem($TypeNumber);
	
/*	echo $BasicaUni;
	echo "</br>";
	*/
	
	
	
	if (isset($BasicaUni)&&(!empty($BasicaUni)))
		{
			
		if (!empty($BusquedaStringLabel))
			
			if ($AND)
				$BusquedaStringLabel=$BusquedaStringLabel."AND ";
			else
				$BusquedaStringLabel=$BusquedaStringLabel."OR ";
			
			
			$Negativotemporal="";
			if (!$Positivo)
				$Negativotemporal="¬";
			
			$BusquedaStringLabel=$BusquedaStringLabel.$Negativotemporal.$BasicaUni." ";	
			
			$BasicaUniE=$BasicaUni;
			
			if ($Inside)
				$BasicaUniE="*".$BasicaUni."*";
			
			
		$Busqueda= array("value"=>$BasicaUniE,"type" => $TypeNumber,"positive" => $Positivo, "and" =>$AND,"exacto"=>true) ;
		
	/*	var_dump($Busqueda);
		echo "<br>";
		echo "<br>"; */
		
		array_push($BusquedaArray,$Busqueda);	
		

		}
	}

	/*
		echo "<br>";
		var_dump($BusquedaArray);
		
		*/


		if (isset($Previa)&&(!empty($Previa)))
			$BusquedaArray= json_decode($Previa, true);
	
	
	//var_dump($BusquedaArray);
	
	$Basica=json_encode($BusquedaArray);
	
	include 'buscar_codigo_general.php';
	
		
	?>
	