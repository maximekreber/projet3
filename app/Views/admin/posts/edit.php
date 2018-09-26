<form method="post">
    <?= $form->input('titre', 'Tire de l\'article'); ?>
    <?= $form->input('contenu', 'Contenu', ['type' => 'textarea']); ?>
    <input type="hidden" name="id" value="<?= $comments->id ?>">
    <button class="btn btn-primary">Sauvegarder</button>
</form>