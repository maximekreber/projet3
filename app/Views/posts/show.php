      <div class="row">

        <!-- Post Content Column -->
        <div class="col-lg-8">

          <!-- Title -->
          <h1 class="mt-4"><?= $article->titre; ?></h1>

          <!-- Author -->
          <p class="lead">
            par Jean Forteroche
          </p>

          <hr>

          <!-- Date/Time -->
          <p>Posté le <?= $article->date; ?></p>

          <hr>

          <!-- Preview Image -->
          <img class="rounded" src=".../../../public/img/alaska.jpg" width="900" height="300" alt="image article">

          <hr>

          <!-- Post Content -->
          <p class="lead"><?= $article->contenu; ?></p>

          <hr>
      </div>
  </div>

<?php foreach($comment as $comments): ?>

	<div class="card my-4">
              <h5 class="card-header"><?= $comments->nom;?> a posté un commentaire le <?= $comments->date;?></h5>
              <div class="card-body">
              <?= $comments->contenu; ?>
<p> <?php if ($comments->signale !=0) {
     	?> <a class="btn btn-danger" href="?p=posts.signale&id=<?= $article->id; ?>&comments_id=<?= $comments->id; ?>">Commentaire Signalé</a> <?php

} else {
     	?> <a class="btn btn-primary" href="?p=posts.signale&id=<?= $article->id; ?>&comments_id=<?= $comments->id; ?> ">Signaler le Commentaire</a> <?php
}
 ?></p>

             </div>
          </div>

<?php endforeach; ?>

<p><a class="btn btn-primary" href="?p=posts.addcomment&id=<?= $article->id?>">Ajouter un commentaire</a></p>