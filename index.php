<?php
require_once "components/config.php";
session_start();
$_SESSION;
$articles = $pdo->query('SELECT * FROM products ORDER BY id DESC LIMIT 1');
$articles = $articles->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<link rel="stylesheet" href="css/style.css" />
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<html>

<?php require "components/header.php" ?>

<body>
    <!-- -------------------------------------------------------------NAVBAR-----------------------------------------------------------  -->
    <?php require "components/navbar.php" ?>
    <!-- -------------------------------------------------------------LOGO-----------------------------------------------------------  -->
    <header>
        <h1>
            BIENVENUE SUR <span> RUNNING LYON !</span>
        </h1>
        <h4>SITE DE VENTE DE SNEAKERS EN LIGNE</h4>
    </header>
    <!-- -------------------------------------------------------------CONNECTION-----------------------------------------------------------  -->
    <!-- -------------------------------------------------------------TITRE-----------------------------------------------------------  -->
    <!-- -------------------------------------------------------------PUB-----------------------------------------------------------  -->

    <!-- -------------------------------------------------------------CONTENT-----------------------------------------------------------  -->

    <div style="width: 75%; padding-left:25%">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" data-interval="3000" data-pause="false">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="images/FalconAdidas.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="images/Sneakers1.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="images/nikesneakers.jpg" class="d-block w-100" alt="...">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
    <br>
    <h2 style="text-align: center">
        DERNIER ARTICLE AJOUTÉ
    </h2>
    <?php foreach ($articles as $article) { ?>

        <div class="row">
            <div class="col s12 m4 l2">
            </div>
            <div class="col s12 m4 l8">
                <p>
                <div class="productaff">
                    <h2><?= $article['title'] ?></h2>
                    <h3><?= $article['content'] ?></h3>
                    <br>
                    <img src="<?= $article['image'] ?>" width=500px>
                    <br>
                    <h3><?= $article['price'] ?>€</h3>
                    <?php if (empty($_SESSION['users']['name'])) { ?>
                        <input class="btn btn-secondary" type="submit" value="Connectez-vous pour ajouter au panier" disabled>
                    <?php } else { ?>
                        <form method="post" action="components/envoie.php">
                            Pointure 
                            <select name="pointure">
                                <option value="38">38</option>
                                <option value="39">39</option>
                                <option value="40">40</option>
                                <option value="41">41</option>
                                <option value="42">42</option>
                                <option value="43">43</option>
                                <option value="44">44</option>
                                <option value="45">45</option>
                                <option value="46">46</option>
                            </select>
                            <input type='hidden' name="id" value="<?php echo $article['id'] ?>" />
                            <input type='hidden' name="user_id" value="<?php echo $_SESSION['users']['id'] ?>" />
                            <input type='hidden' name="title" value="<?php echo $article['title'] ?>" />
                            <input type='hidden' name="price" value="<?php echo $article['price'] ?>" />
                            <input type='hidden' name="image" value="<?php echo $article['image'] ?>" />
                            <input class="btn btn-outline-light" type="submit" value="Ajouter au panier">
                        </form>
                    <?php } ?>
                </div>
                </p>
            </div>
            <div class="col s12 m4 l2">
            </div>
        </div>
    <?php } ?>
    <!-- -------------------------------------------------------------FOOTER-----------------------------------------------------------  -->

    <?php require "components/footer.php" ?>


</body>

</html>