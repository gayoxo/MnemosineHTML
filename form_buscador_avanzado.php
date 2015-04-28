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
	<form action='buscar_avanzado.php' method="post">
	
	
	<?php
	
	for ($x = 0; $x <= $Campos; $x++) {
   echo "<input type=\"text\" name=\"BarraBusqueda[]\" >";
	echo "<select name=\"Campo[]\">";
	echo "<option value=\"A\">Todos</option>";
	echo "<option value=\"N\">Nombre</option>";
	echo "<option value=\"T\">Titulo</option>";
	echo "<option value=\"E\">Editorial</option>";
	echo "</select>";
	echo "</br>";
	}	 

	?>
	
	</br>
	<input type="hidden" name="Campos" value='<?php echo $Campos?>' />
	<input type="submit" value="Buscar">
	</form>
	
	</br>
	<form action='' method="post">
	
		<?php $Campos=$Campos+1; ?>
		<input type="hidden" name="Campos" value='<?php echo $Campos?>' />
		<input type="submit" value="Añadir Campos">
	</form>
	
<?php include 'botton.php'; ?>