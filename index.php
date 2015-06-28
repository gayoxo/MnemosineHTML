<?php include 'top.php'; ?>
<?php $LinkAtras=""; ?>
<?php include 'cabecera.php'; ?>
	</br>

<?php include 'form_buscador.php'?>
	
<div class="Colecciones">
	<ul>	
		<?php 
		
		for($i=0; $i<10; $i++)
		{
		
		?>
		<li>
		<div>
		<img src="imagenes/1.png" width="100" height="100" border="0" alt="1"> 
		<div class="collection_test"> Mujeres individuales de la edad de plata </div>
		</div>
		</li>
		<?php 
		}
		?>
	</ul>
</div>	
	
<?php include 'botton.php'; ?>