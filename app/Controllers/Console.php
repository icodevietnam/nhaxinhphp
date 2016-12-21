<?php

namespace App\Controllers;

use Core\View;
use Core\Controller;
use Helpers\Session;
use Helpers\Url;

class Console extends Controller {	


	public function __construct()
    {
        parent::__construct();
    }

    public function index(){
    	$data['title'] = 'Console';
        $data['menu'] = 'Console';
    	View::renderTemplate('header', $data,CONSOLE);
        View::render('Console/Console', $data);
        View::renderTemplate('footer', $data,CONSOLE);
    }

    // User Admin Page
    public function userPage(){
        $data['title'] = 'Quản lý người dùng';
        $data['menu'] = 'user';
        $data['preview'] = 'preview';
        View::renderTemplate('header', $data,CONSOLE);
        View::render('Console/User/User', $data);
        View::renderTemplate('footer', $data,CONSOLE);
    }


}