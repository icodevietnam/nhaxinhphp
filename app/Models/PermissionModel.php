<?php
namespace app\Models;

use Core\Model;
use App\Models\Common;

class PermissionModel extends Common
{
	protected  $tableName;

	function __construct()
	{	
		$this->tableName = 'permission';
		parent::__construct($this->tableName);
	}
}