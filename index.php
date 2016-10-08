<?php
session_start();
//Маркер защиты или хз как там он правильно называется=)
define('RUNACCESS',true);
//Папка с фреймворком
define('BASEURL', '/CMS');
//Убираем слеш в конце
if ($_SERVER['REQUEST_URI'] != BASEURL."/" &&
    $_SERVER['REQUEST_URI'][strlen($_SERVER['REQUEST_URI'])-1] == "/" |
    preg_match("/^www\..$/",$_SERVER['SERVER_NAME']) ) {
    $url = ltrim($_SERVER['SERVER_NAME'],'www.').rtrim($_SERVER['REQUEST_URI'],"/");
    header("Location: {$url}",TRUE,301);
}
//Отображение ошибок
define('ERRORS','ALL');
//Фактический корень(Путь к index.php)
define('DOCROOT', realpath(dirname(__FILE__)).DIRECTORY_SEPARATOR);
//Расширение по умолчанию
define('EXT','.php');
//Путь к ядру, модулям и т.д.
define('CORE',DOCROOT.'Core'.DIRECTORY_SEPARATOR);
define('APPLICATION',DOCROOT.'App'.DIRECTORY_SEPARATOR);
define('MODULES',CORE.'Modules'.DIRECTORY_SEPARATOR);
define('APPMODULES',APPLICATION.'Modules'.DIRECTORY_SEPARATOR);
define('APPCONTROLLERS',APPLICATION.'Controllers'.DIRECTORY_SEPARATOR);
define('APPCONFIG',APPLICATION.'Config'.DIRECTORY_SEPARATOR);
define('VIEWS',APPLICATION.'Views'.DIRECTORY_SEPARATOR);
//Ядро
include CORE.'System'.EXT;
System::init();