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
	
	include 'campos.php';
	
	for ($x = 0; $x <= $Campos; $x++) {
	echo "Negativo : <input type=\"checkbox\" name=\"positivo[".$x."]\" /> ";
   echo "<input type=\"text\" name=\"BarraBusqueda[".$x."]\" maxlength=\"120\">";
	echo "<select name=\"Campo[".$x."]\">";
	
	
	
	foreach ($CamposArray as $elem) 
		echo "<option value=\"".$elem->Id."\">".$elem->Valor."</option>";
	
/*	echo "<option value=\"0\">Todos</option>";
	echo "<option value=\"21814\">Nombre</option>";
	echo "<option value=\"25119\">Titulo</option>";
	echo "<option value=\"19749\">Editorial</option>";
	*/
	
	echo "</select>";
	if ($x!=0)
		echo " O : <input type=\"checkbox\" name=\"logica[".$x."]\" />";
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