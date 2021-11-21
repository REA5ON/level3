<?php

namespace App\controllers;

use App\Redirect;
use App\User;

class LogoutController
{
    public function logout()
    {
        $user = new User();
        $user->logout();
        Redirect::to("");
    }
}