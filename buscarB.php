<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
    <title>MnemosineHTML Buscador Avanzado</title>
  </head>
  <body>
    <p>MNEMOSINEHTML Resultado Basico</p>
	</br>
	<?php 
	include 'config.php'; 
	include 'funcion_ver_documento.php';
	
	$Basica=$_GET["BarraBasica"];
	$Campo=$_GET["Campo"];
	$Start=$_GET["Start"];
	$Limite=$_GET["Limite"];
	
	if (empty($Start))
		$Start=0;
	
	if (empty($Limite))
		$Limite=10;
	
	$ServerService='http://'.ClavyServer.':'.ClavyPort.'/'.ClavyDomine.'/rest/Finder/';
	$service_url = $ServerService.'active';
	$curl = curl_init($service_url);

	curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
	$curl_response = curl_exec($curl);
	if ($curl_response === false) {
		$info = curl_getinfo($curl);
		curl_close($curl);
		echo 'El sistema Clavy en http://'.ClavyServer.':'.ClavyPort.' no esta activo, por favor pruebe de nuevo y contacte con el administrador si persiste';
	}else
	{
		curl_close($curl);
		$service_url = $ServerService.'find?userclavy='.Clavyuser.'&passwordclavy='.Clavyuserkey.'&keyclavy='.Clavykey.'&start='.$Start.'&limit='.$Limite;
		$service_url= $service_url.
		
	$curl = curl_init($service_url);
	
	$TypeNumber=0;
	if ($Campo=='A')
		$TypeNumber=0;
	else if ($Campo=='N')
		$TypeNumber=21814;
	else if ($Campo=='T')
		$TypeNumber=25119;
	else if ($Campo=='E')
		$TypeNumber=19749;
		
		
	//var_dump($TypeNumber);
	//var_dump($Campo);
	
	$Filtro= array(28647,28646,20805,21986);
	$FiltroData = array("filtro" => $Filtro); 
	
	$Busqueda= array("type" => $TypeNumber,"prositive" => true, "and" =>true) ;
	$BusquedaArray=array($Basica => $Busqueda);

	$BusquedaData=array("busqueda" => $BusquedaArray, "filtro" => $FiltroData);
	
		
	$data_string = json_encode($BusquedaData);    
	
	
	curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "POST");                                                                     
	curl_setopt($curl, CURLOPT_POSTFIELDS, $data_string); 
	curl_setopt($curl, CURLOPT_HTTPHEADER, array(                                                                          
    'Content-Type: application/json',                                                                                
    'Content-Length: ' . strlen($data_string))                                                                       
);  
	$curl_response = curl_exec($curl);
	
	
	if ($curl_response === false) {
		$info = curl_getinfo($curl);
		curl_close($curl);
		echo 'Problema del Buscador, intentelo de nuevo info: '.$info['http_code'];
		echo $curl_response;
	}else
	{
		
		$status = curl_getinfo($curl);
		
		if ($status['http_code']=='200')
		{
			$JObj=json_decode($curl_response, true);
	
			//var_dump($JObj);
			
			$arraYDocumentos=array();
			$TotalValue=0;
			
			foreach ($JObj as $valor) {
				
				foreach ($valor as $EtiquetaV=>$arrayE)
				{
				if ($EtiquetaV=='Documents')
					$arraYDocumentos=$arrayE;		
				
				if ($EtiquetaV=='DocumentsCountTotal')
					$TotalValue=$arrayE;
				}
			}
			
			echo "El numero de elementos encontrados es :".$TotalValue;
			echo "</br>";
			echo "</br>";
			
			echo "<form>";
			echo "<input type=\"hidden\" name=\"BarraBasica\" value=".$Basica." />";
			echo "<input type=\"hidden\" name=\"Campo\" value=".$Campo." />";
			echo "<input type=\"hidden\" name=\"Start\" value=".$Start." />";
			?>

			<select name="Limite">
		<option value="10"<?php if ($Limite==10) echo "selected=\"selected\"";?>>10</option>
		<option value="25"<?php if ($Limite==25) echo "selected=\"selected\"";?>>25</option>
		<option value="50"<?php if ($Limite==50) echo "selected=\"selected\"";?>>50</option>
		<option value="100"<?php if ($Limite==100) echo "selected=\"selected\"";?>>100</option>
		<option value="200"<?php if ($Limite==200) echo "selected=\"selected\"";?>>200</option>
		<option value="500"<?php if ($Limite==500) echo "selected=\"selected\"";?>>500</option>
		<option value="1000"<?php if ($Limite==1000) echo "selected=\"selected\"";?>>1000</option>
			</select>
			<input type="submit" value="Buscar">
			
			<?php
			if ($TotalValue>0){
				$ParticionesC=$TotalValue/$Limite;
				
			}
			
			echo "</br>";
			echo "</br>";
			if ($TotalValue>$Limite)
				{
				$Particiones=$TotalValue/$Limite;
				echo "<div>";				
				for ($i = 0; $i <= $Particiones; $i++) {
					$sta=($Limite*$i);		
					$sup=$Limite+($Limite*$i);
					if ($sup>$TotalValue)
						$sup=$TotalValue;
	//				echo "[".$sta."-".$sup."]";
					echo "<a href='?BarraBasica=".$Basica."&Campo=".$Campo."&Start=".$sta."&Limite=".$Limite."' >[".($sta+1)."-".$sup."]</a>";
				}		
				echo "</div>";	
				}
			echo "</br>";
			echo "</br>";
			
			foreach ($arraYDocumentos as $arrayEU)
				{

				$valorID="";
				$valorDesc="";
				$valorIZ="";
				foreach ($arrayEU as $Etiqueta=>$ValorE)
				{
					
					if ($Etiqueta=='IDDOcument')
						$valorID=$ValorE;
					else if ($Etiqueta=='Description')
						$valorDesc=$ValorE;
						else if ($Etiqueta=='Icon')
						$valorIZ=$ValorE;
					
					
				}
				show_document($valorID,$valorDesc,$valorIZ);
			}
			
			//var_dump($JObj);
			//echo $curl_response;
			
		}
		else
		{
			echo 'Problema del Buscador, intentelo de nuevo info: '.$status['http_code'];
			echo "</br>";
			echo $curl_response;
			
		}
	}
		
	}
	?>
  </body>
</html>