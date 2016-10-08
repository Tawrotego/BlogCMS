<?php defined('RUNACCESS') or die('No direct script access.');
class View
{
    private static $hInstance;
    private $Parts;

    private function __construct(){}
    public static function getInstance()    {
        if (!isset(self::$hInstance)) {
            self::$hInstance = new self;
        }
        return self::$hInstance;
    }
    public function init(){
        ob_start();
        ob_clean();
    }
    public function view(){
		foreach ($this->Parts as $key => $value) {
			$Data = $value;
			include VIEWS.$key.EXT;
		}
		ob_end_flush();
	}
    public function add($Name, $Data = array()){
		$this->Parts[$Name] = $Data;
	}
}

