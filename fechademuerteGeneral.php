<script type="text/javascript">
    google.charts.load('current', {'packages':['corechart']});
    google.charts.setOnLoadCallback(drawChart);

    function drawChart() {

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
            $service_url = $ServerService.'muertosTot';
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
                    ksort($JObj);
                    curl_close($curl);
                }
            }
        }
        ?>



        var data = google.visualization.arrayToDataTable([
            ['Year', 'Hombres', 'Mujeres', 'Hombres', 'Mujeres' ],

            <?php
           // var_dump($JObj);
            foreach ($JObj as $EtiquetaV=>$arrayE)
            {
                $H1=$arrayE[0];
             /*   if (!is_numeric($H1) && is_null(is_numeric($H1)))
                    $H1="null";
*/
                if (!is_numeric($H1) && is_null($H1))
                    $H1="null";

                $M1=$arrayE[1];
                if (!is_numeric($M1) && is_null($M1))
                    $M1="null";

                $H2=$arrayE[2];
                if (!is_numeric($H2) && is_null($H2))
                    $H2="null";

                $M2=$arrayE[3];
                if (!is_numeric($M2) && is_null($M2))
                    $M2="null";

                echo "['$EtiquetaV',$H1,$M1,$H2,$M2],", PHP_EOL,"          ";

            }
            ?>

        ]);

        var options = {
            curveType: 'function',
            legend: { position: 'bottom' }
        };

        var chart = new google.visualization.LineChart(document.getElementById('curve_chart_toto'));

        chart.draw(data, options);

        google.visualization.events.addListener(chart, 'select', function() {
            var selection = chart.getSelection();

            if (selection.length>0)
            {
                var genero;
                if ((selection[0].column==1) ||(selection[0].column==3))
                    genero="hombre";
                else
                    genero="mujer";

                console.log(selection[0]);
                var seleccionIndex = selection[0].row;
                window.open( "buscar_basico.php?q=fechademuerte:"+data.getValue(seleccionIndex,0)+" AND genero:"+genero, "_blank");
            }



        });
    }
</script>

<p class="estadisticasTitulo colecciones_desc">Comparativa Mortalidad por años</p>
<div class="zonIndex" id="curve_chart_toto" style="height: 500px;"></div>
<hr class="linea_horizontal_footer">
<br>