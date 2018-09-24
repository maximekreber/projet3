<?php
namespace App\Table;

use Core\Table\Table;

class CommentTable extends Table{

    protected $table = "comments";

      /**
     * Récupère les derniers commentaire de l'article demandé demandée
     * @param $article_id int
     * @return array
     */
    public function Comments($id){
        return $this->query("
            SELECT comments.id, comments.nom, comments.contenu, comments.date, articles.id as articles
            FROM comments
            LEFT JOIN articles ON articles_id = articles.id
            WHERE comments.articles_id = ?
            ORDER BY comments.date DESC", [$id]);
    }

}