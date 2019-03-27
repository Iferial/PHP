<?php
$errors = [];
 if (empty($_POST['email'])) {
     $errors ['email'] = 'Введите Email';
 } else {
     $email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);

     if ($email === false) {
         $errors['email'] = 'Неверный email';
     }
 }
 if($errors){
    include 'action.php';
    exit ();
}
 $file = fopen('subscribers.txt');
 $line = $_POST['email'] . "\n";
 fputs($file,$line);
 fclose($file);

 header('Location: congrats.html');