<h1>Administrer les commentaires</h1>


<table class="table">
    <thead>
    <tr>
        <td>ID</td>
        <td>Nom</td>
        <td>Actions</td>
    </tr>
    </thead>
    <tbody>
        <?php foreach($items as $comments): ?>
        <tr>
            <td><?= $comments->id; ?></td>
            <td><?= $comments->nom; ?></td>
            <td>
                <a class="btn btn-primary" href="?p=admin.comments.edit&id=<?= $comments->id; ?>">Editer</a>
                <form action="?p=admin.comments.delete" method="post" style="display: inline;">
                    <input type="hidden" name="id" value="<?= $comments->id ?>">
                    <button type="submit" class="btn btn-danger">Supprimer</button>
                </form>
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>