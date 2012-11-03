<?php defined('SYSPATH') or die('No direct script access.');

class Controller_User extends Controller {

	public function action_index()
	{
	   $this->response->body(View::factory('login'));
	}

	public function action_login()
	{
        if ($_POST)
        {
            $u = Arr::get($_POST, 'txtUsername');
            $p = Arr::get($_POST, 'txtPassword');
            
            $criteria = array(
                'name' => $u,
            );
  
            $c = Kohana::$config->load("site.name");
            $con = new Mongo($c);
            
            $db = $con->test;
            $cursor = $db->users->find($criteria);
            
            if($cursor->count()>0)
            {
                foreach ($cursor as $obj) 
                {
                    if($p === $obj['pass'])
                    {
                        $session = Session::instance();
                        $session->set('user',$u);
                        
                        echo 'Logged In<a href="/kohana/index.php/content/">Click to view content</a>';
                    }
                    else
                    {
                        $str = "Incorrect password. <br><br><a href=".URL::site('').">Click to try again</a>";
                        $this->response->body($str);    
                    }
                }                
            }
            else
            {
                $str = "Username not present. <br><br><a href=".URL::site('').">Click to try again</a>";
                $this->response->body($str);    
            }
        }
     }

	public function action_logout()
	{
	   $session = Session::instance();
	   $session->delete('user');
	   $this->redirect('', 302);
	}
    
   	public function action_register()
	{
        if ($_POST)
        {
            $u = Arr::get($_POST, 'txtUsername');
            $p = Arr::get($_POST, 'txtPassword');
            
            $c = Kohana::$config->load("site.name");
            $con = new Mongo($c);
            
            $db = $con->test;
            
            $criteria = array(
                'name' => $u,
            );
            
            $cursor = $db->users->find($criteria);
            if($cursor->count()>0)
            {
                $str = "Username already present. please try another<br><br><a href=".URL::site('index.php/user/register').">Click to try again</a>";
                $this->response->body($str);
            }
            
            $user = array(
                'name' => $u,
                'pass' => $p
              );
            $db->users->insert($user);
            $this->redirect('', 302);
        }
        else
        {
           $this->response->body(View::factory('register')); 
        }	   
	}
}
