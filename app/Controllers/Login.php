<?php

namespace App\Controllers;

use Core\View;
use Core\Controller;
use Helpers\Session;
use Helpers\Url;

class Login extends Controller {	

    private $userModel;

	public function __construct()
    {
        parent::__construct();
        $this->userModel = new \App\Models\UserModel();
    }

    public function index(){
    	$data['title'] = 'Đăng nhập';
        $data['menu'] = 'Đăng nhập';
    	View::renderTemplate('header', $data,LOGIN);
        View::render('Login/Login', $data);
        View::renderTemplate('footer', $data,LOGIN);
    }

    public function logout(){
        Session::destroy();
    }

    public function login(){
        $username = $_POST['username'];
        $password = $_POST['password'];

        // Validation

    }


}