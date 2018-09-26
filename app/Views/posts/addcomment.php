<form method="post">
    <?= $form->input('nom', 'Nom'); ?>
    <?= $form->input('contenu', 'Contenu', ['type' => 'textarea']); ?>
    <input type="hidden" name="articles_id" value="<?= htmlspecialchars($_GET["id"]) ?>">
    <button class="btn btn-primary">Envoyer</button>
</form>