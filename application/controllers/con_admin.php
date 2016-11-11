<?php

class Con_admin extends CI_Controller{

	function __construct(){
		parent::__construct();
		if ($this->session->userdata('username')=="") {
			redirect('Con_login');
		}
		$timeout = 10; // Set timeout menit
		$timeout = $timeout * 60; // Ubah menit ke detik
		if (isset($_SESSION['start_time'])) {
		    $elapsed_time = time() - $_SESSION['start_time'];
		    if ($elapsed_time >= $timeout) {
		        session_destroy();
		        echo "<script>alert('Sesion Habis')</script>";
		        redirect('Con_login');
		    }
		}
		$_SESSION['start_time'] = time();
		$this->load->model(array('ModAdmin','ModWeb','Mod_login'));
	}
	function dialog(){
		if(isset($_POST['post'])){
			$idp = $this->input->post('pro');
			$komen = $this->input->post('komentar');
			if($komen==""){
				echo "<script>alert('Isi dahulu Komentar !!')
		      		location.href='./dialog/$idp'</script>";
			}else{
					$this->ModAdmin->updateServic($idp);
				$data = array('idService'=>$idp,'Komentar'=>$komen);
					$this->ModAdmin->dialogin($data);
				echo "<script>alert('Pelanggan berhasil ditanggapi')
			      location.href='./service/$idp'</script>";
			}
		}else{
			$id = $this->uri->segment(3);
			$data['isi'] = $this->ModAdmin->getservices($id)->row_array();
			$this->template->load('Template_ADMIN','Admin/dialog',$data);
		}
		
	}
	function komentar(){
		if(isset($_POST['post'])){
			$idpel ='PL1000001';
			$idp = $this->input->post('pro');
			$komen = $this->input->post('komentar');
			if($komen==""){
				echo "<script>alert('Isi dahulu Komentar !!')
		      		location.href='./komentar/$idp'</script>";
			}else{
				$data = array('idProduk'=>$idp,'kodePelanggan'=>$idpel,'komentar'=>$komen);
					$this->ModWeb->tambahKomentar($data);
				echo "<script>alert('Komentar Berhasil ditambahkan')
			      location.href='./komentar/$idp'</script>";
			}
		}else{
			$id = $this->uri->segment(3);
			$data['id'] = $id;
			$data['isi'] = $this->ModWeb->fullKomentar($id);
			$data['pr'] = $this->ModWeb->produkOne($id)->row_array();;
			$this->template->load('Template_ADMIN','Admin/Komentar',$data);
		}
	}
	function komunitas(){
		if(isset($_POST['post'])){
			$idpel ='PL1000001';
			$komen = $this->input->post('komentar');
			if($komen==""){
				echo "<script>alert('Isi dahulu Komentar !!')
		      		location.href=''</script>";
			}else{
				$data = array('kodePelanggan'=>$idpel,'komentar'=>$komen);
				$this->ModWeb->komunitas($data);
				echo "<script>alert('Komentar Berhasil ditambahkan')
			      location.href=''</script>";
			}
		}else{
			$data['isi'] = $this->ModWeb->tampilkomunitasfull();
			$this->template->load('Template_ADMIN','Admin/komunitas',$data);
		}
	}
	function hapusKomentar(){
		$id = $this->uri->segment(3);
		$this->ModAdmin->haKomunitas($id);
		echo "<script>alert('Komentar Berhasil dihapus')
			      location.href='../komunitas'</script>";
	}
	function hapusKomentarProduk(){
		if(isset($_POST['post'])){
			$id = $this->input->post('idpe');
			$idp = $this->input->post('pro');
			$this->ModAdmin->haKomunitasProduk($id);
			echo "<script>alert('Komentar Berhasil dihapus')
				      location.href='../Con_admin/komentar/$idp'</script>";
		}
		
	}
	function statusProduk(){
		$id = $this->uri->segment(3);
		$this->ModAdmin->statusproduk($id);
		echo "<script>alert('Status Berhasil diubah')
			location.href='../tampilProduk'</script>";
	}
	function statusGambar(){
		$id = $this->uri->segment(3);
		$this->ModAdmin->statusGambar($id);
		echo "<script>alert('Status Berhasil diubah')
			location.href='../tampilPicture'</script>";
	}
	function hapusGambar(){
		$id = $this->uri->segment(3);
		$this->ModAdmin->hapusGambar($id);
		echo "<script>alert('Data Berhasil dihapus')
			location.href='../tampilPicture'</script>";
	}
	function hapusProduk(){
		$id = $this->uri->segment(3);
		$this->ModAdmin->hapusProduk($id);
		echo "<script>alert('Data Berhasil dihapus')
			location.href='../tampilProduk'</script>";
	}
	function hapusClipping(){
		$id = $this->uri->segment(3);
		$this->ModAdmin->hapusClipping($id);
		echo "<script>alert('Data Berhasil dihapus')
			location.href='../tampilClipig'</script>";
	}
	function hapusContent(){
		$id = $this->uri->segment(3);
		$this->ModAdmin->hapusContent($id);
		echo "<script>alert('Data Berhasil dihapus')
			location.href='../tampilContent'</script>";	
	}

