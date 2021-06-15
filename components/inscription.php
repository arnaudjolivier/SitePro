<?php
include_once('config.php');


if (isset($_POST['name'], $_POST['password'])) {
  if (!empty($_POST['name'])) {
    if (!empty($_POST['email'])) {
      if (!empty($_POST['password'])) {
        $name = htmlspecialchars($_POST['name']);
        $email = htmlspecialchars($_POST['email']);
        $password = htmlspecialchars($_POST['password']);

        $ins = $pdo->prepare('INSERT INTO users (name, email, password)
        VALUES (?, ?, ? )');
        $ins->execute(array($name, $email, $password));

        session_start();
        $_SESSION['users'] = $users;
        header('Location: ../index.php');
      }
    }
  }
}
