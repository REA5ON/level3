<?php
namespace App;

class Redirect
{
    public static function to($location) {
        header('Location:/' . $location);
        exit;
    }
}