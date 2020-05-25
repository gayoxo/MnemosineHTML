<?php include 'top.php';
include 'config.php'; 




?> 
<br>
<br>
<?php 
include "form_buscador.php";
?>


<?php





function ProcesaLista($ArrayE,$lis,$Ini)
{
	foreach ($ArrayE as $arrayV)
	{
	$Type="";
		$Value="";
		$DocRef="";
		$Info= array();
		$DescRef="";
		$RecRef="";
	$DescIcon="";
	$isMap="";
	$isRoute="";
	
	foreach ($arrayV as $EtiquetaV=>$Valor)
	{
		
	/*	echo "Aqui: ".$EtiquetaV." Valor: ".$Valor ;*/
		
		
		
		
		if ($EtiquetaV=='Type')
			$Type=$Valor;		
				
		if ($EtiquetaV=='DescRef')
			$DescRef=$Valor;		
		
		if ($EtiquetaV=='Value')
			$Value=$Valor;
				
		if ($EtiquetaV=='DocRef')
			$DocRef=$Valor;
				
		if ($EtiquetaV=='Info')
			$Info=$Valor;
		
		if ($EtiquetaV=='RecRef')
			$RecRef=$Valor;
		
		if ($EtiquetaV=='DescIcon')
			$DescIcon=$Valor;
		
		if ($EtiquetaV=='isMap')
			$isMap=$Valor;
		
		if ($EtiquetaV=='isRoute')
			$isRoute=$Valor;
	}

	if (!empty($Type))
	{		
	if ($lis==true)
		echo "<li class=\"lisummary\">";
	
	if (!empty($Info))
	{
//NO LO NECESITAN
//		if ($Type=='F. Recursos'||$Type=='F.Enriquecida'||$Type=='Recursos')
//			echo "<details>";
//		else
			echo "<details open>";
				
		echo "<summary>";
	}
	
		$Result="";
		
		if (!empty($Value))
		{
			
			if ($isMap==true)
			{
				
			if ($isRoute==true)
			{
				
				$Posiciones=$Value[0];
				$ValoresHijos=$Value[1];
				$InicialPos=$Posiciones[0];
				echo "<div id=\"map".$Ini."\" class=\"map\"></div>";
				echo "<script>
    var map = new GMaps({
      el: '#map".$Ini."',
      lat: ".$InicialPos[0].",
      lng: ".$InicialPos[1].",
	  zoom: 5
    });";
	
	for($i = 0; $i < count($Posiciones); ++$i)
	{

	$icon="\"geo/IconoRojo.png\"";
	if ($i>0)
		$icon="\"geo/IconoAmarillo.png\"";
	
	if ($i==count($Posiciones)-1)
		$icon="\"geo/IconoAzul.png\"";
	
	$valorMarca =$Posiciones[$i];
	$valorMarcaHijos =$ValoresHijos[$i];
	echo "
	map.addMarker({
  lat: ".$valorMarca[0].",
  lng: ".$valorMarca[1].",
  icon: ".$icon.",
  infoWindow: {
  content: '<p>";
  
  ProcesaLista($valorMarcaHijos,true,$Ini);
  
  echo "</p>'
}
	});";
	}

$psjason=json_encode($Posiciones);

//echo $psjason;
$psjason = str_replace('"','', $psjason);

echo "pathe =".$psjason.";";
// [[-12.044012922866312, -77.02470665341184], [-12.05449279282314, -77.03024273281858], [-12.055122327623378, -77.03039293652341], [-12.075917129727586, -77.02764635449216], [-12.07635776902266, -77.02792530422971], [-12.076819390363665, -77.02893381481931], [-12.088527520066453, -77.0241058385925], [-12.090814532191756, -77.02271108990476]];	";
	echo "map.drawPolyline({
  path: pathe,
  strokeColor: '#db6c5a',
  strokeOpacity: 0.8,
  strokeWeight: 6
});";
	
	echo "</script>";
	$Ini=$Ini+1;
				
			}
			else
			{				
				
				echo "<div id=\"map".$Ini."\" class=\"map\"></div>";
				echo "<script>
    var map = new GMaps({
      el: '#map".$Ini."',
      lat: ".$Value[0].",
      lng: ".$Value[1]."
    });
	
	map.addMarker({
  lat: ".$Value[0].",
  lng: ".$Value[1].",
  icon: \"geo/IconoRojo.png\",
  infoWindow: {
  content: '<p>";
  
  if (!empty($Info))
			ProcesaLista($Info,true,$Ini);
  
  echo "</p>'
}
	});
	
	</script>";
	$Ini=$Ini+1;
			}
			}
			else
			{
		
			$Show="OV: ".$Value." (Sin descripción)" ;
			if (!empty($DescRef))
			$Show=$DescRef;
		
		if ($DocRef==true)
				$Result= "<a class=\"avalueE\" href=\"ver_documento.php?documento=".$Value."\" target=\"_blank\" >".$Show."</a>";
			else 
		if (($RecRef==true))
		{
			if (!empty($DescIcon))
				$Result= "<a class=\"avalueE\" href=\"".$Value."\" target=\"_blank\" ><img class=\"iconvalueE\" src=\"".$DescIcon."\" alt=\"".$DescIcon."\" >OPEN</a>";
			else
				$Result= "<a class=\"avalueE\" href=\"".$Value."\" target=\"_blank\" >".$Value."</a>";
				
		}
			else
			{
				//echo PHP_VERSION;
				
				if (strpos(PHP_VERSION, '5') === 0) {
				$Value = eregi_replace('(((f|ht){1}tp://)[-a-zA-Z0-9@:%_+.~#?&//=]+)','<a href="\1" target="_blank">\1 </a>', $Value);
				$Value = eregi_replace('(((f|ht){1}tps://)[-a-zA-Z0-9@:%_+.~#?&//=]+)','<a href="\1" target="_blank">\1</a>', $Value);
				$Value = eregi_replace('([[:space:]()[{}])(www.[-a-zA-Z0-9@:%_+.~#?&//=]+)','\1<a href="http://\2" target="_blank">\2</a>', $Value);
				$Value = eregi_replace('([_.0-9a-z-]+@([0-9a-z][0-9a-z-]+.)+[a-z]{2,3})','<a href="mailto:\1" target="_blank">\1</a>', $Value);
				$Result= "<span class=\"svalueE\">".$Value."</span>";
				}
				else{
				$Value = preg_replace('(((f|ht){1}tp://)[-a-zA-Z0-9@:%_+.~#?&//=]+)','<a href="\1" target="_blank">\1 </a>', $Value);
				$Value = preg_replace('(((f|ht){1}tps://)[-a-zA-Z0-9@:%_+.~#?&//=]+)','<a href="\1" target="_blank">\1</a>', $Value);
			//	$Value = preg_replace('([[:space:]()[{}])(www.[-a-zA-Z0-9@:%_+.~#?&//=]+)','\1<a href="http://\2" target="_blank">\2</a>', $Value);
				$Value = preg_replace('([_.0-9a-z-]+@([0-9a-z][0-9a-z-]+.)+[a-z]{2,3})','<a href="mailto:\1" target="_blank">\1</a>', $Value);
				$Result= "<span class=\"svalueE\">".$Value."</span>";
				
				}
			}
			
		}
		}
		
		echo $Type.": ".$Result;
		
		if (!empty($Info))
			echo "</summary>";
		echo "<ul>";
	}
	
		
		
		
		if (!empty($Info)&&!($isMap==true))
			ProcesaLista($Info,true,$Ini);
			
			

			
			
		if (!empty($Type))	
		{
			echo "</ul>";
			
			if (!empty($Info))
				echo "</details>";
			
			if ($lis==true)
				echo "</li>";
		}			
	}
	
	
	
	
}



