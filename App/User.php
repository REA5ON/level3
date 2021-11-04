<?php


namespace App;

use \Delight\Auth\Auth;
use PDO;

class User
{
    private $pdo, $auth;

    public function __construct()
    {
        $this->pdo = new PDO('mysql:host=localhost;dbname=app3', 'root', 'root');
        $this->auth = new Auth($this->pdo);
    }

    public function registration($email, $password, $username)
    {
        try {
            $userId = $this->auth->register($email, $password, $username, function ($selector, $token) {
//                echo 'Send ' . $selector . ' and ' . $token . ' to the user (e.g. via email)';
                flash()->success("Registration complete");
                Redirect::to('login');
            });
//            echo 'We have signed up a new user with the ID ' . $userId;
        }
        catch (\Delight\Auth\InvalidEmailException $e) {
            flash()->error('Invalid email address');
            Redirect::to('registration');
        }
        catch (\Delight\Auth\InvalidPasswordException $e) {
            flash()->error('Invalid password');
            Redirect::to('registration');
        }
        catch (\Delight\Auth\UserAlreadyExistsException $e) {
            flash()->error('User already exists');
            Redirect::to('registration');
        }
        catch (\Delight\Auth\TooManyRequestsException $e) {
            flash()->error('Too many requests');
            Redirect::to('registration');
        }
    }

    public function login($email, $password) {
        try {
            $this->auth->login($email, $password);
            flash()->success('User is logged in');
            Redirect::to('/');
        }
        catch (\Delight\Auth\InvalidEmailException $e) {
            flash()->error('Wrong email address');
            Redirect::to('login');
        }
        catch (\Delight\Auth\InvalidPasswordException $e) {
            flash()->error('Wrong password');
            Redirect::to('login');
        }
        catch (\Delight\Auth\EmailNotVerifiedException $e) {
            flash()->error('Email not verified');
            Redirect::to('login');
        }
        catch (\Delight\Auth\TooManyRequestsException $e) {
            flash()->error('Too many requests');
            Redirect::to('login');
        }
    }
}