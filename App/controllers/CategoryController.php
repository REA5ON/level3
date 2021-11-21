<?php


namespace App\controllers;


use App\QueryBuilder;
use App\Template;
use League\Plates\Engine;

class CategoryController
{
    public function getCategory($vars) {
        $qb = new QueryBuilder();
        $categories = $qb->getAll('categories');
        $products = $qb->getSelectedData('products', $vars['category_id'], 'category_id');
        Template::template('category',[
            'products' => $products,
            'categories' => $categories
        ]);
    }
}