<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Tovarystvo extends Applicationcontroller {
    
   public $template = 'layout/basic';

   public function action_index()
	{
    	$this->template->content = View::factory('tovarystvo/index');
	}
	
	public function action_new()
	{
    	$this->template->content = View::factory('tovarystvo/new');
	}
	

} // End
