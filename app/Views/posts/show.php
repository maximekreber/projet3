<h1><?= $article->titre; ?></h1>

<p><?= $article->contenu; ?></p>

<p><?= $article->date; ?></p>

<?php foreach($comment as $comments): ?>
<p>Nom : <?= $comments->nom; ?></p>

<p>Contenu : <?= $comments->contenu; ?></p>

<p>Date : <?= $comments->date; ?> </p>

<p> <?php if ($comments->signale !=0) {
     	?> <a class="btn btn-danger" href="?p=posts.signale&id=<?= $article->id; ?>&comments_id=<?= $comments->id; ?>">Commentaire Signalé</a> <?php

} else {
     	?> <a class="btn btn-primary" href="?p=posts.signale&id=<?= $article->id; ?>&comments_id=<?= $comments->id; ?> ">Signaler le Commentaire</a> <?php
}
 ?></p>

<?php endforeach; ?>

<p><a class="btn btn-primary" href="?p=posts.addcomment&id=<?= $article->id?>">Ajouter un commentaire</a></p>