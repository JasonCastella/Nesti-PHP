<!DOCTYPE html>
<html lang="fr">

<head>



  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Nesti</title>

  <!-- Font Awesomme -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css" integrity="sha384-vSIIfh2YWi9wW0r9iZe7RJPrKwp6bG+s9QZMoITbCckVJqGCCRhc+ccxNcdpHuYu" crossorigin="anonymous">
  <!-- Bootstrap -->
  <link href="<?= BASE_URL; ?>/public/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?= BASE_URL; ?>/public/css/style.css" rel="stylesheet">

</head>

<body>
  <?php

  if ($loc != "login") {
    include('./app/view/common/nav.php');
  }
  include('./app/controller/ctrlContent.php');

  ?>

  <!-- Bootstrap core JavaScript -->
  <script src="<?= BASE_URL; ?>/public/vendor/jquery/jquery.min.js"></script>
  <script src="<?= BASE_URL; ?>/public/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>



</body>

</html>