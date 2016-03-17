<?php

header('Content-Type: text/html; charset=utf-8'); 

if(isset($_POST['add'])){


@$codigo=$_POST['cod'];
@$nombre=$_POST['nom'];
@$apellido=$_POST['ape'];
@$contrasenia=$_POST['pass'];
// @$cargo=$_POST['asesor'];

include('conn.php');

if(!empty($_POST["cod"]) && !empty($_POST["nom"]) && !empty($_POST["ape"]) && !empty($_POST["pass"])){

	$select = "SELECT * FROM tbusup WHERE Cargo = 'asesor'";
	$ejecutar = mysqli_query($conn,$select);
	if (mysqli_num_rows($ejecutar)>0) {
		echo "Solo puede agregar un asesor";
	}else{

		$sql= "INSERT INTO tbusup values ('$codigo','$nombre','$apellido','$contrasenia','asesor')";
		$sentence=mysqli_query($conn,$sql);
		if (!$sentence) {
			echo "No se pudo insertar el usuario";
		}else{
			echo "<b>El asesor se insertó correctamente</b>"; 
		}
}


	}else{
		echo "Por favor ingrese todos los campos.";
	}

}

?>