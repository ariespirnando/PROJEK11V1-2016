<?php
class ModWeb extends CI_Model{
	

	function service($data){
		$this->db->insert('tbservice',$data);
	}
	function getdialog($id){
		$param = array('kodePelanggan'=>$id);
		return $this->db->get_where('v_dialog',$param);
	}

	function pers($id){
		$param = array('idContent'=>$id);
		return $this->db->get_where('tbcontent',$param);
	} 
	function komunitas($data){
		$this->db->insert('tbKomunitas',$data);	
	}
	function tampilkomunitas(){
		$sql = "SELECT * FROM `v_komunitas` ORDER BY `tanggal` DESC LIMIT 5";
		return $this->db->query($sql);
	}
	function tampilkomunitasfull(){
		$sql = "SELECT * FROM `v_komunitas` ORDER BY `tanggal` DESC";
		return $this->db->query($sql);
	}
	function awal(){
		$ket ='gHome';
		$st  ='2';
		$param = array('JenisGambar'=>$ket,'Status'=>$st);
		return $this->db->get_where('tbgambar',$param);
	}
	
	function galeri(){
		$ket ='gGaleri';
		$st  ='2';
		$param = array('JenisGambar'=>$ket,'Status'=>$st);
		return $this->db->get_where('tbgambar',$param);
	}
	function produk(){
		$st  ='2';
		$param = array('status'=>$st);
		return $this->db->get_where('tbproduk',$param);
	}

	function produkCari($id){
		$sql ="SELECT * FROM `tbproduk` WHERE `status`='2' AND `namaProduk` LIKE '%$id%'";
		return $this->db->query($sql);
	}
	function produkOne($id){
		$sql = "SELECT * FROM `tbproduk` WHERE idProduk ='$id'";
		return $this->db->query($sql);
	}
	function tambahKomentar($data){
		$this->db->insert('tbKomentar',$data);
	}
	function komentarLimit($id){
		$sql ="SELECT * FROM `v_komentar` WHERE `idProduk` = $id ORDER BY `tanggal` DESC LIMIT 5";
		return $this->db->query($sql);
	}
	function fullKomentar($id){
		$sql ="SELECT * FROM `v_komentar` WHERE `idProduk` = $id ORDER BY `tanggal` DESC";
		return $this->db->query($sql);
	}
	function cliping(){
		$sql ="SELECT * FROM `tbcliping` WHERE jenis='clip'";
		return $this->db->query($sql);
	}
	function eventOne($id){
		$sql = "SELECT * FROM `tbcliping` WHERE `idCliping` = '$id'";
		return $this->db->query($sql);
	}
	function event(){
		$sql ="SELECT * FROM `tbcliping` WHERE jenis='event'";
		return $this->db->query($sql);
	}
}
?>