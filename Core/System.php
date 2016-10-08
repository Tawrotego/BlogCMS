<?php defined('RUNACCESS') or die('No direct script access.');
class System
{
    private function __construct()
    {
    }

    public static function init()
    {
        spl_autoload_register(['System', 'AutoLoad']);
        Url::init();
        View::getInstance()->init();
        Controller::init();
        View::getInstance()->view();
    }

    public static function searchFile($folderName, $fileName)
    {
        $dir = opendir($folderName);
        $res = null;
        while (($file = readdir($dir)) !== false) {
            if ($file != "." && $file != "..") {
                if (is_file($folderName . "/" . $file)) {
                    if ($file == $fileName) {
                        return $res = $folderName . "/" . $file;
                    }
                } else {
                    if (is_dir($folderName . "/" . $file)) {
                        $res = self::searchFile($folderName . "/" . $file, $fileName);
                    }
                }
            }
        }
        closedir($dir);
        return $res;
    }

    public static function AutoLoad($ClassName)
    {
        $fileName = ltrim($ClassName, '\\') . EXT;
        if ($ff = self::searchFile(CORE, $fileName)) {
            require $ff;
            return true;
        };
        if ($ff = self::searchFile(APPMODULES, $fileName)) {
            require $ff;
            return true;
        };
    }


}