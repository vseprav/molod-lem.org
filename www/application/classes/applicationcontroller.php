<?php defined('SYSPATH') or die('No direct script access.');

class Applicationcontroller extends Controller_Template {

  public function before()
  {
  	if (Auth::instance()->logged_in() == 0) Request::initial()->redirect('user');
  	return parent::before();
  }
  
} // End
