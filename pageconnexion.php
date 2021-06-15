<html>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<?php require "./components/header.php" ?>
<?php require "./components/inscription.php" ?>
<link rel="stylesheet" href="css/style.css" />
<?php session_start(); ?>

<header>
  <?php require "./components/navbar.php" ?>
</header>

<body>
  <h1>ESPACE DE CONNEXION</h1>
  <br><br>
  <div class="Row">
    <div class="col l4">
    </div>

    <?php if (empty($_SESSION['users']['name'])) { ?>
      <div class="col l6">
        <form method="POST" class="formulaire" action="./components/connexion.php">
          <div class="form-group mx-sm-3 mb-2">
            <input type="text" class="form-control" name="email" placeholder="Email">
          </div>
          <div class="form-group mx-sm-3 mb-2">
            <input type="password" class="form-control" name="password" placeholder="Mot de passe">
          </div>
          <div class="form-group mx-sm-3 mb-2">
            <button type="submit" class="btn btn-primary">Se Connecter</button>
          </div>
        </form>

        <h2>S'inscrire</h2>
        <form method="POST" class="formulaire" action="./components/inscription.php">
          <div class="form-group mx-sm-3 mb-2">
            <input type="text" class="form-control" name="name" placeholder="Nom">
          </div>
          <div class="form-group mx-sm-3 mb-2">
            <input type="text" class="form-control" name="email" placeholder="Email">
          </div>
          <div class="form-group mx-sm-3 mb-2">
            <input type="password" class="form-control" name="password" placeholder="Mot de passe">
          </div>
          <div class="form-group mx-sm-3 mb-2">
            <button type="submit" class="btn btn-primary">S'Inscrire</button>
          </div>
        </form>
      </div>
    <?php } else {header('Location:index.php'); } ?>
    <div class="col s12 m4 l2">
    </div>
  </div>
  </div>
  </div>
</body>
</html>