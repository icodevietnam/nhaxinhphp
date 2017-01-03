<?php
namespace app\Models;

use Core\Model;

class Common extends Model
{
	
	private $tableName;

	function __construct($tableName)
	{	
		$this->tableName = $tableName;
		parent::__construct();
	}

	public function countRow($table){
		$query = " SELECT COUNT(1) FROM ".$tableName;
		$data = $this->db->select($query);
		return $data[0];
	}

	public function showTable($start,$limit){
		$query = " SELECT * FROM ".$tableName." ORDER BY CREATED_DATE DESC LIMIT ".$start.",".$limit." ";	
		$data = $this->db->select($query);
		return $data;
	}

	public function tableCustomCols($cols,$start,$limit){
		$data = $this->db->select($query);
		return $data;
	}

	//Get All
	public function getAll(){
		return $this->db->select("SELECT * FROM ".PREFIX.$tableName." ORDER BY CREATED_DATE DESC ");
	}

	public function add($data){
		try {
			$this->db->insert(PREFIX.$tableName,$data);
			return true;
		} catch (Exception $e) {
			echo 'Caught exception: ',  $e->getMessage(), "\n";
			return false;
		}
	}

	public function delete($id){
		try {
			$this->db->delete(PREFIX.$tableName,array('id' => $id));
			return true;
		} catch (Exception $e) {
			echo 'Caught exception: ',  $e->getMessage(), "\n";
			return false;
		}
	}

	public function get($id){
		$data = null;
		try {
			$data = $this->db->select("SELECT * FROM ".PREFIX.$tableName. " WHERE id =:id",array(':id' => $id));
		} catch (Exception $e) {
			echo 'Caught exception: ',  $e->getMessage(), "\n";
		}
		return $data;
	}

	public function update($data,$where){
		try {
			$this->db->update(PREFIX.$tableName,$data,$where);
			return true;
		} catch (Exception $e) {
			echo 'Caught exception: ',  $e->getMessage(), "\n";
			return false;
		}
	}

}