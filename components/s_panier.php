<?php require_once "config.php"; ?>
<?php
    $delete_panier = ($_POST['id']);

    $sup = $pdo->prepare("DELETE FROM panier WHERE id = '$delete_panier'");
    $sup->execute();
    header('Location: ../panier.php');
?>