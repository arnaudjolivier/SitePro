<?php

if ((isset($_POST['id']) and !empty($_POST['id']))) { //Modify articles
  $produit_id = ($_POST['id']);
  $n_titre = ($_POST['n_titre']);
  $n_description = ($_POST['n_description']);
  $n_image = ($_POST['n_image']);
  $n_prix = ($_POST['n_prix']);
  $n_marque = ($_POST['n_marque']);

  $mod = $pdo->prepare("UPDATE products 
    set title = '$n_titre' , content = '$n_description', image = '$n_image', price = '$n_prix', brand = '$n_marque'
    where id = '$produit_id'");
  $mod->execute();
}
?>