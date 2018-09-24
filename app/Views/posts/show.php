<h1><?= $article->titre; ?></h1>

<p><?= $article->contenu; ?></p>

<?php foreach($comment as $comments): ?>
<p><?= $comments->nom; ?></p>

<p><?= $comments->contenu; ?></p>

<?php endforeach; ?>