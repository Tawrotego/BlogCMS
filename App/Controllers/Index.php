<?php defined('RUNACCESS') or die('No direct script access.');
class Index_Controller
{
	public static function init(){
		$View = View::getInstance();
		$Data['title'] = 'My CMS project';
		$Data['description'] = 'This is description for CMS project';
		$View->add('head', $Data);
		$View->add('Index');
	}
}