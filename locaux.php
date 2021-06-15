<html>
<link rel="stylesheet" href="css/locaux.css" />
<?php require "./components/header.php" ?>
<?php session_start(); ?>
<header>
  <?php require "components/navbar.php" ?>
</header>
<body>
  <h1>NOS LOCAUX À LYON</h1>
  <section>
    <article>
      <h4>SITUÉ AU COEUR DE LYON, VENEZ DECOUVRIR LA BOUTIQUE <span>RUNNING LYON</span> ! </h4>
    </article>
    <aside>
      <div class="row">
        <div class="col s12 m4 l2">
        </div>
        <div class="col s12 m4 l8">
          <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
          <style type="text/css">
            #map {
              height: 500px;
              width: 800px;
            }

            html,
            body {
              height: 100%;
              margin: 0;
              padding: 0;
            }
          </style>
          <script>
            let map;

            function initMap() {
              map = new google.maps.Map(document.getElementById("map"), {
                center: {
                  lat: 45.764043,
                  lng: 4.835659
                },
                zoom: 14,
              });
            }
          </script>
          <div id="map"></div>
          <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBbJNk9CUT3hDMDPm8WRZmISLdYGpqt11o&callback=initMap&libraries=&v=weekly" async></script>
        </div>
        <div class="col s12 m4 l2">
        </div>
    </aside>
  </section>
  <div class="images_locaux">
    <h4>Découvrez un large choix de sneakers tendances à des prix très raisonnables !</h4>
    <img src="images/Sneakers2.jpg" style="width: 500px;" alt="">
    <img src="images/Sneakers1.jpg" style="width: 500px; margin-left: 20px;" alt="">
  </div>

  <?php require "components/footer.php" ?>
</body>

</html>