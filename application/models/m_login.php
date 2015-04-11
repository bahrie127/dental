<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mlogin extends CI_Model{
	
	public function cekdb(){
		$user = $this->input->post('user');
		$pass = $this->input->post('pass');
		$level = $this->input->post('level');
		
		$this->db->where('user',$user);
		$this->db->where('pass',$pass);
		$this->db->where('level',$level);
		$query = $this->db->get('member');
		return $query->result();
	}
	public function getdropdownsup(){
		$dbres = $this->db->get('levelid');
		$ddmenu = array();
		foreach ($dbres->result_array() as $tablerow){
			$ddmenu[0] = '--Choose Mode--';
			$ddmenu[$tablerow['levelname']] = $tablerow['levelname'];
		}
		return $ddmenu;
	}
	public function getsupply($id){
		$data = array();
		$options = array('id' => $id);
		$Q = $this->db->get_where('member',$options,1);
		if($Q->num_rows() > 0){
			$data = $Q->row_array();
		}
		$Q->free_result();
		return $data;
	}
}
?>
