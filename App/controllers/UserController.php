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
        $user = $qb->getOne('users', $vars['id'],
        [
            'id',
            'email',
            'username',
            'image'
        ]);
        Template::template('user', ['user' => $user]);
    }
}