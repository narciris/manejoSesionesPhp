<?php 
session_start();
session_destroy(); #destruir la sesion
header('Location: index.php');
exit;

?>