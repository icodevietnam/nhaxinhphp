<?php
namespace app\Models;

use Core\Model;

class Table extends Model
{
	

	function __construct()
	{	
		parent::__construct();
	}

	public function countRow($table){
		$query = " SELECT COUNT(1) FROM ".$table;
		$data = $this->db->select($query);
		return $data[0];
	}

	public function showTable($table){
		
	}

}