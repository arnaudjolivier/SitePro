<?php require_once "config.php"; ?>

<?php
$pointure = htmlspecialchars($_POST['pointure']);
$price = htmlspecialchars($_POST['price']);
$title = htmlspecialchars($_POST['title']);
$user_id = htmlspecialchars($_POST['user_id']);
$id = htmlspecialchars($_POST['id']);
$image = htmlspecialchars($_POST['image']);
$ins = $pdo->prepare('INSERT INTO panier (pointure, price, title, id, image, user_id)
    VALUES (?, ?, ?, ?, ?, ?)');
$ins->execute(array($pointure, $price, $title, $id, $image, $user_id));
header("location:".  $_SERVER['HTTP_REFERER']); 
?>

