<div>
	Buscador Basico
	<form action='buscar_basico.php' method="post">
	<input type="text" name="BarraBasica" maxlength="120" value="">
	<select name="Campo">
	
	<?php 
	include 'campos.php';
	
	
	foreach ($CamposArray->CampoA as $Group1=>$Arra) 
	{
	
		if ($Group1!="0")
			echo "<optgroup label=\"".$Group1."\">";
	
		foreach ($Arra as $elem) 
				echo "<option value=\"".$elem->Numer."\">".$elem->Valor."</option>";

		
		if ($Group1!="0")
			 echo "</optgroup>";
	}
	?>
	</select>
	<input type="submit" value="Buscar">
	</form>
	</div>
	</br>
	<div><a href='form_buscador_avanzado.php'>Buscador Avanzado</a></div>
	</br>