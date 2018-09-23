<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title><?= App::getInstance()->title; ?></title>

    <!-- Bootstrap core CSS -->
    <link href=".../../../vendors/Bootstrap/css/bootstrap.min.css" rel="stylesheet">

</head>
            
<body>

<nav class="navbar navbar-expand-lg bg-primary">
  <a class="navbar-brand text-success" href="index.php">Accueil</a>
  <div class="collapse navbar-collapse" id="navbarResponsive">
    <div class="navbar-nav text-success">
      <a class="nav-item nav-link active" href="index.php?p=users.login">Login</a>
    </div>
  </div>
</nav>
<div class="container">

    <div class="starter-template" style="padding-top: 100px;">
        <?= $content; ?>
    </div>

</div><!-- /.container -->


</body>
</html>
