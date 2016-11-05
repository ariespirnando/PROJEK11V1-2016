<?php 


class mod_login extends CI_Model{
	
	function login($data){
		return $this->db->get_where('tbUser',$data);
	}
	function tUser(){
		return $this->db->get('tbUser');
	}
	function iUser($data){
		$this->db->insert('tbUser',$data);
	}
	function dUser($id){
		$sql ="DELETE FROM tbUser WHERE id=$id";
		$this->db->query($sql);
		/*$param = array('id',$id);
		$this->db->delete('tbUser',$param);*/
	}
	function gUser($id){
		$param = array('id'=>$id);
		return $this->db->get_where('tbUser',$param);
	}
	function uUser($data,$id){
		$this->db->where('id',$id);
		$this->db->update('tbUser',$data);
	}
}

?>