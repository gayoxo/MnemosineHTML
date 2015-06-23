<?php include 'top.php'; ?>
<?php $LinkAtras="index.php"; ?>
<?php include 'cabecera.php'; ?>
<?php
	$Campos=$_POST["Campos"];
	
//	echo $Campos;
	
	if (!isset($Campos)||(empty($Campos)))
		$Campos=array();
	
//	echo $Campos;
	?>
	
	Buscador Avanzado
	<form name="buscadoravanzadobuscar" action='buscar_avanzado.php' method="post">
	
	
	<?php
	
	include 'campos.php';
	
		
	
	$counter=0;
	
	$counterCampos=0;
	
	foreach ($CamposArray->CampoA as $Group1=>$Arra) 
	{
		echo "</br>";
		echo "</br>";	
		if ($Group1!="0")
		{
			echo "<span class='grupo'>".$Group1."</span>";
			$CamposAct=1;
		}
		else 
		{
			echo "<span class='grupo'>Todos</span>";
			$CamposAct=0;
		}
		
		
			if (array_key_exists($counterCampos,$Campos))
				$CamposAct=$Campos[$counterCampos];

			
	$Campos[$counterCampos] = $CamposAct;
		
		
	//	var_dump($Campos);
		
		for ($x = 0; $x <= $CamposAct; $x++) {
			
			echo "</br>";	
			echo "<select name=\"Opciones[".$counter."]\"  title=\"Opciones\">";
			if ($x!=0)
				echo "<option value=\"OR\">OR</option>";

			echo "<option value=\"AND\">AND</option>";
			echo "<option value=\"NOT\">NOT</option>";
			echo "</select>";
		

			echo "<input type=\"text\" name=\"BarraBusqueda[".$counter."]\" maxlength=\"120\">";
			echo "<select name=\"Campo[".$counter."]\">";
	
	

	
			foreach ($Arra as $elem) 
					echo "<option value=\"".$elem->Numer."\">".$elem->Valor."</option>";

			$counter=$counter+1;
		echo "</select>";
	
	
	}
	
	echo "<input type=\"button\" value=\"+\" onclick=\"javascript:document.forms['addCampo".$counterCampos."'].submit();\">";
	echo "</br>";
	$counterCampos=$counterCampos+1;
		}
	
/*	
	
	for ($x = 0; $x <= $Campos; $x++) {
		
	
		echo "</br>";	
		
		echo "<select name=\"Opciones[".$x."]\"  title=\"Opciones\">";
		if ($x!=0)
			echo "<option value=\"OR\">OR</option>";

		echo "<option value=\"AND\">AND</option>";
		echo "<option value=\"NOT\">NOT</option>";
		echo "</select>";
		
	/*echo "N : <input type=\"checkbox\" name=\"positivo[".$x."]\"  title=\"Marcar para negar la existencia del texto\" /> ";
	
	echo " O : <input type=\"checkbox\" ";
	
	if ($x==0)
		echo "disabled readonly ";
	
	echo "name=\"logica[".$x."]\" title=\"Marcar para usar logica 'o' en lugar de 'y' \" />"; 
		*//*
   echo "<input type=\"text\" name=\"BarraBusqueda[".$x."]\" maxlength=\"120\">";
	echo "<select name=\"Campo[".$x."]\">";
	
	

	foreach ($CamposArray->CampoA as $Group1=>$Arra) 
	{
	
		if ($Group1!="0")
			echo "<optgroup label=\"".$Group1."\">";
	
		foreach ($Arra as $elem) 
				echo "<option value=\"".$elem->Numer."\">".$elem->Valor."</option>";

		
		if ($Group1!="0")
			 echo "</optgroup>";
	}
	
/*	echo "<option value=\"0\">Todos</option>";
	echo "<option value=\"21814\">Nombre</option>";
	echo "<option value=\"25119\">Titulo</option>";
	echo "<option value=\"19749\">Editorial</option>";
	*//*
	
	echo "</select>";
	

	}	 
*/	
	?>
	
<!--	<input type="button" value="+" onclick="javascript:document.forms['addCampo'].submit();">-->
	</br>
	</br>
<!--	<input type="hidden" name="Campos" value='<?php //echo $Campos;?>' /> -->
	<input type="button" value="Buscar" onclick="javascript:document.forms['buscadoravanzadobuscar'].submit();">
	</form>
	
<?php 

//var_dump($Campos);
foreach ($Campos as $clavefor=>$valorfor) 
{
echo "<form name=\"addCampo".$clavefor."\" action='' method=\"post\">";
foreach ($Campos as $clavefor2=>$valorfor2) 
{
	if ($clavefor==$clavefor2)
	{
	$TMPCampo=$valorfor2+1;
	echo "<input type=\"hidden\" name=\"Campos[".$clavefor2."]\" value='".$TMPCampo."' />";
	}else
	{
		echo "<input type=\"hidden\" name=\"Campos[".$clavefor2."]\" value='".$valorfor2."' />";
	}
}
echo "</form>";
}
?>	
	
	</br>
	
	
<?php include 'botton.php'; ?>