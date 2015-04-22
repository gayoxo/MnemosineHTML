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
		$service_url = $ServerService.'find?userclavy='.Clavyuser.'&passwordclavy='.Clavyuserkey.'&keyclavy='.Clavykey;
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
		
		
	var_dump($TypeNumber);
	var_dump($Campo);
	
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