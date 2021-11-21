<?php

namespace App\controllers;
// Start a Session
if( !session_id() ) @session_start();

use App\Image;
use App\QueryBuilder;
use App\Redirect;
use App\User;
use League\Plates\Engine;


class RegistrationController {
    public function template() {
        // Create new Plates instance
        $templates = new Engine('../app/views');

        echo $templates->render('registration');
    }

    public function registr() {
        $login = new User();
        $image = new Image();
        $qb = new QueryBuilder();

        $id = $login->registration($_POST['email'], $_POST['password'], $_POST['username']);
        $avatar = $image->uploadImage('..\App\images\emptyImageUser.png', 'users');
        $qb->update('users', ['image' => $avatar], $id);
        Redirect::to('login');
    }
}
