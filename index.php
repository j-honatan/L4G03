
<?php 
   //include ('includes/db.php');
   //crear nueva instancia 

  // $db = new DB();
   //$db->init();
  // DB::init();
	$conexion=mysqli_connect('localhost','root','12345678','personas');

 ?>


<!DOCTYPE html>
<html>
<head>
	<title>mostrar datos</title>
</head>
<body>

<br>


	<table border="1" >
		<tr>
			<td>id</td>
			<td>nombre</td>
			<td>email</td>
		
		</tr>

		<?php 
		$sql="SELECT * from personas";
		$result=mysqli_query($conexion,$sql);
		while($mostrar=mysqli_fetch_array($result)){
		 ?>

		<tr>
			<td><?php echo $mostrar['id'] ?></td>
			<td><?php echo $mostrar['nombre'] ?></td>
			<td><?php echo $mostrar['email'] ?></td>
			
		</tr>

	<?php 
	}
	 ?>
     
	</table>
	<a href="crear.php">Nuevo</a>
</body>
</html>