?>	

	<br>

<?php 


echo "<div class=\"documento_unico_data\">";
$DocumentID=$_GET["documento"];
//echo $DocumentID;

if (!isset($DocumentID)||($DocumentID==0))
{
	echo "Error en POST";
	exit();
}
	
$ServerService='http://'.ClavyServer.':'.ClavyPort.'/'.ClavyDomine.'/rest/Finder/';
	//$service_url = $ServerService.'getPlainDocument';
	$service_url = $ServerService.'getPlainDocument?userclavy='.Clavyuser.'&passwordclavy='.Clavyuserkey.'&keyclavy='.Clavykey.'&iddocument='.$DocumentID;
	$curl = curl_init($service_url);

	//echo ($service_url);
	
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
		$status = curl_getinfo($curl);
		
		if ($status['http_code']=='200')
		{
			/*echo $curl_response;
			echo "</br>";*/
			
			$JObj=json_decode($curl_response, true);
			
			curl_close($curl);
			
			$IDDOcument=$DocumentID;
			$Description="";
			$Icon="imagenes/logomenu2.png";
			$Info= array();
			
			foreach ($JObj as $EtiquetaV=>$arrayE) {
				
				
				if ($EtiquetaV=='IDDOcument')
					$IDDOcument=$arrayE;		
				
				if ($EtiquetaV=='Description')
					$Description=$arrayE;
				
				if ($EtiquetaV=='Icon'&&!empty($arrayE))
					$Icon=$arrayE;
				
				if ($EtiquetaV=='Info')
					$Info=$arrayE;
				
				

				/*foreach ($valor as $EtiquetaV=>$arrayE)
				{
				
				
				}*/
			}
			
			?>
			
			<span Class="verDocumentId"><?php echo $IDDOcument;?></span>
			
			
			<div class="verDocumentCabe"> 
			
			 <img  class="verDocumentIcon" src="<?php echo $Icon;?>" alt="Default" width="50"><span Class="verDocumentDescription"><?php echo $Description;?></span>
				
			</div>
			

				
			
			
			
			<div class="verDocumentInfo"> 
				<?php 
				
				if (!empty($Info))
				{
				//var_dump($Info);
				$Ini=0;
				ProcesaLista($Info,false,$Ini);
				}
				?>
			</div>

			<?php
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
