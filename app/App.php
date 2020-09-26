<?php
namespace App;

use App\Age;

class App
{
    const DIR = '/age/public/';
    const VIEW_DIR = './../view/';
    const URL = 'http://localhost/age/public/';
    
    private static $params = [];

    public static function start()
    {
        $param = str_replace(self::DIR, '', $_SERVER['REQUEST_URI']);
        self::$params = explode('/', $param);

        if (count(self::$params) == 1) {
            if (self::$params[0] == 'count') {

            }
        }
        if (file_exists(self::VIEW_DIR.self::$params[0].'.php')) {
            require(self::VIEW_DIR.self::$params[0].'.php');
        }
    }

    public static function getUriParams()
    {
        return self::$params;
    }

    public static function redirect($param)
    {
        header('Location: '.self::URL.$param);
        die();
    }

}