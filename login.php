<?php

$msg = '';

if (isset($_POST['Enviar']) && !empty($_POST['email']) 
   && !empty($_POST['pwd'])) {
    
   if ($_POST['email'] == 'tutorialspoint' && 
      $_POST['pwd'] == '1234') {
      $_SESSION['valid'] = true;
      $_SESSION['timeout'] = time();
      $_SESSION['email'] = 'tutorialspoint';
      
      echo 'Você inseriu email e senha válidos';
   }else {
      $msg = 'Email ou senha errados';
   }
}

//Creditos tutorialspoint

?>