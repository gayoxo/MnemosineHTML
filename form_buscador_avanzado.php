<?php include 'top.php'; ?>
<?php $LinkAtras="index.php"; ?>
<?php include 'cabecera.php'; ?>
<?php
	$Campos=$_POST["Campos"];
	
//	echo $Campos;
	
	if (!isset($Campos)||(empty($Campos)))
		$Campos=0;
	
//	echo $Campos;
	?>
	
	Buscador Avanzado
	<form name="buscadoravanzadobuscar" action='buscar_avanzado.php' method="post">
	
	
	<?php
	
	include 'campos.php';
	
	for ($x = 0; $x <= $Campos; $x++) {
		
	
		echo "</br>";	
	echo "N : <input type=\"checkbox\" name=\"positivo[".$x."]\"  title=\"Marcar para negar la existencia del texto\" /> ";
	
	echo " O : <input type=\"checkbox\" ";
	
	if ($x==0)
		echo "disabled readonly ";
	
	echo "name=\"logica[".$x."]\" title=\"Marcar para usar logica 'ó' en lugar de 'y' \" />"; 
		
   echo "<input type=\"text\" name=\"BarraBusqueda[".$x."]\" maxlength=\"120\">";
	echo "<select name=\"Campo[".$x."]\">";
	
	
	//TODO AQUI
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
	*/
	
	echo "</select>";
	

	}	 
	
	?>
	
	<input type="button" value="+" onclick="javascript:document.forms['addCampo'].submit();">
	</br>
	</br>
	<input type="hidden" name="Campos" value='<?php echo $Campos?>' />
	<input type="button" value="Buscar" onclick="javascript:document.forms['buscadoravanzadobuscar'].submit();">
	</form>
	
	<form name="addCampo" action='' method="post">
	
		<?php $Campos=$Campos+1; ?>
		<input type="hidden" name="Campos" value='<?php echo $Campos?>' />
	</form>
	
	</br>
	
	
<?php include 'botton.php'; ?>