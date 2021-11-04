<?php


namespace App\controllers;


use App\QueryBuilder;
use League\Plates\Engine;

class CategoryController
{
    public function getCategory($vars) {
        $category = $vars['category_id'];
        $qb = new QueryBuilder();
        $categories = $qb->getAll('categories');
        $products = $qb->getSelectedData('products', $category);
        $templates = new Engine('../App/views');
        echo $templates->render('category',
            [
                'products' => $products,
                'categories' => $categories
            ]);
    }
}