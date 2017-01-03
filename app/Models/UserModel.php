<?php
namespace app\Models;

use Core\Model;
use App\Models\Common;

class UserModel extends Common
{
	protected  $tableName ;

	function __construct()
	{	
		$this->tableName = 'user';
		parent::__construct($this->tableName);
	}

	public function get_hash($username){
		$data = $this->db->select("SELECT U.password FROM ".PREFIX.$this->tableName." U, user_role UR, role R WHERE username = :username AND U.id = UR.user_id AND R.id = UR.role_id AND R.name = 'admin' ", array(':username' => $username));
		return $data[0]->password;
	}


	function checkEmail($email){
		$data = null;
		try {
			$data = $this->db->select("SELECT * FROM ".PREFIX.$this->tableName." WHERE email =:email",array(':email' => $email));
			if(count($data) >= 1){
				return false;
			}else{
				return true;
			}
		} catch (Exception $e) {
			echo 'Caught exception: ',  $e->getMessage(), "\n";
			return true;
		}
	}

	function checkUsername($username){
		$data = null;
		try {
			$data = $this->db->select("SELECT * FROM ".PREFIX.$this->tableName." WHERE username =:username",array(':username' => $username));
			if(count($data) >= 1){
				return false;
			}else{
				return true;
			}
		} catch (Exception $e) {
			echo 'Caught exception: ',  $e->getMessage(), "\n";
			return true;
		}
	}

	function checkPassword($password,$id){
		$data = null;
		try {
			$data = $this->db->select("SELECT * FROM ".PREFIX.$this->tableName." WHERE password =:password AND id = :id",array(':password' => $password,':id' => $id));
			if(count($data) >= 1){
				return true;
			}else{
				return false;
			}
		} catch (Exception $e) {
			echo 'Caught exception: ',  $e->getMessage(), "\n";
			return false;
		}
	}


	function getUsername($username){
		$data = null;
		try {
			$data = $this->db->select("SELECT id,firstname,lastname,email,active,created_date FROM ".PREFIX." user WHERE username =:username",array(':username' => $username));
		} catch (Exception $e) {
			echo 'Caught exception: ',  $e->getMessage(), "\n";
		}
		return $data[0];
	}

}