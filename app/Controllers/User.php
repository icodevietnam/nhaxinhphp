<?php

namespace App\Controllers;

use Core\View;
use Core\Controller;
use Helpers\Session;
use Helpers\Password;
use Helpers\Url;

class User extends Controller {	

    private $userModel;

	public function __construct()
    {
        parent::__construct();
        $this->userModel = new \App\Models\UserModel();
    }

    //Admin side
    public function showTable(){
    	$start = $_GET['iDisplayStart'];
        $length = $_GET['iDisplayLength'];
        echo json_encode($start."-".$length);
    }


}