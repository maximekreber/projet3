<?php foreach ($posts as $post): ?>
<div class="card mb-4">
	<img class="card-img-top imagesarticles" src=".../../../public/img/alaska.jpg" alt="image article">
    	<div class="card-body">
     		<h2 class="card-title"><?= $post->titre; ?></h2>
              	<p class="card-text"><?= $post->extrait; ?></p>
            </div>
            <div class="card-footer text-muted">
              Posté le <?= $post->date; ?> par Jean Forteroche
              
            </div>
          </div>

           <?php endforeach; ?>