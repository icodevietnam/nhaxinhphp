<?php

namespace App\Controllers;

use Core\View;
use Core\Controller;
use Helpers\Session;
use Helpers\Password;
use Helpers\Url;

class Role extends Controller {	

    private $roleModel;

	public function __construct()
    {
        parent::__construct();
        $this->roleModel = new \App\Models\RoleModel();
    }

    //Admin side - Show Table
    public function showTable(){
    	$start = $_GET['iTableStart'];
        $length = $_GET['iTableLength'];

        if(!isset($start))
        {
            $start = 0;
        }

        $rows = $this->roleModel->showTable($start,$length,"desc");
        echo json_encode($rows);
    }

}