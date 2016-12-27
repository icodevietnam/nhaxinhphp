<?php

namespace App\Controllers;

use Core\View;
use Core\Controller;
use Helpers\Session;
use Helpers\Password;
use App\Modules\AdminPage;
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
        $message = $_GET['message'];

        if( null !== Session::get('admin')){
            Url::redirect(AdminPage::consolePage());
        }

        $token = null;
        //Create token
        if(null == Session::get('token')){
            $token = md5(uniqid(rand(), true));
            Session::set('token',$token);
            Session::set('token_time',time());
        }else{
            $token = Session::get('token');
        }
        //End create token

    	$data['title'] = 'Đăng nhập';
        $data['menu'] = 'Đăng nhập';
        $data['token'] = $token;
        $data['message'] = $message;
    	View::renderTemplate('header', $data,LOGIN);
        View::render('Login/Login', $data);
        View::renderTemplate('footer', $data,LOGIN);
    }

    public function logout(){
        Session::destroy();
        Url::redirect(AdminPage::loginPage());
    }

    // Login with post method and verify token
    public function login(){
        $username = $_POST['username'];
        $password = $_POST['password'];
        $token = $_POST['token'];
        if(Password::verify($password, $this->userModel->get_hash($username)) === true && $this->checkToken($token) === true){
            $currentUser = $this->userModel->getUsername($username);
            Session::set('admin',$currentUser);
            Url::redirect(AdminPage::consolePage());
        } else {
            $message ='Wrong username or password';
            Url::redirect(AdminPage::loginPage()."?message=".$message);
        }
    }

    //Check token is correct or not
    private function checkToken($token){
        if(!empty($token)){
            if(Session::get('token') === $token)
            {
                return true;
            }
        }
        return false;
    }


}