<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="estiloso.css">
	<script src="validacionCategoria.js" type="text/javascript"></script>
</head>
<body>

	<div id="cabeza" align="center">
		<img src="jasbro_logo.png" alt="Jasbro logo" height="130px">
		<div id="nav">
			<ul>
				<li><a href="index.html">Home</a></li>
				<li><a href="producto.html">Producto</a>
				</li>
				<li><a href="categoria.html">Categoria</a></li>
				<li><a href="cliente.html">Cliente</a></li>
				<li><a href="compra.html">Compra</a></li>
			</ul>
		</div>		
	
	</div>

	
	

	<div id="cuerpo">
		
		<form action="crud_categoria.php" method="POST">
		<table border="1">
				<tr>
					<td>Id: </td>
					<td><input type="text" name="txtCategoria"></td>
				</tr>
				<tr>
					<td><input type="submit" name="btnEliminar" value="Eliminar"></td>
				</tr>
		</table>
	</form>



	</div>

	<div id="pie">
		<p>Jasbro 2017</p>
	</div>



</body>
</html>