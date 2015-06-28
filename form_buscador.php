	<div class="buscador_simple_zona buscador_simple">
	<div>
	Buscador Basico
	<form action='buscar_basico.php' method="post">
	<input class="barra_buscador_simple buscador_simple" type="text" name="BarraBasica" maxlength="120" value="">
	<select class="campo_valores_buscador_simple buscador_simple" name="Campo">
	
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
	<input class="buscar_buscador_simple buscador_simple" type="submit" value="Buscar">
	</form>
	</div>
	</br>
	<div>
	<button class="buscar_buscador_simple buscador_simple" type="submit" value="Buscar" onclick="window.location.href='form_buscador_avanzado.php'">Buscador Avanzado
	</button>
	<!--- <a href='form_buscador_avanzado.php'>Buscador Avanzado</a></div> -->
	</br>
	</div>
	</div> <!-- Cierre de la cabecera con imagen -->