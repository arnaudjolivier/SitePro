<?php
require_once "config.php";
$sql = "SELECT * FROM users WHERE email='" . $_POST['email'] . "' AND password='" . $_POST['password'] . "'";
$pre = $pdo->prepare($sql);
$pre->execute();
$users = current($pre->fetchAll(PDO::FETCH_ASSOC));
if (empty($users)) {
    echo "Utilisateur ou mot de passe incorrect !";
} else {
    session_start();
    $_SESSION['users'] = $users;
    header('Location: ../pageconnexion.php');
}
?>