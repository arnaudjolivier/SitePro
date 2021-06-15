<?php

if ((isset($_POST['user_id']) and !empty($_POST['user_id']))) { 
  $user_id = ($_POST['user_id']);
  $nu_name = ($_POST['nu_name']);
  $nu_email = ($_POST['nu_email']);
  $nu_password = ($_POST['nu_password']);
  
  $modU = $pdo->prepare("UPDATE users 
    set name = '$nu_name' , email = '$nu_email', password = '$nu_password'
    where id = '$user_id'");
  $modU->execute();
}
?>