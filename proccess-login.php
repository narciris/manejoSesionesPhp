<?php 
session_start();

require 'data.php';

$email = $_POST['email'];
$password = $_POST['password'];

foreach($users as $data_user){
    if($data_user['email'] == $email && $data_user['password'] == $password){
        $_SESSION['user'] = $data_user;
        header('Location: home.php');
        exit;
    }
}

$_SESSION['error'] = 'credenciales incorrectas';
       exit;

?>
