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
    <script>tinymce.init({ selector:'textarea', 
  language : "fr_FR"});</script>

    <title><?= App::getInstance()->title; ?></title>

    <!-- Bootstrap core CSS -->
    <link href=".../../../vendors/Bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href=".../../../public/css/style.css" rel="stylesheet">

</head>
            
<body>

<nav class="navbar navbar-expand-lg bg-menu">
  <a class="navbar-brand text-menu" href="index.php">Blog de Jean Forteroche</a>
  <div class="collapse navbar-collapse" id="navbarResponsive">
    <div class="navbar-nav">
      <a class="nav-item nav-link active text-menu" href="index.php">Accueil</a>
    </div>
  </div>
</nav>
<div class="container">

    <div style="padding-top: 30px;">
        <?= $content; ?>
    </div>

</div>    <!-- /.container -->

</body>

    <footer class="footer py-3 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Jean Forteroche
        </br>
        <a class="text-white" href="index.php?p=users.login">Accès au panel d'administration</a></p>
      </div>
    </footer>

</html>
