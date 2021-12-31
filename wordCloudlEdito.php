

<p class="estadisticasTitulo colecciones_desc">Mapa de palabras en los Editores de las obras de <i>Mnemosine</i>.</p>
<br>
 <div class="zonIndex" id="wordcambasED" style=" height: 500px;"></div>

<hr class="linea_horizontal_footer">
<br>
<script type="text/javascript">

var list = [
<?php    
		
		$ClavyService="mnemosineS";
		$ServerService='http://'.ClavyServer.':'.ClavyPort.'/'.ClavyDomine.'/rest/'.$ClavyService.'/';
	$service_url = $ServerService.'active';
	$curl = curl_init($service_url);

	curl_setopt($curl, CURLOPT_CONNECTTIMEOUT, 60); // Setting the amount of time (in seconds) before the request times out
	curl_setopt($curl, CURLOPT_TIMEOUT, 180);
	curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
	$curl_response = curl_exec($curl);
	if ($curl_response === false) {
		$info = curl_getinfo($curl);
		curl_close($curl);
		echo 'El sistema Clavy en http://'.ClavyServer.':'.ClavyPort.' no esta activo, por favor pruebe de nuevo y contacte con el administrador si persiste';
	}else
	{
		curl_close($curl);
		$service_url = $ServerService.'wordmapCountTerm?termino=editorial';
		//$service_url= $service_url.
	
	$curl = curl_init($service_url);
	curl_setopt($curl, CURLOPT_CONNECTTIMEOUT, 60); // Setting the amount of time (in seconds) before the request times out
	curl_setopt($curl, CURLOPT_TIMEOUT, 180);
	curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

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
				foreach ($JObj as $texto=>$numero)
				{
	
					echo "['$texto',$numero],", PHP_EOL;
								

				}
			curl_close($curl);
		}
	}
	}
		?>
];
WordCloud(document.getElementById('wordcambasED'), {
    list: list,
    click: function(item) {
        window.open( "buscar_basico.php?q=gram:Obra%20AND%20editorial:"+item[0], "_blank");
    }

} );

 </script>