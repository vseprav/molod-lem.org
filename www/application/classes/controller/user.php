<?php defined('SYSPATH') or die('No direct script access.');

class Controller_User extends Controller_Template {
    
  public $template = 'layout/basic';

  public function action_index()
    {

      if (Auth::instance()->logged_in())
        {
          $data["message"] = "hello";
          Request::initial()->redirect('');
        }
        else
        {
          $data["message"] = "who are you";
          $this->template->content = View::factory('users/login',$data);
        }
    }
  public function action_login()
  {
      $post = $this->request->post();
      $success = Auth::instance()->login($post['email'], $post['password']);

      if ($success)
      {
        Request::initial()->redirect('');
      }
      else
      {
        $this->template->content = View::factory('users/login');
      }
  }

  public function action_logout()
  {
    Auth::instance()->logout();
    Request::initial()->redirect('user');

  }


} // End
