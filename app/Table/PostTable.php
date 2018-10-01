<?php
namespace App\Table;

use Core\Table\Table;

class PostTable extends Table{

    protected $table = 'articles';

    /**
     * Récupère les derniers article
     * @return array
     */
    public function last(){
        return $this->query("
            SELECT articles.id, articles.titre, articles.contenu, articles.date
            FROM articles
            ORDER BY articles.date DESC");
    }
    
    /**
     * Récupère un article en liant l'id associée
     * @param $id int
     * @return \App\Entity\PostEntity
     */
    public function findWithId($id){
        return $this->query("
            SELECT articles.id, articles.titre, articles.contenu, articles.date
            FROM articles
            WHERE articles.id = ?", [$id], true);
    }

}