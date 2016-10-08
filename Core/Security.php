<?php defined('RUNACCESS') or die('No direct script access.');

class Security{
    public static function checkClassName($name) {
        return preg_match('|^[A-Z]+$|i',$name);
    }
    //Только латиницу пропустит
    public static function checkUrl($url){
        $ret = (filter_var($url, FILTER_VALIDATE_URL) != false) ? true : false ;
        return $ret;
    }
    public static function checkPhp($text) {
        return strip_tags($text);
    }
}