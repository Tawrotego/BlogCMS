<?php defined('RUNACCESS') or die('No direct script access.');
class Url
{
    public static $Controller;
    public static $Action;
    public static $Params;

    public static function init()
    {
        $url = trim($_SERVER['REQUEST_URI'], '/ ');
        $url = Security::checkUrl($url);
        $url = explode('/', $url);
        if (DOCROOT != '/' || empty(DOCROOT)) {
            unset($url[0]);
            $url = array_values($url);
        }
        if (count($url) >= 1) : (self::$Controller = $url[0]); endif;
        if (count($url) >= 2) : (self::$Action = $url[1]); endif;
        if (count($url) >= 3) {
            for ($i = 2; count($url) > $i; ++$i) {
                self::$Params[] = $url[$i];
            }
        }
    }
}