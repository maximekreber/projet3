<?php

namespace App\Controller\Admin;

use Core\HTML\BootstrapForm;

class CommentsController extends AppController{

    public function __construct(){
        parent::__construct();
        $this->loadModel('Comment');
    }

    public function index(){
        $items = $this->Comment->all();
        $this->render('admin.comments.index', compact('items'));
    }

    public function edit(){
        if (!empty($_POST)) {
            $result = $this->Comment->update($_GET['id'], [
                'nom' => $_POST['nom'],
                'contenu' => $_POST['contenu'],
            ]);
            return $this->index();
        }
        $comment = $this->Comment->find($_GET['id']);
        $form = new BootstrapForm($comment);
        $this->render('admin.comments.edit', compact('form'));
    }

    public function delete(){
        if (!empty($_POST)) {
            $result = $this->Comment->delete($_POST['id']);
            return $this->index();
        }
    }

}