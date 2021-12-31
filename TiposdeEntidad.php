
 
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
		['Task', 'Hours per Day'],
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
		$service_url = $ServerService.'vocabulario?termino=GRAM';
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
					if ($EtiquetaV=="reseas")
						$EtiquetaV="reseñas";
					
					$EtiquetaV=ucfirst($EtiquetaV);
					 echo "['$EtiquetaV',$arrayE],", PHP_EOL,"          ";

				}
			curl_close($curl);
		}
	}
	}
		?>
        ]);

        var options = {
		  colors: ['#1b9e77', '#d95f02', '#7570b3', '#b370ac','#b2b370','#2471A3']
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart3Enty'));

        chart.draw(data, options);

          google.visualization.events.addListener(chart, 'select', function() {
              var selection = chart.getSelection();

              if (selection.length>0)
              {
                  var seleccionIndex = selection[0].row;
                  window.open( "buscar_basico.php?q=gram:"+data.getValue(seleccionIndex,0), "_blank");
              }



          });

      }
 </script>

    <p class="estadisticasTitulo colecciones_desc">Elementos por entidad en <i>Mnemosine</i>.</p>
<div class="zonIndex" id="piechart3Enty" style="height: 500px;"></div>