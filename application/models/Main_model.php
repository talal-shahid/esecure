<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main_model extends CI_Model {

	public function save($data){
		$this->db->insert('security_tokens', $data);
	}

	public function get($unique_id=0){
		if($unique_id){
			$query = $this->db->select('id, text, used')->from('security_tokens')->where('unique_id', $unique_id)->get()->row_array();
			if(isset($query) && !empty($query)){
				$data=array('used'=>1);
				$this->db->where('id',$query['id']);
				$this->db->update('security_tokens', $data);
			}
		}
		else{
			$query = $this->db->select('ip, datetime, unique_id, used')->from('security_tokens')->get()->result_array();	
		}
		return (isset($query) && !empty($query) ?  $query: array());
	}

	public function update_admin($email, $data){
		$this->db->where('email_address',$email);
		$this->db->update('admins',$data);
	}

	public function get_token($email){
		$query = $this->db->select('token')->from('admins')->where('email_address',$email)->get()->row_array();
		return (isset($query) && !empty($query) ?  $query['token']: array());
	}
	public function authenticate($data){
		$user = $this->db->select('*')->from('admins')->where('email_address',$data['email_address'])->where('password',hash('sha512', $data['password']))->get();
		if($user->num_rows()==1)
		{
			return true;
		}
		return false;
	}
}

?>