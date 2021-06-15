<html>
<link rel="stylesheet" href="./css/pagenouveaute.css" />
<link rel="stylesheet" href="styles/style.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<?php require "components/header.php" ?>
<?php
require_once "components/config.php";
session_start();
$_SESSION;
$iduser = $_SESSION['users']['id'];
$articles = $pdo->query("SELECT * FROM panier WHERE user_id = '$iduser'");
$articles = $articles->fetchAll(PDO::FETCH_ASSOC);
$panier = $pdo->query("SELECT id, title, pointure FROM panier WHERE user_id = '$iduser'");
?>


<body>
    <header>
        <?php require "./components/navbar.php" ?>
    </header>
    <h1>VOTRE PANIER</h1>

    <div class="row">
        <div class="col s12 m4 l2">
        </div>
        <div class="col s12 m4 l6">
            <div class="wrapper">
                <?php foreach ($articles as $article) { ?>
                    <?php if ($article['user_id'] = $iduser) { ?>
                        <div class="productaff">
                            <form method="post" action="components/s_panier.php">
                                <input type='hidden' name="id" value="<?php echo $article['id'] ?>" />
                                <div class="suppr">
                                    Supprimer <input class="btn btn-danger btn-sm" type="submit" value="X"></input>
                                </div>
                            </form>
                            <h2><?= $article['title'] ?></h2>
                            <h3><?= $article['content'] ?></h3>
                            <br>
                            <img src="<?= $article['image'] ?>" width="400" height="250">
                            <br>
                            <h3>Pointure: <?= $article['pointure'] ?></h3>
                            <br>
                            <h3 style="background-color: black;"><?= $article['price'] ?>€</h3>
                        </div>
                    <?php } ?>
                <?php } ?>
            </div>
        </div>
        <div class="col s12 m4 l2">
        </div>
    </div>
    <?php if (empty($article)) { ?>
        <h2>Votre panier est vide</h2>
    <?php } ?>
    <div class="centre">
        <?php if (!empty($article)) { ?>
            <?php if ($article['user_id'] = $iduser) { ?>
                <form method="post" action="components/commandes.php">
                    <input type='hidden' name="articles" value="<?php foreach ($panier as $values) {
                                                                    foreach ($values as $value) {
                                                                        echo "$value" . ' ';
                                                                    }
                                                                } ?>" />
                    <input type='hidden' name="user_id" value="<?php echo $_SESSION['users']['id'] ?>" />
                    <input class="btn btn-outline-light btn-lg" style="text-align: center;" type="submit" value="Commander">
                </form>
            <?php } ?>
        <?php } ?>
    </div>
</body>

</html>