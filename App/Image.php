<?php


namespace App;


use Exception;
use \claviska\SimpleImage;

class Image
{
    private $image;

    public function __construct() {
        $this->image = new SimpleImage();
    }

    //Если не указываю ID то ?????
    public function uploadImage($from, $to, $id = null) {
        try {
            $newName = uniqid();
            $path = __DIR__ . '/images/' . $to . '/' . $newName .'.png';

            $this->image
                ->fromFile($from)
                ->toFile($path,'image/png');

            return $_POST['image'] = '/images/' . $to . '/' . $newName .'.png';

        } catch (Exception $err) {
            // Handle errors
            echo $err->getMessage();
        }

    }

    public function deleteImage($table, $id)
    {
        if (isset($id)) {
            $qb = new QueryBuilder();
            $img = $qb->getOne($table, $id);
            unlink(__DIR__ . $img['image']);
        }
    }
}