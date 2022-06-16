<?php 

	$conexion=mysqli_connect('localhost','root','','gatos');

 ?>


<!DOCTYPE html>
<html>
<head>
	<title>mostrar datos</title>
</head>
<body>

<br>

	<center><table border="1" >
		<tr>
			<td>Id</td>
			<td>mascota</td>
			<td>cliente</td>
			<td>Servicio</td>
			<td>Edad</td>
			

			
		
		</tr>

		<?php 
		$sql="SELECT * from registro";
		$result=mysqli_query($conexion,$sql);

		while($mostrar=mysqli_fetch_array($result)){
		 ?>

		<tr>
			<td><?php echo $mostrar['id'] ?></td>
			<td><?php echo $mostrar['mascota'] ?></td>
			<td><?php echo $mostrar['cliente'] ?></td>
			<td><?php echo $mostrar['Servicio'] ?></td>
			<td><?php echo $mostrar['Edad'] ?></td>
			
			



		
		</tr>

	<?php 
	}
	 ?>
	</table>
	
 <button><a href="Jugadores.html">R e g r e s a r </a></button></center>
</body>
</html>