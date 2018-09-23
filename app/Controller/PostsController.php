<?php

namespace App\Controller;

use Core\Controller\Controller;

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
        $article = $this->Post->findWithId($_GET['id']);
        $this->render('posts.show', compact('article'));
    }

}