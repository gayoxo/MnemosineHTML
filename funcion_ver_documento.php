<?php
function show_document($arg_1,$arg_2,$arg_3,$arg_4)
{
	echo "<div class=\"documento_unico\">";
	echo "<div class=\"documento_unico_orden\">";
	echo $arg_4;
	echo "</div>";
	echo "<div class=\"documento_unico_icono\">";
	echo "<img src=\"".$arg_3."\" width=\"50\" border=\"0\" alt=\"iconoDocumento\">";
	echo "</div>";
	echo "<div class=\"documento_unico_abrir\">";
	echo "<a href=\"ver_documento.php?documento=".$arg_1."\" target=\"_blank\" >Abrir</a>";
	echo "</div>";
	echo "<div class=\"documento_unico_resto\">";
	echo "<span class\"Descripcion_documento_buscador\"> Descripcion</span>:";
	echo "<span class\"Descripcion_documento_buscador_valor\">".$arg_2."</span>";
	echo "</div>";
	echo "</div>";
	
	//echo "ID=".$arg_1." Descripcion= ".$arg_2." Icono=".$arg_3."</br>";;
	
}
?>