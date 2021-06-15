<?php
    if ((isset($_POST['delete_id']) and !empty($_POST['delete_id']))) { //Delete articles
      $delete_id = ($_POST['delete_id']);
    
      $sup = $pdo->prepare("DELETE FROM products WHERE id = '$delete_id'");
      $sup->execute();
    }
?>