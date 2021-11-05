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
        $data = $vars['id'];
        $qb = new QueryBuilder();
        $user = $qb->getOne('users', $data);
        $posts = $qb->getSelectedData('products', $data);
        var_dump($posts);die;
        Template::template('user', ['user' => $user]);
    }
}