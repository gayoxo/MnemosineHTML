<?php
	include 'config.php'; 
	include 'funcion_ver_documento.php';
?>

<?php
function ArrayFiltro($TypeID,$arrayFiltro,$Basica,$Campo,$Start,$Limite,$FiltroA)
{
	//var_dump ($FiltroA);
	if (!isset($arrayFiltro))
		echo "<a>+ de 50 Valores</a>";
	else if (empty($arrayFiltro))
		echo "<a>0 Valores</a>";
	else
	{
	
	$FiltroAplicarT= json_decode($FiltroA, true);
	
	if (isset($FiltroAplicarT[$TypeID])&&(!empty($FiltroAplicarT[$TypeID])))
		{
			$FiltroAplicar= $FiltroAplicarT[$TypeID];
		}
	else
	{
		$FiltroAplicar=array();
	}
		
	foreach ($arrayFiltro as $arrayV)
				{
					$cunt;
					$val;
					foreach ($arrayV as $EtiquetaV=>$Valor)
					{
						if ($EtiquetaV=="Count")
							$cunt=$Valor;
						else if ($EtiquetaV=="FilterString")
							$val=$Valor; 
					}
				
				echo "<li>";
				
				
				if (in_array ($val,$FiltroAplicar))
					echo "<input type=\"checkbox\" name=\"f".$TypeID."[]\" value=\"".$val."\"  checked >".$val." (".$cunt.")";				
				else
					echo "<input type=\"checkbox\" name=\"f".$TypeID."[]\" value=\"".$val."\">".$val." (".$cunt.")";
				echo "</li>";
				}
	}
}
?>	



<?php

$Campo=$_POST["Campo"];
	$Start=$_POST["Start"];
	$Limite=$_POST["Limite"];
	$FiltroA=$_POST["Filtro"];
	$FiltroNuevo=$_POST["FiltroNuevo"];

	if (empty($FiltroNuevo))
		$FiltroNuevo=false;
	

	
	//var_dump($FiltroA);
	
	if (empty($Start))
		$Start=0;
	
	if (empty($Limite))
		$Limite=10;
	
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
		$service_url = $ServerService.'find?userclavy='.Clavyuser.'&passwordclavy='.Clavyuserkey.'&keyclavy='.Clavykey.'&start='.$Start.'&limit='.$Limite;
		$service_url= $service_url.
		
	$curl = curl_init($service_url);
	
	
		
		
	//var_dump($TypeNumber);
	//var_dump($Campo);
	
	$Filtro= array(28647,28646,20805,21986);
	$FiltroData = array("filtro" => $Filtro); 
	
	
	//var_dump($FiltroA);
	
	if (isset($FiltroA)&&!(empty($FiltroA)))
		$FiltroAplicar= json_decode($FiltroA, true);
	else
		$FiltroAplicar=array();

	
	/*foreach ($Filtro as $Valor)	
		var_dump($_POST["f".$Valor]);
	echo "<br>"; */
	
	if ($FiltroNuevo)
	{
		$FiltroAplicar=array();
		foreach ($Filtro as $Valor)	
		{		
			if (isset($_POST["f".$Valor])&&!(empty($_POST["f".$Valor])))
			{
				$A=$_POST["f".$Valor];
				$FiltroAplicar[$Valor]=$A;
			}
		}
	}
	//var_dump($FiltroAplicar);
	
	$FiltroA=json_encode($FiltroAplicar); 
	
	
	echo "<br>";
	
	

	$BusquedaData=array("busqueda" => $BusquedaArray, "filtro" => $FiltroData,"faplicado" => $FiltroAplicar);
	
	//var_dump($BusquedaData);
		
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
	
			curl_close($curl);
			//var_dump($JObj);
			
			$arraYDocumentos=array();
			$TotalValue=0;
			$arraYFiltro=array();
			
			foreach ($JObj as $valor) {
				
				foreach ($valor as $EtiquetaV=>$arrayE)
				{
				if ($EtiquetaV=='Documents')
					$arraYDocumentos=$arrayE;		
				
				if ($EtiquetaV=='DocumentsCountTotal')
					$TotalValue=$arrayE;
				
				if ($EtiquetaV=='Filtro')
					$arraYFiltro=$arrayE;
				
				}
			}
			
			echo "El numero de elementos encontrados es :".$TotalValue;
			echo "</br>";
			
			?>
			</br>
			<div class='nvisibles'>
			
			<form action='' method="post">
			<input type="hidden" name="BarraBasica" value=<?php echo $Basica?> />
			<input type="hidden" name="Campo" value=<?php echo $Campo?> />
			<input type="hidden" name="Start" value=<?php echo $Start?> />
			<input type="hidden" name="Filtro" value='<?php echo $FiltroA?>' />


			<select name="Limite">
		<option value="10"<?php if ($Limite==10) echo "selected=\"selected\"";?>>10</option>
		<option value="25"<?php if ($Limite==25) echo "selected=\"selected\"";?>>25</option>
		<option value="50"<?php if ($Limite==50) echo "selected=\"selected\"";?>>50</option>
		<option value="100"<?php if ($Limite==100) echo "selected=\"selected\"";?>>100</option>
		<option value="200"<?php if ($Limite==200) echo "selected=\"selected\"";?>>200</option>
		<option value="500"<?php if ($Limite==500) echo "selected=\"selected\"";?>>500</option>
		<option value="1000"<?php if ($Limite==1000) echo "selected=\"selected\"";?>>1000</option>
			</select>
			<input type="submit" value="Cambiar Cantidad a Mostrar">
			</form>
			</div>
			</br>
			
			<?php
			
			if ($TotalValue>0){
				$ParticionesC=$TotalValue/$Limite;
			}
			if ($TotalValue>$Limite)
				{
				$Particiones=$TotalValue/$Limite;
				echo "<div class='paginacion'>";				
				for ($i = 0; $i <= $Particiones; $i++) {
					$sta=($Limite*$i);		
					$sup=$Limite+($Limite*$i);
					if ($sup>$TotalValue)
						$sup=$TotalValue;
	//				echo "[".$sta."-".$sup."]";
					echo "<form class=\"paginacionF\" name=\"p".($sta+1)."\" action='' method=\"post\">";
					echo "<input type=\"hidden\" name=\"BarraBasica\" value=".$Basica." />";
					echo "<input type=\"hidden\" name=\"Campo\" value=".$Campo." />";
					echo "<input type=\"hidden\" name=\"Start\" value=".$sta." />";
					echo "<input type=\"hidden\" name=\"Limite\" value=".$Limite." />";
					echo "<input type=\"hidden\" name=\"Filtro\" value='".$FiltroA."' />";
					echo "<a href=\"javascript:void(0)\" onclick=\"javascript:document.forms['p".($sta+1)."'].submit();\" >[".($sta+1)."-".$sup."]</a>";
					echo "</form>";
				}		
				echo "</div>";	
				echo "</br>";
				echo "</br>";
				}
				
			?>	
			<div class='filtro'>
			
			<?php
			
			$V28647;
			$V28646;
			$V20805;
			$V21986;
			
			foreach ($arraYFiltro as $arrayEU)
			{
				$V28647B=false;
					$V28646B=false;
					$V20805B=false;
					$V21986B=false;
					
			foreach ($arrayEU as $Etiqueta=>$ValorE)
				{
					
					
					if ($Etiqueta=='TypeId')
					{
						if ($ValorE==28647)
							$V28647B=true;
						if ($ValorE==28646)
							$V28646B=true;
						if ($ValorE==20805)
							$V20805B=true;
						if ($ValorE==21986)
							$V21986B=true;
						
					}
					else
					{
						if ($V28647B)
							$V28647=$ValorE;
						if ($V28646B)
							$V28646=$ValorE;
						if ($V20805B)
							$V20805=$ValorE;
						if ($V21986B)
							$V21986=$ValorE;
					}
				}
			}
			
