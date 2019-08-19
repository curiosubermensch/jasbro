
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
		
		<h2>Categoria: </h2>
		<?php  
			
			
			

			if (isset($_POST['btnIngresar'])){


				mysqli_query($conexion,"insert into categoria(Nombre,Descripcion) values 
			                       ('$_REQUEST[txtNombre]','$_REQUEST[txtDescripcion]')")
			  	or die("Problemas en el select".mysqli_error($conexion));

				mysqli_close($conexion);

				echo "LA categoria fue ingresada";	
			}

			elseif(isset($_POST['btnModificar'])){
				mysqli_query($conexion, "update categoria
                       set Nombre='$_REQUEST[txtNombre2]', Descripcion='$_REQUEST[txtDescripcion2]'
                        where Id_Categoria='$_REQUEST[txtCategoria]'") or
				  die("Problemas en el select:".mysqli_error($conexion));

				  mysqli_close($conexion);
				  echo "La categoria fue modificada con exito";
			}

			elseif(isset($_POST['btnMostrar'])){

				//acciones mostrar
				$registros=mysqli_query($conexion,"select Id_Categoria,Nombre, Descripcion
                        from categoria where Id_Categoria='$_REQUEST[txtCategoria]'") or
				  die("Problemas en la sentencia sql:".mysqli_error($conexion));

				if ($reg=mysqli_fetch_array($registros))
				{
				  echo "Id Categoria:".$reg['Id_Categoria']."<br>";
				  echo "Nombre:".$reg['Nombre']."<br>";
				  echo "Descripcion:".$reg['Descripcion']."<br>";
				  
				}
				else
				{
				  echo "No existe una categoria con esa id.";
				}
				mysqli_close($conexion);

			}


			elseif(isset($_POST['btnEliminar'])){
				//eliminar cliente:
				$registros=mysqli_query($conexion, "select * from categoria
                        where Id_Categoria='$_REQUEST[txtCategoria]'") or
				  die("Problemas en la sentencia sql:".mysqli_error($conexion));
				if ($reg=mysqli_fetch_array($registros))
				{
				  mysqli_query($conexion,"delete from categoria where Id_Categoria='$_REQUEST[txtCategoria]'") or
				    die("Problemas en el select o sentencia sql:".mysqli_error($conexion));
				  echo "Se ha borrado la categoria";
				}
				else
				{
				  echo "No existe la categoria con dicha id";
				}
				mysqli_close($conexion);

			}


		?>	

		<br>
		<a href="categoria.html">Volver a la pagina principal</a>
		
	</div>

	<div id="pie">
		<p>Jasbro 2017</p>
	</div>



</body>
</html>