	function tampilProduk(){
		$data['isi'] = $this->ModAdmin->tampilProduk();
		$this->template->load('Template_ADMIN','Admin/tampilProduk',$data);
	}
	function tampilPicture(){
		$data['isi'] = $this->ModAdmin->tampilGambar();
		$this->template->load('Template_ADMIN','Admin/tampilPicture',$data);
	}
	function tampilClipig(){
		$data['isi'] = $this->ModAdmin->tampilClipping();
		$this->template->load('Template_ADMIN','Admin/tampilcliping',$data);
	}
	function tampilContent(){
		$data['isi'] = $this->ModAdmin->tampilContent();
		$this->template->load('Template_ADMIN','Admin/tampilcontent',$data);	
	}
	
	function daftarPelanggan(){
		$data['isi'] = $this->ModAdmin->tampilPelanggan();
		$this->template->load('Template_ADMIN','Admin/pelanggan',$data);
	}
	function cPelangan(){
		$data['isi'] = $this->ModAdmin->tampilPelanggan();
		//cPelanggan
		$html= $this->load->view('Admin/cPelanggan',$data,true);
		$pdfFilePath = "Daftar Pelanggan.pdf";
		$pdf = $this->m_pdf->load();
		$pdf->WriteHTML($html);
		$pdf->Output($pdfFilePath, "D");	
	}
	function cliping(){
		if(isset($_POST['submit'])){
			$jenis = $this->input->post('jenis');
			//$ulo  = $this->input->post('upload');
			$jud = $this->input->post('jcliping');
			if($jenis=="" || $jud==""){
				echo "<script>alert('Data Masih Kosong')
					location.href=''</script>";
			}else{
				$nm = "file_".time();
	   			$config['upload_path'] = './assets/Upload/'; 
	    		$config['allowed_types'] = 'jpg|png|jpeg|bmp'; 
	    		$config['max_size'] = '2888'; //MB
				$config['max_width']  = '2000'; //pixels
				$config['max_height']  = '2000'; //pixels 
				$config['file_name']  = $nm;

	    		$this->upload->initialize($config);
	    		if ( ! $this->upload->do_upload('upload')){
					echo "<script>alert('Gambar Gagal Diupload (MelebiHI batas Maksimum 2 MB),  Silahkan isi Form Kembali')
					location.href=''</script>";
				} else {
					$imgUpload = $this->upload->data();
					$img= $imgUpload['file_name'];
					$id = '2';
					$dataGambar = array('judulCliping'=>$jud,'gambar'=>$img,'jenis'=>$jenis);

					$this->ModAdmin->cliping($dataGambar);
					echo "<script>alert('Data Berhasil Ditambahkan')
					location.href=''</script>";
		    	}
			}
			

		}else{
			$this->template->load('Template_ADMIN','Admin/clipping');
		}

	}
	function vidio(){
		if(isset($_POST['submit'])){
			$jenis = $this->input->post('jenis');
			//$ulo  = $this->input->post('upload');
			$jud = $this->input->post('jGambar');
			if($jenis=="" || $jud==""){
				echo "<script>alert('Data Masih Kosong')
					location.href=''</script>";
			}else{
				$nm = "file_".time();
	   			$config['upload_path'] = './assets/Upload/'; 
	    		$config['allowed_types'] = 'jpg|png|jpeg|bmp'; 
	    		$config['max_size'] = '307200'; //MB
				$config['file_name']  = $nm;

	    		$this->upload->initialize($config);
	    		if ( ! $this->upload->do_upload('upload')){
					echo "<script>alert('Video Gagal Diupload (MelebiHI batas Maksimum 300 MB),  Silahkan isi Form Kembali')
					location.href=''</script>";
				} else {
					$imgUpload = $this->upload->data();
					$img= $imgUpload['file_name'];
					$data = array('namaVideo'=>$jud,'path'=>$img,'jenisvidio'=>$jenis);

					$this->ModAdmin->vidio($data);
					echo "<script>alert('Data Berhasil Ditambahkan')
					location.href=''</script>";
		    	}
			}
			

		}else{
			$this->template->load('Template_ADMIN','Admin/vidio');
		}
	}
	function index(){
		if(isset($_POST['submit'])){
			$jenis = $this->input->post('jenis');
			//$ulo  = $this->input->post('upload');
			$ket = $this->input->post('Keterangan');
			$jud = $this->input->post('jGambar');
			if($jenis=="" || $jud==""){
				echo "<script>alert('Data Masih Kosong')
					location.href='Con_admin'</script>";
			}else{
				$nm = "file_".time();
	   			$config['upload_path'] = './assets/Upload/'; 
	    		$config['allowed_types'] = 'jpg|png|jpeg|bmp'; 
	    		$config['max_size'] = '2888'; //MB
				$config['max_width']  = '2000'; //pixels
				$config['max_height']  = '2000'; //pixels 
				$config['file_name']  = $nm;

	    		$this->upload->initialize($config);
	    		if ( ! $this->upload->do_upload('upload')){
					echo "<script>alert('Gambar Gagal Diupload (MelebiHI batas Maksimum 2 MB),  Silahkan isi Form Kembali')
					location.href='Con_admin'</script>";
				} else {
					$imgUpload = $this->upload->data();
					$img= $imgUpload['file_name'];
					$id = '2';
					$dataGambar = array('namaGambar'=>$jud,'Gambar'=>$img,'JenisGambar'=>$jenis,'Keterangan'=>$ket,'Status'=>$id);

					$this->ModAdmin->gambar($dataGambar);
					echo "<script>alert('Data Berhasil Ditambahkan')
					location.href='Con_admin'</script>";
		    	}
			}
			

		}else{
			$this->template->load('Template_ADMIN','Admin/Picture');
		}

	}
	function content(){
		if(isset($_POST['submit'])){
			$ket = $this->input->post('Keterangan');
			$jud = $this->input->post('jcontent');
			if($jud =="" || $ket ==""){
				echo "<script>alert('Content Masih Kosong')
					location.href=''</script>";
			}else{
				$nm = "file_".time();
	   			$config['upload_path'] = './assets/Upload/'; 
	    		$config['allowed_types'] = 'jpg|png|jpeg|bmp'; 
	    		$config['max_size'] = '2888'; //MB
				$config['max_width']  = '2000'; //pixels
				$config['max_height']  = '2000'; //pixels 
				$config['file_name']  = $nm;

	    		$this->upload->initialize($config);
	    		if ( ! $this->upload->do_upload('upload')){
					echo "<script>alert('Gambar Gagal Diupload (MelebiHI batas Maksimum 2 MB),  Silahkan isi Form Kembali')
					location.href=''</script>";
				} else {
					$imgUpload = $this->upload->data();
					$img= $imgUpload['file_name'];
					$dataContent = array('judulContent'=>$jud,'gambarContent'=>$img,'isiContent'=>$ket);

					$this->ModAdmin->content($dataContent);
					echo "<script>alert('Content Berhasil Ditambahkan')
					location.href=''</script>";
		    	}
			}			

		}else{
			$this->template->load('Template_ADMIN','Admin/content');
		}		
	}
	function uContent(){
		if(isset($_POST['submit'])){
			$ket = $this->input->post('Keterangan');
			$jud = $this->input->post('jcontent');
			$ids = $this->input->post('idtes');
			//echo "Ini Loh Id Nya".$ids;
			if($jud =="" || $ket ==""){
				echo "<script>alert('Content Masih Kosong')
					location.href=''</script>";
			}else{
				$nm = "file_".time();
	   			$config['upload_path'] = './assets/Upload/'; 
	    		$config['allowed_types'] = 'jpg|png|jpeg|bmp'; 
	    		$config['max_size'] = '2888'; //MB
				$config['max_width']  = '2000'; //pixels
				$config['max_height']  = '2000'; //pixels 
				$config['file_name']  = $nm;

	    		$this->upload->initialize($config);
	    		if ( ! $this->upload->do_upload('upload')){
					echo "<script>alert('Gambar Gagal Diupload (MelebiHI batas Maksimum 2 MB),  Silahkan isi Form Kembali')
					location.href=''</script>";
				} else {
					$imgUpload = $this->upload->data();
					$img= $imgUpload['file_name'];
					$dataContent = array('judulContent'=>$jud,'gambarContent'=>$img,'isiContent'=>$ket);
					$this->ModAdmin->uContent($dataContent,$ids);
					echo "<script>alert('Content Berhasil Diubah')
					location.href='tampilContent'</script>";
		    	}
			}			

		}else{
			$id = $this->uri->segment(3);
			$data['ids'] = $id;
			$data['isi'] = $this->ModAdmin->getContent($id)->row_array();
			$this->template->load('Template_ADMIN','Admin/uContent',$data);
		}	
	}
	function user(){
		$data['isi'] = $this->Mod_login->tUser();
		$this->template->load('Template_ADMIN','Admin/User',$data);
	}
	function tuser(){
		if(isset($_POST['post'])){
			$pw = $this->input->post('pw');
			$us = $this->input->post('us');
			$kon = $this->input->post('kon');
			if($pw==""||$us==""||$kon==""){
				echo "<script>alert('Terdapat Masih Kosong')
					location.href=''</script>";
			}else{
				if($pw==$kon){
					$data = array('username'=>$us,'password'=>md5($pw));
					$this->Mod_login->iUser($data);
					echo "<script>alert('Username Berhasil ditambahkan')
					location.href=''</script>";
				}else{
					echo "<script>alert('Passwod tidak cocok')
					location.href=''</script>";
				}
			}
		}else{
			$this->template->load('Template_ADMIN','Admin/tUser');		
		}
		
	}
	function hUser(){
		$id = $this->uri->segment(3);
		$this->Mod_login->dUser($id);
		echo "<script>alert('Username Berhasil dihapus')
		location.href='../user'</script>";
	}
	function uUser(){
		if(isset($_POST['post'])){
			$pw = $this->input->post('pw');
			$us = $this->input->post('us');
			$kon = $this->input->post('kon');
			$id = $this->input->post('id');
			if($pw==""||$us==""||$kon==""){
				echo "<script>alert('Terdapat Masih Kosong')
					location.href=''</script>";
			}else{
				if($pw==$kon){
					$data = array('username'=>$us,'password'=>md5($pw));
					$this->Mod_login->uUser($data,$id);
					echo "<script>alert('Username Berhasil diubah')
					location.href='user'</script>";
				}else{
					echo "<script>alert('Passwod tidak cocok')
					location.href=''</script>";
				}
			}
		}else{
			$id = $this->uri->segment(3);
			$data['isi']=$this->Mod_login->gUser($id)->row_array();
			$this->template->load('Template_ADMIN','Admin/uUser',$data);		
		}
	}
	function produk(){
		if(isset($_POST['submit'])){
			//$ulo  = $this->input->post('upload');
			$ket = $this->input->post('Keterangan');
			$jud = $this->input->post('jGambar');
			$war = $this->input->post('warna');
			if($jud=="" || $war ==""){
				echo "<script>alert('Produk Masih Kosong')
					location.href=''</script>";
			}else{
				$nm = "file_".time();
	   			$config['upload_path'] = './assets/Upload/'; 
	    		$config['allowed_types'] = 'jpg|png|jpeg|bmp'; 
	    		$config['max_size'] = '2888'; //MB
				$config['max_width']  = '800'; //pixels
				$config['max_height']  = '400'; //pixels 
				$config['file_name']  = $nm;

	    		$this->upload->initialize($config);
	    		if ( ! $this->upload->do_upload('upload')){
					echo "<script>alert('Gambar Gagal Diupload (MelebiHI batas Maksimum 2 MB),  Silahkan isi Form Kembali')
					location.href=''</script>";
				} else {
					$imgUpload = $this->upload->data();
					$img= $imgUpload['file_name'];
					$id = '2';
					$dataGambar = array('namaProduk'=>$jud,'gambarProduk'=>$img,'keteranganProduk'=>$ket,'status'=>$id,'warna'=>$war);

					$this->ModAdmin->produk($dataGambar);
					echo "<script>alert('Produk Berhasil Ditambahkan')
					location.href=''</script>";
		    	}
			}
			

		}else{
			$this->template->load('Template_ADMIN','Admin/produk');
		}
	}
	function service(){
		$data['isi'] = $this->ModAdmin->service();
		$this->template->load('Template_ADMIN','Admin/service',$data);
	}
	function Cservice(){
		$data['isi'] = $this->ModAdmin->service();
		$html = $this->load->view('Admin/cServices',$data,true);
		
		$pdfFilePath = "Daftar Keluhan.pdf";
		$pdf = $this->m_pdf->load();
		$pdf->WriteHTML($html);
		$pdf->Output($pdfFilePath, "D");
	}
	
	function hservices(){
		$id = $this->uri->segment(3);
		$this->ModAdmin->hservices($id);
		echo "<script>alert('Services berhasiil dihapus')
					location.href='../service'</script>";
	}
	function hPelangan(){
		$id = $this->uri->segment(3);
		$this->ModAdmin->hPelanggan($id);
		echo "<script>alert('Pelanggan berhasiil dihapus')
					location.href='../daftarPelanggan'</script>";
	}
}



?>