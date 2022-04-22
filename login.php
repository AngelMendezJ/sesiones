<?php
//conexion a la bd
include('conexion.php');
//Recibir usuario y contraseña
$usuario = strip_tags($_POST['usuario']);
$contrasena = strip_tags($_POST['contrasena']);
//ejecutar consulta a bd y asigno a variables
$consulta = "Select user_name, pass from usuarios where user_name=".$usuario;
$resultado = pg_query($con,$consulta);
$resultado = pg_fetch_assoc($resultado);
$usuariodb = $resultado['user_name'];
$contrasenadb = $resultado['pass'];

if($usuario == $usuariodb && hash("sha256",$contrasena) == $contrasenadb){
	//echo "Coinciden";
	//redireccionar al menu.php
	//Asignar una sesion al usuario
	session_start();
	//Asignar variables de sesion: ID
	$_SESSION['valida']=true;
	header('Location: menu.php');
} else {
	//Redireccionar a index.php?error=1;
	header('Location: index.php?error=1');
	//echo "No coinciden";
}
//
?>
