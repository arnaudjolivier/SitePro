<?php
if (isset($_POST['titre'], $_POST['description'], $_POST['image'], $_POST['prix'], $_POST['marque'])) {
    if (!empty($_POST['titre']) and !empty($_POST['description']) and !empty($_POST['image']) and !empty($_POST['prix']) and !empty($_POST['marque'])) {
        $titre = htmlspecialchars($_POST['titre']);
        $description = htmlspecialchars($_POST['description']);
        $image = htmlspecialchars($_POST['image']);
        $prix = htmlspecialchars($_POST['prix']);
        $marque = htmlspecialchars($_POST['marque']);
        


        $ins = $pdo->prepare('INSERT INTO products (title, content, image, price, brand)
        VALUES (?, ?, ?, ?, ?)');
        $ins->execute(array($titre, $description, $image, $prix, $marque));
    }
}
?>