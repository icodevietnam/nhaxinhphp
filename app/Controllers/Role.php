<?php

namespace App\Controllers;

use Core\View;
use Core\Controller;
use Helpers\Session;
use Helpers\Password;
use Helpers\Url;

class Role extends Controller {	

    private $roleModel;
    private $tableModel;

	public function __construct()
    {
        parent::__construct();
        $this->roleModel = new \App\Models\RoleModel();
        $this->tableModel = new \App\Models\TableModel();
    }

    //Admin side - Show Table
    public function showTable(){
        $table = $_GET['iTable'];

        $rows = $this->tableModel->table($table);
        echo json_encode($rows);
    }

}