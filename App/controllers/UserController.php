<?php

namespace App\controllers;

use App\QueryBuilder;
use App\Template;

// Start a Session
if( !session_id() ) @session_start();

class UserController
{
    public function getUser($vars)
    {
        $qb = new QueryBuilder();
        $user = $qb->getOne('users', $vars['id']);
        $products = $qb->getSelectedData('products', $vars['id'], 'created_id');
        Template::template('user', [
            'user' => $user,
            'products' => $products
            ]);
    }
}