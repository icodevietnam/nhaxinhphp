<?php

namespace App\Controllers;

use Core\View;
use Core\Controller;
use Helpers\Session;
use Helpers\Password;
use Helpers\Url;

class Login extends Controller {	

    private $userModel;

	public function __construct()
    {
        parent::__construct();
        $this->userModel = new \App\Models\UserModel();
    }

    //Avoid to crsf attack 

    public function index(){
        if(Session::get('admin') != null){
            url::redirect(ADMIN_DIR);
        }
        $token = null;
        //Create token
        if(!isset($_SESSION['token'])){
            $token = md5(uniqid(rand(), TRUE));
            $_SESSION['token'] = $token;
            $_SESSION['token_time'] = time();
        }else{
            $token = $_SESSION['token'];
        }
        //End create token

    	$data['title'] = 'Đăng nhập';
        $data['menu'] = 'Đăng nhập';
        $data['token'] = $token;
    	View::renderTemplate('header', $data,LOGIN);
        View::render('Login/Login', $data);
        View::renderTemplate('footer', $data,LOGIN);
    }

    public function logout(){
        Session::destroy();
    }

    // Login with post method and verify token
    public function login(){
        if(Session::get('loggin') == true){
            url::redirect(ADMIN_DIR);
        }

        $username = $_POST['username'];
        $password = $_POST['password'];
        $token = $_POST['token'];
        // Validation
        if(Password::verify(md5($password), $userModel->get_hash($username)) == true && checkToken($token=== true)){
            Session::set('admin',true);
            Url::redirect(ADMIN_DIR);
        } else {
            die('wrong username or password');
        }
    }

    //Check token is correct or not
    private function checkToken($token){
        if(!empty($token)){
            if($_SESSION['token'] === $token)
            {
                return true;
            }
        }
        return false;
    }


}