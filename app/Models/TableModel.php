<?php
namespace app\Models;

use Core\Model;
use App\Models\Common;

class TableModel extends Model
{
	function __construct()
	{	
		parent::__construct();
	}

	public function table($table){
		$query = "SELECT * FROM ".PREFIX.$table." ORDER BY created_date ASC ";
		$data = $this->db->select($query);
		return $data;
	}

	public function delete($table,$id){
		try {
			$this->db->delete(PREFIX.$table,array('id' => $id));
			return true;
		} catch (Exception $e) {
			return false;
		}
	}

}