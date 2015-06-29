<?php include 'top.php'; ?>
<?php $LinkAtras=""; ?>
<?php include 'cabecera.php'; ?>
	</br>

<?php include 'form_buscador.php'?>
	
<div class="Colecciones">
	<p class="Colecciones_texto_Cabecera">Colecciones</p>
	<hr class="linea_horizontal">
	<ul>	
		<?php 
		
		for($i=0; $i<10; $i++)
		{
		
		?>
		<li>
		<div>
		<a class="coleccion_vinculo" href="#">
		<img onmouseover="nhpup.popup('Coordinadora: Kirsty Hooper. Esta colección reúne a un grupo de mujeres que publicaron ensayo, poesía, teatro y prosa durante la Edad de Plata.');" src="imagenes/1.png" width="150" height="150" border="0" alt="1"> 
		<div class="collection_test"> <p onmouseover="nhpup.popup('Coordinadora: Kirsty Hooper. Esta colección reúne a un grupo de mujeres que publicaron ensayo, poesía, teatro y prosa durante la Edad de Plata.');">Mujeres intelectuales de la edad de plata </p></div>
		</div>
		</li>
		<?php 
		}
		?>
	</ul>
</div>	
	
<?php include 'botton.php'; ?>