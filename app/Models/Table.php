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

	public function showTable($table,$start,$limit){
		$query = " SELECT * FROM ".$table." ORDER BY CREATED_DATE DESC LIMIT ".$start.",".$limit." ";	
		$data = $this->db->select($query);
		return $data;
	}

	public function tableCustomCols($cols,$table,$start,$limit){
		$query = " SELECT ".$cols." FROM ".$table." ORDER BY CREATED_DATE DESC LIMIT ".$start.",".$limit." ";	
		$data = $this->db->select($query);
		return $data;
	}

}