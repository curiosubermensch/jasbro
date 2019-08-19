<?php 
	$conexion=mysqli_connect("localhost","root","","jasbro2") or //agregar las 4 cosas esta
	die("Problemas con el inicio de la conexión");
 ?>

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
				<li><a href="producto.html">Productos</a>
				</li>
				<li><a href="categoria.html">Categoría</a></li>
				<li><a href="cliente.html">Cliente</a></li>
				<li><a href="compra.html">Compra</a></li>
			</ul>
		</div>		
	
	</div>

	
	

	<div id="cuerpo">
		
		<h2>Categoría: </h2>
		<form action="crud_categoria.php" method="POST" onSubmit="return validarTodo()">
			<table border="1">
				<tr>
					<td>Id categoría: </td>

					<td>
						<select name="selectIDCategoria">
						  
						  <?php 

						  	$registros=mysqli_query($conexion,"select Id_Categoria
			                        from categoria") or
			  				die("Problemas en el select:".mysqli_error($conexion));

							while ($reg=mysqli_fetch_array($registros))
							{
							    echo "<option>";
								echo $reg['Id_Categoria'];
								echo "</option>";
							}

						  ?>

						</select>

					</td>
				</tr>

				<tr>
					<td>Nombre: </td>
					<td><input type="text" name="txtNombre" id="txtNombre"></td>
					<td><span id="mensaje_nombre"></span></td>
				</tr>

				<tr>
					<td>Descripción: </td>
					<td><input type="text" name="txtDescripcion" id="txtDescripcion"></td>
					<td><span id="mensaje_descripcion"></span></td>
				</tr>

				<tr>
					<td><input type="submit" value="Ingresar" name="btnIngresar" ></td>
					<td><span id="msjeIngresar"></span></td>
					<td></td>
				</tr>
				
				
			</table>
			<br>
			
		</form>

		<form action="crud_categoria.php" method="POST" onSubmit="return validarCategoria()">
			<table border="1">
				<tr>
					<td>Id categoría: </td>
					
					<td>
						<input type="text" name="txtCategoria" id="txtCategoria">
						<td><span id="mensaje_categoria_mostrar"></span></td>
					</td>
				</tr>

				<tr>
					<td>Nombre: </td>
					<td><input type="text" name="txtNombre2" id="txtNombre2"></td>
					<td><span id="mensaje_nombre_mostrar"></span></td>
				</tr>

				<tr>
					<td>Descripción: </td>
					<td><input type="text" name="txtDescripcion2" id="txtDescripcion2"></td>
					<td><span id="mensaje_descripcion_mostrar"></span></td>
				</tr>

				
				<tr>
					<td><input type="submit" value="Modificar" name="btnModificar"></td>
					<td><span id="msjeModificar"></span></td>
					<td></td>
				</tr>
				
			</table>
		</form>

	</div>

	<div id="pie">
		<p>Jasbro 2017</p>
	</div>



</body>
</html>