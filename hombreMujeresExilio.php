
 
 
 <script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Género', 'Total', 'Exilio'],
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
		$service_url = $ServerService.'hombresmujeresExilio';
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
				foreach ($JObj as $EtiquetaV=>$arrayE)
				{
					$Tottem=$arrayE['Total'];
					$Exttem=$arrayE['Exilio'];
					echo "['$EtiquetaV',$Tottem,$Exttem],", PHP_EOL,"          ";

				}
			curl_close($curl);
		}
	}
	}
		?>
		  
        ]);

        var options = {

          title: 'Autores exiliados por género en Mnemosine',
		  legend: { position: 'none' },
		  colors: ['#1b9e77', '#d95f02', '#7570b3']
        };

        var chart = new google.charts.Bar(document.getElementById('columnchart_material'));

        chart.draw(data, google.charts.Bar.convertOptions(options));
      }
    </script>
	
	
	
    


<div class="zonIndex" id="columnchart_material" style="height: 500px;"></div>
