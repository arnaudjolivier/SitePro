<?php
if (isset($_POST['name'], $_POST['email'], $_POST['password'])) {
    if (!empty($_POST['name']) and !empty($_POST['email']) and !empty($_POST['password'])) {
        $name = htmlspecialchars($_POST['name']);
        $email = htmlspecialchars($_POST['email']);
        $password = htmlspecialchars($_POST['password']);
        


        $insU = $pdo->prepare('INSERT INTO users (name, email, password)
        VALUES (?, ?, ?)');
        $insU->execute(array($name, $email, $password));
    }
}
?>