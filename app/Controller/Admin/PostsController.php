<?php

namespace App\Controller\Admin;

use Core\HTML\BootstrapForm;

class PostsController extends AppController{

    public function __construct(){
        parent::__construct();
        $this->loadModel('Post');
    }

    public function index(){
        $posts = $this->Post->all();
        $this->render('admin.posts.index', compact('posts'));
    }

    public function add(){
        if (!empty($_POST['titre']) AND !empty($_POST['image']) AND !empty($_POST['contenu']) AND isset($_POST['titre']) AND isset($_POST['image']) AND isset($_POST['contenu']) AND !ctype_space($_POST['titre']) AND !ctype_space($_POST['image']) AND !ctype_space($_POST['contenu'])) {
            $result = $this->Post->create([
                'titre' => $_POST['titre'],
                'contenu' => $_POST['contenu'],
                'image' => $_POST['image'],
            ]);
            if($result){
                return $this->index();
            }
        }
        $this->loadModel('Post');
        $posts = $this->Post->extract('id', 'titre');
        $form = new BootstrapForm();
        $this->render('admin.posts.edit', compact('posts', 'form'));
    }

    public function edit(){
        if (!empty($_POST)) {
            $result = $this->Post->update($_GET['id'], [
                'titre' => $_POST['titre'],
                'contenu' => $_POST['contenu'],
                'image' => $_POST['image'],
            ]);
            if($result){
                return $this->index();
            }
        }
        $post = $this->Post->find($_GET['id']);
        $this->loadModel('Post');
        $posts = $this->Post->extract('id', 'titre');
        $form = new BootstrapForm($post);
        $this->render('admin.posts.edit', compact('posts', 'form'));
    }

    public function delete(){
        if (!empty($_POST)) {
            $result = $this->Post->delete($_POST['id']);
            return $this->index();
        }
    }

}