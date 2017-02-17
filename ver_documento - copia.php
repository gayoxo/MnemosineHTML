<?php include 'top.php'; ?>
<?php 


echo "<div class=\"documento_unico_data\">";
$DocumentID=$_GET["documento"];
echo $DocumentID;

if (!isset($DocumentID)||($DocumentID==0))
{
	echo "Error en POST";
	exit();
}
	
$ServerService='http://'.ClavyServer.':'.ClavyPort.'/'.ClavyDomine.'/rest/Finder/';
	//$service_url = $ServerService.'getPlainDocument';
	$service_url = $ServerService.'getPlainDocument?userclavy='.Clavyuser.'&passwordclavy='.Clavyuserkey.'&keyclavy='.Clavykey.'&iddocument='.$DocumentID;
	$curl = curl_init($service_url);

	curl_setopt($curl, CURLOPT_CONNECTTIMEOUT, 60); // Setting the amount of time (in seconds) before the request times out
curl_setopt($curl, CURLOPT_TIMEOUT, 180); // Setting the maximum amount of time for cURL to execute queries 
	curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
	$curl_response = curl_exec($curl);
	if ($curl_response === false) {
		$info = curl_getinfo($curl);
		curl_close($curl);
		echo 'El sistema Clavy en http://'.ClavyServer.':'.ClavyPort.' no esta activo, por favor pruebe de nuevo y contacte con el administrador si persiste';
	}else
	{
		$status = curl_getinfo($curl);
		
		if ($status['http_code']=='200')
		{
			echo "Ok";
		}
		else
		{
			echo 'Problema del Buscador, intentelo de nuevo info: '.$status['http_code'];
			echo "</br>";
			echo $curl_response;
			curl_close($curl);
			
		}
	}
echo "</div>";
?>
<?php include 'botton.php'; ?>