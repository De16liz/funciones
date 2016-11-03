<?php

function imprimir_menu($c, $t, $n)
{
	$v= explode(" ", $c); $t= explode(" ", $t); $n= explode(" ",$n);
	for ($i=0; $i < count($v) ; $i++) {
		echo "<div style=' color:$t[$i];  font-size:$n[$i];'> ";
		echo $v [$i];
		echo "</div>";

	}

}

function traer_dato($tabla, $campo1, $valor, $indice)
{
	$salida="";

	$conexion = mysqli_connect("localhost","root", "", "bd_pruebas");
	$sql= "SELECT * FROM $tabla where $campo1 = $valor";

	//echo $sql;
	$resultado = $conexion ->query($sql);////now() trae la hora del equipo

	while( $fila = mysqli_fetch_array($resultado))//trae hasta q se le indiq
	{
		$salida = $fila[$indice];
	}





	return $salida;
}

?>