?>
			<form class="filtroF" name="formFilter" action='' method="post">
			<input type="hidden" name="BarraBasica" value=<?php echo $Basica?> />
			<input type="hidden" name="Campo" value=<?php echo $Campo?> />
			<input type="hidden" name="Start" value=<?php echo $Start?> />
			<input type="hidden" name="Limite" value=<?php echo $Limite?>  />
			<input type="hidden" name="FiltroNuevo" value=true />
			<details <?php if (isset($FiltroAplicar[28647])&&(!empty($FiltroAplicar[28647]))) echo "open"; ?>>
			<summary>Impresor</summary>
		<?php	ArrayFiltro('28647',$V28647,$Basica,$Campo,$Start,$Limite,$FiltroA);?>	
			</details>

			
			<details <?php if (isset($FiltroAplicar[28646])&&(!empty($FiltroAplicar[28646]))) echo "open"; ?>>
			<summary>Lugar de impresión</summary>
			<?php ArrayFiltro('28646',$V28646,$Basica,$Campo,$Start,$Limite,$FiltroA); ?>	
			</details>

			
			<details <?php if (isset($FiltroAplicar[20805])&&(!empty($FiltroAplicar[20805]))) echo "open"; ?> >
			<summary>Materia</summary>
			<?php	ArrayFiltro('20805',$V20805,$Basica,$Campo,$Start,$Limite,$FiltroA);?>	
			</details>
			

			<details <?php if (isset($FiltroAplicar[21986])&&(!empty($FiltroAplicar[21986]))) echo "open"; ?> >
			<summary>Tipo de documento</summary>
			<?php		ArrayFiltro('21986',$V21986,$Basica,$Campo,$Start,$Limite,$FiltroA);?>	
			</details>

			<input type="submit" value="Aplicar Filtro">
			</form>
			</br>
			
			</div>	
			<div class='documents'>
			<?php
			foreach ($arraYDocumentos as $arrayEU)
				{
				$valorID="";
				$valorDesc="";
				$valorIZ="";
				foreach ($arrayEU as $Etiqueta=>$ValorE)
				{
					
					if ($Etiqueta=='IDDOcument')
						$valorID=$ValorE;
					else if ($Etiqueta=='Description')
						$valorDesc=$ValorE;
						else if ($Etiqueta=='Icon')
						$valorIZ=$ValorE;
					
					
				}
				show_document($valorID,$valorDesc,$valorIZ);
			}
			echo "</div>";	
			//var_dump($JObj);
			//echo $curl_response;
			
		}
		else
		{
			echo 'Problema del Buscador, intentelo de nuevo info: '.$status['http_code'];
			echo "</br>";
			echo $curl_response;
			curl_close($curl);
			
		}
		
	}
		
	}


?>