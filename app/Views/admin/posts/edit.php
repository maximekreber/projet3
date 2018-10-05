<form method="post">
    <?= $form->input('titre', 'Tire de l\'article'); ?>
    <?= $form->input('image', 'Url de l\'image'); ?>
    <?= $form->input('contenu', 'Contenu', ['type' => 'textarea']); ?>
    <button class="btn btn-primary">Sauvegarder</button>
</form>