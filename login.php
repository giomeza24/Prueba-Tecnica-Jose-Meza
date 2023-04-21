 <?php

 $email = $_POST['email'];
 $password = $_POST['password'];

 // TODO: Validar las credenciales

 if (validar_credenciales($email, $password)) {
     session_start();
     $_SESSION['email'] = $email;
     header('Location: dashboard.php');
 } else {
     header('Location: login.php?error=1');
 }

 function validar_credenciales($email, $password) {
     // TODO: Validar las credencia
