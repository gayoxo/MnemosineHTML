<script type="text/javascript">
  google.charts.load("current", {packages:["timeline"]});
  google.charts.setOnLoadCallback(drawChart);
  function drawChart() {

    var container = document.getElementById('example3.1');
    var chart = new google.visualization.Timeline(container);
    var dataTable = new google.visualization.DataTable();
    dataTable.addColumn({ type: 'string', id: 'President' });
        dataTable.addColumn({ type: 'string', id: 'dummy bar label' });
        dataTable.addColumn({ type: 'string', role: 'tooltip' });
        dataTable.addColumn({ type: 'date', id: 'Start' });
        dataTable.addColumn({ type: 'date', id: 'End' });
    dataTable.addRows([
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
		$service_url = $ServerService.'obrasDe';
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
					foreach ($arrayE as $titulo=>$año)
					{
						$año2=$año+1;
						echo "['$EtiquetaV',null,'$titulo',new Date($año, 0, -181),new Date($año, 0, 181)],", PHP_EOL,"          ";
					}
					

				}
			curl_close($curl);
		}
	}
	}
		?>

      
    ]);

var options = {
		   colors: ['#1b9e77', '#d95f02', '#7570b3', '#f4ff91'],
		   timeline: {
			   showBarLabels:false,
			   showRowLabels:true,
			   groupByRowLabel: true
		   },
		    avoidOverlappingGridLines: false
        };
		
    chart.draw(dataTable,options);
  }
</script>

<p class="estadisticasTitulo colecciones_desc">Obras de autores en el tiempo </p>
<br>
<div class="zonIndex" id="chart_div" style="overflow-x: auto; height: 600px;">
<div id="example3.1" style="width: 3000px; height: 600px;"></div>
</div>
<hr class="linea_horizontal_footer">
<br>