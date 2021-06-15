<?php require_once "config.php"; ?>

<?php
$articles = htmlspecialchars($_POST['articles']);
$user_id = htmlspecialchars($_POST['user_id']);

$ins = $pdo->prepare('INSERT INTO commandes (products, user_id)
    VALUES (?, ?)');
$ins->execute(array($articles, $user_id));

$suppr = $pdo->query("DELETE FROM panier WHERE user_id = '$user_id'");
$suppr->execute();

header("location:".  $_SERVER['HTTP_REFERER']); 
?>
