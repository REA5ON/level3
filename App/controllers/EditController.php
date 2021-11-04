<?php


namespace App\controllers;


use App\Image;
use App\QueryBuilder;
use App\Redirect;
use App\Template;
use League\Plates\Engine;

class EditController
{

    public function template($vars) {
        $qb = new QueryBuilder();
        $product = $qb->getOne('products', $vars['id']);
        Template::template('edit_product', ['product' => $product]);
    }

    public function edit() {
        $qb = new QueryBuilder();
        $image = new Image();
        $image->updateImage($_FILES['image']['tmp_name'], 'products', $_POST['id']);
        $qb->update('products', $_POST, $_POST['id']);
        Redirect::to('');
    }
}