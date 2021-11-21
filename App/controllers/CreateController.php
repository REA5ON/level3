<?php


namespace App\controllers;
session_start();

use App\QueryBuilder;
use App\Redirect;
use App\Template;
use League\Plates\Engine;
use App\Image;


class CreateController
{
    public function template() {
        Template::template('create');
    }

    public function create() {
        $qb = new QueryBuilder();
        $image = new Image();

        $image->uploadImage('../App/images/emptyImageProduct.png', 'products');
        $qb->insert('products', $_POST);
        Redirect::to('');
    }
}