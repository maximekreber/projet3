<h1>Administrer les commentaires</h1>
<p>
    <a href="?p=admin.posts.index" class="btn btn-success">Administrer les articles</a>
</p>

<table class="table">
    <thead>
    <tr>
        <td>ID</td>
        <td class="d-none d-sm-block">Article ID</td>
        <td>Nom</td>
        <td>Actions</td>
    </tr>
    </thead>
    <tbody>
        <?php foreach($items as $comments): ?>
       <?php if($comments->signale !=0 ) { ?> <tr class="signale"> <?php } else { ?> <tr> <?php } ?>
            <td><?= $comments->id; ?></td>
            <td class="d-none d-sm-block"><?= $comments->articles_id; ?></td>
          <td><?= $comments->nom; ?></td> 
            <td>
                <a class="btn btn-primary" href="?p=admin.comments.edit&id=<?= $comments->id; ?>">Editer</a>
                <form action="?p=admin.comments.delete" method="post" style="display: inline;">
                    <input type="hidden" name="id" value="<?= $comments->id ?>">
                    <button type="submit" class="btn btn-danger">Supprimer</button>
                </form>
                <?php 
                if($comments->signale !=0 ){ ?>
                <form action="?p=admin.comments.signale" method="post" style="display: inline;">
                    <input type="hidden" name="id" value="<?= $comments->id ?>">
                    <button type="submit" class="btn btn-primary">Enlever le signalement</button>
                </form> <?php } ?>
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>