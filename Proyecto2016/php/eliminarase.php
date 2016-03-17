<?php

header('Content-Type: text/html; charset=utf-8'); 

if(isset($_POST['add'])){


@$codigo=$_POST['cod'];


include('conn.php');

if(!empty($_POST["cod"])){

	$select = "SELECT * FROM tbusup WHERE Cargo = 'asesor'";
	$ejecutar = mysqli_query($conn,$select);
	if (mysqli_num_rows($ejecutar)< 1) {
		echo "No hay asesores registrados";
	}else{

		$sql= "DELETE FROM tbusup WHERE Carne = '$codigo'";
		$sentence=mysqli_query($conn,$sql);
		if (!$sentence) {
			echo "No se pudo insertar el usuario";
		}else{
			echo "<b>El asesor se eliminó correctamente</b>"; 
	}
}


	}else{
		echo "Por favor ingrese todos los campos.";
	}

}

?>