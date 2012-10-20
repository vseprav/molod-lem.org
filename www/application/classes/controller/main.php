<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Main extends Applicationcontroller {
    
   public $template = 'layout/basic';

   public function action_index()
	{
    	$this->template->content = View::factory('home');
	}

} // End
