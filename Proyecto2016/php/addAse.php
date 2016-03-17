<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Página principal</title>
	<link rel="stylesheet" href="../css/style.css">
    <link href='https://fonts.googleapis.com/css?family=Roboto+Condensed' rel='stylesheet' type='text/css'>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
</head>
<body>
  <div class="container-main">   
      <nav class="admin">
        <a href=""><div class="group">
            <i class="material-icons nav">view_headline</i>
        </div></a>
        <a href="../index.php"><div class="group">
            <i class="material-icons nav">home</i>
        </div></a>
        <a href="addAse.php"><div class="group">
            <i class="material-icons nav">face</i>
        </div></a>
        <a href="modAse.php"><div class="group">
            <i class="material-icons nav">build</i>
        </div></a>
        <a href="delAse.php"><div class="group">
            <i class="material-icons nav">delete_forever</i>
        </div></a>
        <a href="Report.php"><div class="group">
            <i class="material-icons nav">print</i>
        </div></a>
        <a href="cerrar.php"><div class="group">
            <i class="material-icons nav">power_settings_new</i>
        </div></a>        
      </nav>    
    <div class="cal admin">
        <form action="" method="post" class="formulario ase">
            <div class="group form">
                <label>Carné</label>
                <input type="text" name="cod">
            </div>
            <div class="group form">
                <label>Nombre:</label>
                <input type="text" name="nom">
            </div>
            <div class="group form">
                <label>Apellido:</label>
                <input type="text" name="ape">
            </div>
            <div class="group form">
                <label>Contraseña:</label>
                <input type="password" name="pass">
            </div>            
            <div class="group form">
                <input type="submit" name="add" value="Agregar" class="ase">
            </div>
    <?php 
        include("ingresarase.php");
     ?>
        </form>   
    </div>
</div>
</body>
</html>