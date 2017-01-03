<?php
namespace app\Models;

use Core\Model;

class Common extends Model
{
	
	protected $tableName;

	function __construct($tableName)
	{	
		$this->tableName = $tableName;
		parent::__construct();
	}


	public function showTable($start,$limit){
		$query = " SELECT * FROM ".$this->tableName." ORDER BY CREATED_DATE DESC LIMIT ".$start.",".$limit." ";	
		$data = $this->db->select($query);
		return $data;
	}

	public function tableCustomCols($cols,$start,$limit){
		$data = $this->db->select($query);
		return $data;
	}

	//Get All
	public function getAll(){
		return $this->db->select("SELECT * FROM ".PREFIX.$this->tableName." ORDER BY CREATED_DATE DESC ");
	}

	public function add($data){
		try {
			$this->db->insert(PREFIX.$this->tableName,$data);
			return true;
		} catch (Exception $e) {
			echo 'Caught exception: ',  $e->getMessage(), "\n";
			return false;
		}
	}

	public function delete($id){
		try {
			$this->db->delete(PREFIX.$this->tableName,array('id' => $id));
			return true;
		} catch (Exception $e) {
			echo 'Caught exception: ',  $e->getMessage(), "\n";
			return false;
		}
	}

	public function get($id){
		$data = null;
		try {
			$data = $this->db->select("SELECT * FROM ".PREFIX.$this->tableName. " WHERE id =:id",array(':id' => $id));
		} catch (Exception $e) {
			echo 'Caught exception: ',  $e->getMessage(), "\n";
		}
		return $data;
	}

	public function update($data,$where){
		try {
			$this->db->update(PREFIX.$this->tableName,$data,$where);
			return true;
		} catch (Exception $e) {
			echo 'Caught exception: ',  $e->getMessage(), "\n";
			return false;
		}
	}

}