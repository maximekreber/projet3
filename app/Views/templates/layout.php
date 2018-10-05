<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <script src=".../../../vendors/Tinymce/tinymce.min.js"></script>
    <script>tinymce.init({ selector:'textarea' });</script>

    <title><?= App::getInstance()->title; ?></title>

    <!-- Bootstrap core CSS -->
    <link href=".../../../vendors/Bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href=".../../../public/css/style.css" rel="stylesheet">

</head>
            
<body>

<nav class="navbar navbar-expand-lg bg-menu">
  <a class="navbar-brand text-success" href="index.php">Accueil</a>
  <div class="collapse navbar-collapse" id="navbarResponsive">
    <div class="navbar-nav text-success">
      <a class="nav-item nav-link active text-success" href="index.php?p=users.login">Login</a>
    </div>
  </div>
</nav>
<div class="container">

    <div class="" style="padding-top: 100px;">
        <?= $content; ?>
    </div>

</div><!-- /.container -->

    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Blog d'écrivain 2018</p>
      </div>
    </footer>
</body>
</html>
