<?php
//Liberar las llaves de sesion
session_start();
session_unset();
//Destruir la sesion
session_destroy();
//Redirigir a index.php
header('Location: index.php');

?>
