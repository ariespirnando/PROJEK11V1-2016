<?php
class modAdmin extends CI_Model
{
	function dialogin($data){
		$this->db->insert('tbdialog',$data);
	}
	function getservices($id){
		$param = array('idService'=>$id);
		return $this->db->get_where('v_service',$param);
	}

	function updateServic($id){
		$sql ="UPDATE tbservice SET STATUS = 2 WHERE `idService` = $id";
		$this->db->query($sql);
	}
	function tampildialog(){

	}
	
	function gambar($data){
		$this->db->insert('tbGambar',$data);
	}
	function haKomunitas($id){
		$sql = "DELETE FROM `tbkomunitas` WHERE `id`='$id'";
		$this->db->query($sql);
	}
	function haKomunitasProduk($id){
		$sql = "DELETE FROM `tbkomentar` WHERE `id`='$id'";
		$this->db->query($sql);
	}
	function vidio($data){
		$this->db->insert('tbvideo',$data);
	}
	function service(){
		return $this->db->get('v_service');
	}
	function uContent($data,$id){
		$this->db->where('idContent',$id);
		$this->db->update('tbcontent',$data);
	}
	function getContent($id){
		$param = array('idContent'=>$id);
		return $this->db->get_where('tbcontent',$param);
	}
	function hPelanggan($id){
		$sql = "DELETE FROM `tbpelanggan` WHERE `kodePelanggan`='$id'";
		$this->db->query($sql);
	}
	function hservices($id){
		$sql = "DELETE FROM `tbservice` WHERE `idService`='$id'";
		$this->db->query($sql);
	}
	function statusproduk($id){
		$sql1 = "SELECT * FROM tbproduk where status ='2' and idProduk =$id";
		$hsl = $this->db->query($sql1);
		if($hsl->num_rows() > 0){
			$ket = '1';
		}else{
			$ket = '2';
		}
		$sql2 ="UPDATE tbproduk set status =$ket where idProduk=$id";
		$this->db->query($sql2);
	}
	function statusGambar($id){
		$sql1 = "SELECT * FROM tbgambar where Status ='2' and idGambar =$id";
		$hsl = $this->db->query($sql1);
		if($hsl->num_rows() > 0){
			$ket = '1';
		}else{
			$ket = '2';
		}
		$sql2 ="UPDATE tbgambar set Status=$ket where idGambar=$id";
		$this->db->query($sql2);
	}
	function hapusGambar($id){
	    $this->db->where('idGambar',$id);
     	$query = $this->db->get('tbgambar');
     	$row = $query->row();
     	unlink("./assets/Upload/$row->Gambar");
     	$this->db->delete('tbgambar', array('idGambar' => $id));
	}
	function hapusProduk($id){
	    $this->db->where('idProduk',$id);
     	$query = $this->db->get('tbproduk');
     	$row = $query->row();
     	unlink("./assets/Upload/$row->gambarProduk");
     	$this->db->delete('tbproduk', array('idProduk' => $id));
	}
	function hapusContent($id){
	    $this->db->where('idContent',$id);
     	$query = $this->db->get('tbcontent');
     	$row = $query->row();
     	unlink("./assets/Upload/$row->gambarContent");
     	$this->db->delete('tbcontent', array('idContent' => $id));
	}
	function hapusClipping($id){
	    $this->db->where('idCliping',$id);
     	$query = $this->db->get('tbcliping');
     	$row = $query->row();
     	unlink("./assets/Upload/$row->gambar");
     	$this->db->delete('tbcliping', array('idCliping' => $id));
	}
	function getClipping($id){
		$this->db->where('idCliping',$id);
		$query = $this->db->get('tbcliping');
     	$row = $query->row();
     	return $row->gambar;
	}
	function TampilgambarAktif(){
		$id ='2';
		$param = array('Status'=>$id);
		return $this->db->get_where('tbGambar',$param);
	}
	function tampilGambar(){
		return $this->db->get('tbGambar');
	}
	function tampilProduk(){
		return $this->db->get('tbproduk');
	}
	function tampilContent(){
		$this->db->order_by("Tanggal", "desc");
		return $this->db->get('tbcontent');
	}
	function tampilClipping(){
		return $this->db->get('tbcliping');
	}
	function ubahGambar($data){
		$this->db->update('tbGambar',$data);
	}

	function produk($data){
		$this->db->insert('tbproduk',$data);
	}
	function content($data){

		$this->db->insert('tbContent',$data);
	}
	function cliping($data){
		$this->db->insert('tbCliping',$data);
	}
	function pelanggan($data){
		$this->db->insert('tbpelanggan',$data);
	}
	function tampilPelanggan(){
		return $this->db->get('tbpelanggan');
	}
	function kodepelanggan(){
		
        $mt = date("m");
        $kode = 'PL';
        $sql="SELECT kodePelanggan FROM tbpelanggan ORDER BY kodePelanggan DESC";
        $data = $this->db->query($sql);
        $row = $data->row_array();
        $nk = $row['kodePelanggan'];
        $nk1 = (int) substr($nk,5,10);
        $no = $nk1+1;
        if($no<9){
            $adm = $kode.''.$mt.'0000'.$no;
        }else if($no<99){
            $adm = $kode.''.$mt.'000'.$no;
        }else if($no<999){
            $adm = $kode.''.$mt.'00'.$no;
        }else if($no<9999){
            $adm = $kode.''.$mt.'0'.$no;
        }else if($no<99999){
            $adm = $kode.''.$mt.''.$no;
        }else{
        	 $adm = $kode.''.$mt.'00001';
        }
        return $adm;
	}

	function cariPelanggan($id){
		$sql = "SELECT * from tbpelanggan where NamaPelanggan like '%$id%'";
		return $this->db->query($sql);
	}
}

?>