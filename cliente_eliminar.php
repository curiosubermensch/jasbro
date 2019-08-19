
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="estiloso.css">
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
		
		<form action="crud_cliente.php" method="POST" onSubmit="return validarTodo()">
		<table border="1">
				<tr>
					<td>Rut: </td>
					<td><input type="text" id="txtRut" name="txtRut"></td><span id="mensaje_rut"></span>
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
<script src="validacionCliente.js"  type="text/javascript"></script>
</html>