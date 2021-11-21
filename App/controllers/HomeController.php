<?php

namespace App\controllers;

use App\Image;
use App\QueryBuilder;
use App\Template;
use App\User;
use Delight\Auth\Auth;
use League\Plates\Engine;
use Kint\Kint;
use SimpleMail;

class HomeController
{
    public function home()
    {
        $db = new QueryBuilder();
        $categories = $db->getAll('categories');
        $products = $db->getAll('products');
        Template::template('homepage',
        [
            'products' => $products,
            'categories' => $categories
        ]);
    }
}
