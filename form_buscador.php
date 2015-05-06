<div>
	Buscador Basico
	<form action='buscar_basico.php' method="post">
	<input type="text" name="BarraBasica" maxlength="120" value="">
	<select name="Campo">
	
	<?php 
	include 'campos.php';
	
	foreach ($CamposArray as $elem) 
		echo "<option value=\"".$elem->Id."\">".$elem->Valor."</option>";
	
	?>
	</select>
	<input type="submit" value="Buscar">
	</form>
	</div>
	</br>
	<div><a href='form_buscador_avanzado.php'>Buscador Avanzado</a></div>
	</br>