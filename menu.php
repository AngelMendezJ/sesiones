<?php
//verificar si existe una sesion
session_start();
if(isset($_SESSION['valida']) && $_SESSION['valida'] == true){
?>
<html>
	<head>
		<meta charset="utf-8">
		Menu principal
	</head>
<body>
	<p>Esto debe de verse solo si el usuario y contraseña son válidos y se inicio una sesión.</p>
	<form name="salir" action="salida.php" method="post">
		<input type="Submit" name="salir" value="Salir">
	</form>
</body>
</html>

<?php
}else{
	header('Location: index.php?error=2');
}
?>
