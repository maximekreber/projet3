<div class="row">
    <div class="col-sm-8">
        <?php foreach ($posts as $post): ?>

            <h2><a href="<?= $post->url ?>"><?= $post->titre; ?></a></h2>

            <p><?= $post->date; ?></p>

            <p><?= $post->extrait; ?></p>

        <?php endforeach; ?>

    </div>

</div>