
<?php 
	$conexion=mysqli_connect("localhost","root","","jasbro2") or //agregar las 4 cosas esta
	die("Problemas con el inicio de la conexión");
 ?>

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
				<li><a href="producto.html">Productos</a>
				</li>
				<li><a href="categoria.html">Categoria</a></li>
				<li><a href="cliente.html">Cliente</a></li>
				<li><a href="compra.html">Compra</a></li>
			</ul>
		</div>		
	
	</div>

	
	

	<div id="cuerpo">
		
		<h2>Cliente: </h2>
		<?php  
			
			
			//$modificar=$_POST['btnModificar'];
			//$e=$_POST['btnEliminar'];

			if (isset($_POST['btnIngresar'])){


				mysqli_query($conexion,"insert into cliente(Rut,Nombre,Apellido,Direccion) values 
			                       ('$_REQUEST[txtRut]','$_REQUEST[txtNombre]','$_REQUEST[txtApellido]','$_REQUEST[txtDireccion]')")
			  	or die("Problemas en el select".mysqli_error($conexion));

				mysqli_close($conexion);

				echo "El cliente fue ingresado";	
			}

			elseif(isset($_POST['btnModificar'])){
				mysqli_query($conexion, "update cliente
                       set Nombre='$_REQUEST[txtNombre]', Apellido='$_REQUEST[txtApellido]', Direccion='$_REQUEST[txtDireccion]' 
                        where Rut='$_REQUEST[txtRut]'") or
				  die("Problemas en el select:".mysqli_error($conexion));

				  mysqli_close($conexion);
				  echo "El cliente fue modificado con exito";
			}

			elseif(isset($_POST['btnMostrar'])){

				//acciones mostrar
				$registros=mysqli_query($conexion,"select Nombre,Apellido, Direccion
                        from cliente where Rut='$_REQUEST[txtRut]'") or
				  die("Problemas en la sentencia sql:".mysqli_error($conexion));

				if ($reg=mysqli_fetch_array($registros))
				{
				  echo "Nombre:".$reg['Nombre']."<br>";
				  echo "Apellido:".$reg['Apellido']."<br>";
				  echo "Direccion:".$reg['Direccion']."<br>";
				  
				}
				else
				{
				  echo "No existe un cliente con ese rut.";
				}
				mysqli_close($conexion);

			}


			elseif(isset($_POST['btnEliminar'])){
				//eliminar cliente:
				$registros=mysqli_query($conexion, "select * from cliente
                        where Rut='$_REQUEST[txtRut]'") or
				  die("Problemas en el select:".mysqli_error($conexion));
				if ($reg=mysqli_fetch_array($registros))
				{
				  mysqli_query($conexion,"delete from cliente where Rut='$_REQUEST[txtRut]'") or
				    die("Problemas en el select:".mysqli_error($conexion));
				  echo "Se ha borrado al cliente";
				}
				else
				{
				  echo "No existe el cliente con dicho rut";
				}
				mysqli_close($conexion);

			}


		?>	

		<br>
		<a href="cliente.html">Volver a la pagina principal</a>
		
	</div>

	<div id="pie">
		<p>Jasbro 2017</p>
	</div>



</body>
</html>