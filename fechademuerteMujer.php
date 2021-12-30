<script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);

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
          $service_url = $ServerService.'muertos3639mujer';
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
                  curl_close($curl);
              }

          }
      }
      ?>


      function drawChart() {

          var dictNameID = {};
          <?php


          foreach ($JObj as $EtiquetaV=>$arrayE)
          {
          ?>
          dictNameID['<?php echo $EtiquetaV; ?>']=<?php echo $arrayE[1]; ?>;

          <?php
          }

          ?>

        var data = google.visualization.arrayToDataTable([
          ['Nombre', 'Año de Fallecimiento'],

            <?php


                        foreach ($JObj as $EtiquetaV=>$arrayE)
                        {

                            echo "['$EtiquetaV','$arrayE[0]'],", PHP_EOL,"          ";

                        }

            ?>

		  ]);

        var options = {
          legend: { position: 'none' },
		   colors: ['#d95f02', '#7570b3'],
		   hAxis: {
			   format: '',
			   ticks: ['1936', '1937', '1938', '1939' ]
			},

        };

        var chart = new google.visualization.Histogram(document.getElementById('chart_div_M'));
        chart.draw(data, options);

          google.visualization.events.addListener(chart, 'select', function() {
              var selection = chart.getSelection();

              if (selection.length > 0) {
                  var seleccionIndex = selection[0].row;

                  window.open("http://repositorios.fdi.ucm.es/mnemosine/ver_documento.php?documento=" + dictNameID[data.getValue(seleccionIndex, 0)], "_blank");


              }
          });

      }
    </script>








<p class="estadisticasTitulo colecciones_desc">Mujeres muertos entre 1936 y 1939 </p>
<div class="zonIndex" id="chart_div_M" style="height: 500px;"></div>
<hr class="linea_horizontal_footer">
<br>