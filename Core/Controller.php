<?php defined('RUNACCESS') or die('No direct script access.');
class Controller
{
    public static function init(){
        if (!empty(Url::$Controller)) {
            $name = mb_strtolower(Url::$Controller);
            $name = ucfirst($name);
            $cl = self::load($name);
            if ($cl != null) {
                $cl->init();
                return;
            }
        }
        self::load('Index')->init();
    }
    public static function load($name)
    {
        if (Security::checkClassName($name)) {
            if (file_exists(APPCONTROLLERS . $name . EXT)) {
                include APPCONTROLLERS . $name . EXT;
                $class = "{$name}_Controller";
                return new $class;
            }
        }
        return false;
    }
}