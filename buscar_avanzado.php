<?php include 'top.php'; ?>
<?php $LinkAtras="index.php"; ?>
<?php include 'cabecera.php'; ?>
<?php include 'form_buscador.php'?>	
<?php 

	$Previa=$_POST["BarraBasica"];
	
	
	
	$Basica=$_POST["BarraBusqueda"];
	$Basica2=$_POST["Campo"];
	$Basica3=$_POST["positivo"];
	$Basica4=$_POST["logica"];
	
	if (!isset($Basica)||empty($Basica))
		$Basica=array();
	
	if (!isset($Basica2)||empty($Basica2))
		$Basica2=array();
	
	if (!isset($Basica3)||empty($Basica3))
		$Basica3=array();
	
	if (!isset($Basica4)||empty($Basica4))
		$Basica4=array();
	
		
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
		
		if (array_key_exists($x,$Basica3))
			$Positivo=false;
		else $Positivo=true;
		
		if (array_key_exists($x,$Basica4))
			$ORE=false;
		else $ORE=true;
	
	
		$TypeNumber=intval($Campo);
		$TypeNumber=$CamposArray->findElem($TypeNumber);
	
/*	echo $BasicaUni;
	echo "</br>";
	*/
	
	if (isset($BasicaUni)&&(!empty($BasicaUni)))
		{
			
		$Busqueda= array("value"=>$BasicaUni,"type" => $TypeNumber,"positive" => $Positivo, "and" =>$ORE) ;
			array_push($BusquedaArray,$Busqueda);	
			
		//$Busqueda= array("type" => $TypeNumber,"positive" => $Positivo, "and" =>$ORE) ;
		//$BusquedaArray[$BasicaUni]=$Busqueda;
		}
	}
	

		if (isset($Previa)&&(!empty($Previa)))
			$BusquedaArray= json_decode($Previa, true);
	
	
//	var_dump($BusquedaArray);
	$Basica=json_encode($BusquedaArray);
	
	include 'buscar_codigo_general.php';
	
		
	?>
	
<?php include 'botton.php'; ?>