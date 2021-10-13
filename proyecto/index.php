<?php 

	$conexion=mysqli_connect('localhost','root','','pase_de_lista');

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
			<td>nombre</td>
			<td>matricula</td>
		</tr>

		<?php 
		$sql="SELECT * from docentes";
		$result=mysqli_query($conexion,$sql);

		while($mostrar=mysqli_fetch_array($result)){
		 ?>

		<tr>
			<td><?php echo $mostrar['nom_doc'] ?></td>
			<td><?php echo $mostrar['mat_doc'] ?></td>
	<?php 
	}
	 ?>
	</table>


	<br>
	<br>
	<br>
	
	<table border="1" >
		<tr>
			<td>nombre</td>
			<td>matricula</td>
		</tr>

		<?php 
		$sql="SELECT * from alumnos";
		$result=mysqli_query($conexion,$sql);

		while($mostrar=mysqli_fetch_array($result)){
		 ?>

		<tr>
			<td><?php echo $mostrar['nom_alu'] ?></td>
			<td><?php echo $mostrar['mat_alu'] ?></td>
	<?php 
	}
	 ?>
	</table>








</body>
</html>