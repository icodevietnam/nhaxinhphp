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

	public function showTable($start,$length,$orderBy){
		$query = "SELECT * FROM ".PREFIX.$this->tableName." ORDER BY created_date :orderBy LIMIT :start , :length ";
		$data = $this->db->select($query, array(':start' => intval($start),':length' => intval($length),':orderBy'=>$orderBy));
		return $data;
	}

}