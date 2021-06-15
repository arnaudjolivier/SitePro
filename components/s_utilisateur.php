<?php
  if (isset($_GET['supprime']) and !empty($_GET['supprime'])) {
    $supprime = (int) $_GET['supprime'];

    $req = $pdo->prepare('DELETE FROM users WHERE id=?');
    $req->execute(array($supprime));
  }

  $user = $pdo->query('SELECT * FROM users ORDER BY id ASC');
?>