<!--cliente-->
<?php 
	$conexion=mysqli_connect("localhost","root","","jasbro2") or //agregar las 4 cosas esta
	die("Problemas con el inicio de la conexión");
 ?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script src="validacionCliente.js"  type="text/javascript"></script>

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
		
		<h2>Cliente: </h2>
		<form action="crud_cliente.php" method="POST" onSubmit="return validarTodo()">
			
			<table border="1">
				<tr>
					<td>Rut: </td>
					<td><input type="text" name="txtRut" id="txtRut"></td> <span id="mensaje_rut"></span>
					<td>
						<!-- aqui va el codigo php que llena la lista con los codigos de compra-->
						<select name="selectRut">
						  <?php 

						  	$registros=mysqli_query($conexion,"select Rut
			                        from cliente") or
			  				die("Problemas en el select:".mysqli_error($conexion));

							while ($reg=mysqli_fetch_array($registros))
							{
							    echo "<option>";
								echo $reg['Rut'];
								echo "</option>";
							}

						  ?>
						</select>

					</td>
				</tr>
				<tr>
					<td>Nombre: </td>
					<td><input type="text" name="txtNombre" id="txtNombre"></td><span id="mensaje_nombre"></span>
				</tr>
				<tr>
					<td>Apellido: </td>
					<td><input type="text" id="txtApellido" name="txtApellido"></td><span id="mensaje_apellido"></span>
				</tr>
				<tr>
					<td>Dirección: </td>
					<td><input type="text" id="txtDireccion" name="txtDireccion"></td><span id="mensaje_direccion"></span>
				</tr>
				<tr>
					<td><input type="submit" name="btnIngresar" value="Ingresar"></td><span>
					<td><span id="msjeIngresar"></span></td>	
				</tr>
				<tr>
					
					<td><input type="submit" value="Modificar" name="btnModificar"></td>
					<td><span id="msjeModificar"></span></td>
					
				
				</tr>

			</table>
				

		</form>

	</div>

	<div id="pie">
		<p>Jasbro 2017</p>
	</div>
	
</body>
	<link rel="stylesheet" type="text/css" href="estiloso.css">


</html>

	