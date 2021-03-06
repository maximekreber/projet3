<?php

namespace App\Controller;

use Core\Controller\Controller;
use Core\HTML\BootstrapForm;

class PostsController extends AppController{

    public function __construct(){
        parent::__construct();
        $this->loadModel('Post');

    }

    public function index(){
        $posts = $this->Post->last();
        $this->render('posts.index', compact('posts'));
    }
   
    public function show(){
        $this->loadModel('Comment');
        $article = $this->Post->findWithId($_GET['id']);
        $comment = $this->Comment->Comments($_GET['id']);
        $this->render('posts.show', compact('article', 'comment'));
    }

     public function addcomment(){
        if (!empty($_POST['nom']) AND !empty($_POST['contenu']) AND isset($_POST['nom']) AND isset($_POST['contenu']) AND !ctype_space($_POST['nom']) AND !ctype_space($_POST['contenu'])) {
            $this->loadModel('Comment');
            $result = $this->Comment->create([
                'articles_id' => $_POST['articles_id'],
                'nom' => $_POST['nom'],
                'contenu' => $_POST['contenu'],
            ]);
                     if($result){
                return $this->show();
            }
        }
        $this->loadModel('Comment');
        $posts = $this->Comment->extract('articles_id', 'nom', 'contenu');
        $form = new BootstrapForm();
        $this->render('posts.addcomment', compact('posts', 'form'));
    }

     public function signale(){
            $this->loadModel('Comment');
            $this->Comment->update($_GET['comments_id'], [
                'signale' =>  1,
            ]);
                
            return $this->show();
        }
    

}