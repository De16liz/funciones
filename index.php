<?php  

include ("funciones.php");
?>

<!DOCTYPE html>
<html>
<head>
	<title>ejemplo funcion</title>
</head>
<body>
<center>

	<?php  imprimir_menu( "inicio ayuda compartir coleccion escritorio mas salida", "red blue green pink orange purple gray", "18px 20px 30px 40px 50px 60px 65px"); 

		 echo traer_dato("tb_usuarios", "documento", "444", 0);

	?>
</center>
</body>
</html>