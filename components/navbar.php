<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="../css/navbar.css" />
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<body>
  <nav class="navbar navbar-dark">

    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse ">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarCollapse">
      <div class="navbar-nav">
        <li><a href="index.php"><img src="images/logo.png" style="width: 70px;"></a></li>
        <li><a href="PageNouveaute.php" target="_self">NOUVEAUTÉES</a></li>
        <li><a href="ancienne_collection.php" target="_self">ANCIENNES COLLECTIONS</a></li>
        <li><a href="locaux.php" target="_self">NOS LOCAUX</a></li>
      </div>
      <div class="navbar-nav ml-auto">
        <?php if (empty($_SESSION['users']['name'])) { ?>
          <li><a href="pageconnexion.php" target="_self">CONNEXION</a></li>
        <?php } else { ?>
          <li><a href="components/deconnexion.php">SE DÉCONNECTER</a></li>
          <li><a href="panier.php">PANIER</a></li>
        <?php } ?>
      </div>
    </div>
  </nav>
  </div>
</body>

</html>