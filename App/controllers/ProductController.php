<?php
namespace App\controllers;
// Start a Session
use App\QueryBuilder;
use App\Template;
use League\Plates\Engine;

if( !session_id() ) @session_start();

class ProductController {
    public function getProduct($vars) {
        $qb = new QueryBuilder();
        $product = $qb->getOne('products', $vars['id']);
        Template::template('productpage', ['product' => $product]);
    }
}
