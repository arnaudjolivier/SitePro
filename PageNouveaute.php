<?php
require_once "components/config.php";
session_start();
$_SESSION;
$articles = $pdo->query('SELECT * FROM products ORDER BY id DESC LIMIT 6');
$articles = $articles->fetchAll(PDO::FETCH_ASSOC);
?>

<html>
<?php require "components/header.php" ?>
<?php require "./components/navbar.php" ?>
<body>
 
  <h1>NOUVEAU CHEZ <span>RUNNING LYON</span> !</h1>
  <div class="row">
    <div class="col s12 m4 l2">
    </div>
    <div class="col s12 m4 l8">
      <div class="wrapper">
        <?php foreach ($articles as $article) { ?>
          <div class="productaff">
            <h2><?= $article['title'] ?></h2>
            <h3><?= $article['content'] ?></h3>
            <br>
            <img src="<?= $article['image'] ?>" width="400" height="250">
            <br>
            <h3 style="background-color: black;"><?= $article['price'] ?>€</h3>
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
        <?php } ?>
      </div>
    </div>
    <div class="col s12 m4 l2">
    </div>
  </div>
  </div>
  <?php require "components/footer.php" ?>
</body>

</html>