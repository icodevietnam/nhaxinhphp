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
    	View::renderTemplate('header', $data,"Console");
        View::render('Console/Console', $data);
        View::renderTemplate('footer', $data,"Console");
    }


}