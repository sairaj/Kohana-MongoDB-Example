<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Content extends Controller {
 
    public function before()
    {
        $session = Session::instance();
        if($session->get('user') == null)
        {
            $this->redirect('', 302);
        }
    }
 
    public function action_index() 
    {
        $this->response->body('<a href="'.url::base().'/index.php/user/logout/">Click to logout</a><br><br>Registered user can only access this');
    }
 }
?>