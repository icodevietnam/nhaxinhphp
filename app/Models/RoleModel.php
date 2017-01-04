<?php
namespace app\Models;

use Core\Model;
use App\Models\Common;

class RoleModel extends Common
{
	protected  $tableName ;

	function __construct()
	{	
		$this->tableName = 'role';
		parent::__construct($this->tableName);
	}

}