<?php

namespace App\Controllers;

use Core\View;
use Core\Controller;
use Helpers\Session;
use Helpers\Password;
use Helpers\Url;

class Permission extends Controller {	

    private $userModel;

	public function __construct()
    {
        parent::__construct();
        $this->userModel = new \App\Models\UserModel();
    }

}