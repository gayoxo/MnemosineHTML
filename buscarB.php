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
	if ($Campo='A')
		$TypeNumber=0;
	else if ($Campo='N')
		$TypeNumber=1;
	else if ($Campo='T')
		$TypeNumber=2;
	else if ($Campo='G')
		$TypeNumber=3;
		
	$Filtro= array(123,134,156);
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
	
			foreach ($JObj as $valor) {
				
				/*
				foreach ($JObj as $Etiqueta=>$ValorE)
				{
					var_dump ($Etiqueta);
					var_dump ($ValorE);
					echo $Etiqueta;
					echo $ValorE;
				}*/
				//var_dump($valor);
				echo "</br>";
				$valorID="";
				$valorDesc="";
				$valorIZ="";
				foreach ($valor as $Etiqueta=>$ValorE)
				{
					if ($Etiqueta=='IDDOcument')
						$valorID=$ValorE;
					else if ($Etiqueta=='Description')
						$valorDesc=$ValorE;
						else if ($Etiqueta=='Icon')
						$valorIZ=$ValorE;
					
					/*var_dump ($Etiqueta);
					echo "</br>";
					var_dump ($ValorE);
					echo "</br>";}*/
				}
				show_document($valorID,$valorDesc,$valorIZ);
				
				/*
				echo "</br>";
				echo "</br>";
				
				var_dump ($valor[0]);
				var_dump ($valor[1]);
				var_dump ($valor[2]);
				
				show_document($valor[1],$valor[2],$valor[3]); }*/
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