<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
    <title>MnemosineHTML Buscador Avanzado</title>
  </head>
  <body>
    <p>MNEMOSINEHTML Test Buscador Avanzado</p>
	</br>
	<?php 
	include 'config.php'; 
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
		$service_url = $ServerService.'find';
		$service_url= $service_url.
		
	$curl = curl_init($service_url);

	$data = array("name" => "Hagrid", "age" => "36");                                                                    
	$data_string = json_encode($data);    
	
	
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
			echo $curl_response;
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