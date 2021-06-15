<?php

require_once "components/config.php";
require "components/m_produit.php";
require "components/m_utilisateur.php";
require "components/a_produit.php";
require "components/a_utilisateur.php";
require "components/s_produit.php";
require "components/s_utilisateur.php";
$sql = "SELECT * FROM products";
$pre = $pdo->prepare($sql);
$pre->execute();
$texte = $pre->fetchAll();
session_start();

?>


<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="style3.css" />
  <title>Admin</title>
</head>

<header>
  <nav>
    <ul>
      <li><a href="index.php" target="_self">Retour Accueil</a></li>
    </ul>
  </nav>
</header>

<body id="PageInscription">

  <hr>
  <h2>Modifier Utilisateur:</h2>
  <form method="POST">
    <input type="number" name="user_id" placeholder="Id Utilisateur">
    <input type="text" name="nu_name" placeholder="Nom">
    <input type="email" name="nu_email" placeholder="Email">
    <input type="text" name="nu_password" placeholder="Mot de passe">
    <input type="submit" value="Update">
  </form>


  <hr>
  <h2>Ajouter Utilisateur:</h2>
  <form method="POST">
    <input type="text" name="name" placeholder="Nom">
    <input type="email" name="email" placeholder="Email">
    <input type="text" name="password" placeholder="Mot de passe">
    <input type="submit" value="Update">
  </form>

  <hr>
  <h2>Supprimer Utilisateur</h2>
  <form method="POST">
    <input type="number" name="du_id" placeholder="Id Utilisateur">
    <input type="submit" value="Supprimer">
  </form>



















  <hr>
  <h2>Modifier Produit:</h2>
  <form method="POST">
    <input type="number" name="id" placeholder="Id du produit">
    <input type="text" name="n_titre" placeholder="Nouveau titre">
    <input type="text" name="n_description" placeholder="Nouveau description">
    <input type="text" name="n_image" placeholder="Nouveau Image">
    <input type="text" name="n_prix" placeholder="Nouveau prix">
    <input type="text" name="n_marque" placeholder="Nouveau marque">
    <input type="submit" value="Update">
  </form>

  <hr>
  <h2>Ajouter Produit:</h2>
  <form method="POST">
    <input type="text" name="titre" placeholder="Titre">
    <input type="text" name="description" placeholder="Description">
    <input type="text" name="image" placeholder="Image">
    <input type="text" name="prix" placeholder="Prix">
    <input type="text" name="marque" placeholder="Marque">
    <input type="submit" value="Update">
  </form>

  <hr>
  <h2>Supprimer Produit</h2>
  <form method="POST">
    <input type="number" name="delete_id" placeholder="Id du produit">
    <input type="submit" value="Supprimer">
  </form>

</body>

</html>