<?php session_start(); ?>
<!DOCTYPE html>
<html>

<?php require "components/header.php" ?>

<body>
  <!-- -------------------------------------------------------------NAVBAR-----------------------------------------------------------  -->
  <?php require "./components/navbar.php" ?>
  <!-- -------------------------------------------------------------CONNECTION-----------------------------------------------------------  -->
  <?php
  require_once "components/config.php";
  $_SESSION;
  $products = $pdo->query('SELECT * FROM products ORDER BY id DESC LIMIT 10 OFFSET 6');
  $products = $products->fetchAll(PDO::FETCH_ASSOC);
  ?>
  <!-- -------------------------------------------------------------TITRE-----------------------------------------------------------  -->
  <h1 style="text-align: center">
    LES ANCIENNES COLLECTIONS
  </h1>
  <!-- -------------------------------------------------------------CONTENT-----------------------------------------------------------  -->

  <div class="row">
    <div class="col s12 m4 l2">
    </div>
    <div class="col s12 m4 l8">
      <div class="wrapper">
        <?php foreach ($products as $product) { ?>
          <div class="productaff">
            <h2><?= $product['title'] ?></h2>
            <h3><?= $product['content'] ?></h3>
            <br>
            <img src="<?= $product['image'] ?>" width="400" height="250">
            <br>
            <h3 style="background-color: black;"><?= $product['price'] ?>€</h3>
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
                <input type='hidden' name="id" value="<?php echo $product['id'] ?>" />
                <input type='hidden' name="user_id" value="<?php echo $_SESSION['users']['id'] ?>" />
                <input type='hidden' name="title" value="<?php echo $product['title'] ?>" />
                <input type='hidden' name="price" value="<?php echo $product['price'] ?>" />
                <input type='hidden' name="image" value="<?php echo $product['image'] ?>" />
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

  <!-- -------------------------------------------------------------FOOTER-----------------------------------------------------------  -->

  <?php require "components/footer.php" ?>
</body>

</html>