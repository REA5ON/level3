<?php
namespace App\controllers;

if( !session_id() ) @session_start();

use App\User;
use Delight\Auth\Auth;
use League\Plates\Engine;
use PDO;

class LoginController
{

    public function template() {
        $templates = new Engine('../App/views');
        echo $templates->render('login', ['name' => 'Jonathan']);
    }

    public function login() {
        $login = new User();
        $login->login($_POST['email'], $_POST['password']);
    }
}