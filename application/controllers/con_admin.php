<?php

class con_admin extends CI_Controller{

	function __construct(){
		parent::__construct();
		if ($this->session->userdata('username')=="") {
			redirect('con_login');
		}
		$timeout = 10; // Set timeout menit
		$timeout = $timeout * 60; // Ubah menit ke detik
		if (isset($_SESSION['start_time'])) {
		    $elapsed_time = time() - $_SESSION['start_time'];
		    if ($elapsed_time >= $timeout) {
		        session_destroy();
		        echo "<script>alert('Sesion Habis')</script>";
		        redirect('con_login');
		    }
		}
		$_SESSION['start_time'] = time();
		$this->load->model(array('modAdmin','modWeb','mod_login'));
	}
	function dialog(){
		if(isset($_POST['post'])){
			$idp = $this->input->post('pro');
			$komen = $this->input->post('komentar');
			if($komen==""){
				echo "<script>alert('Isi dahulu Komentar !!')
		      		location.href='./dialog/$idp'</script>";
			}else{
				$data = array('idService'=>$idp,'Komentar'=>$komen);
					$this->modAdmin->dialogin($data);
					$this->modAdmin->updateServic(2,$idp);
				echo "<script>alert('Pelanggan berhasil ditanggapi')
			      location.href='./service/$idp'</script>";
			}
		}else{
			$id = $this->uri->segment(3);
			$data['isi'] = $this->modAdmin->getservices($id)->row_array();
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
					$this->modWeb->tambahKomentar($data);
				echo "<script>alert('Komentar Berhasil ditambahkan')
			      location.href='./komentar/$idp'</script>";
			}
		}else{
			$id = $this->uri->segment(3);
			$data['id'] = $id;
			$data['isi'] = $this->modWeb->fullKomentar($id);
			$data['pr'] = $this->modWeb->produkOne($id)->row_array();;
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
				$this->modWeb->komunitas($data);
				echo "<script>alert('Komentar Berhasil ditambahkan')
			      location.href=''</script>";
			}
		}else{
			$data['isi'] = $this->modWeb->tampilkomunitasfull();
			$this->template->load('Template_ADMIN','Admin/komunitas',$data);
		}
	}
	function hapusKomentar(){
		$id = $this->uri->segment(3);
		$this->modAdmin->haKomunitas($id);
		echo "<script>alert('Komentar Berhasil dihapus')
			      location.href='../komunitas'</script>";
	}
	function hapusKomentarProduk(){
		if(isset($_POST['post'])){
			$id = $this->input->post('idpe');
			$idp = $this->input->post('pro');
			$this->modAdmin->haKomunitasProduk($id);
			echo "<script>alert('Komentar Berhasil dihapus')
				      location.href='../con_admin/komentar/$idp'</script>";
		}
		
	}
	function statusProduk(){
		$id = $this->uri->segment(3);
		$this->modAdmin->statusproduk($id);
		echo "<script>alert('Status Berhasil diubah')
			location.href='../tampilProduk'</script>";
	}
	function statusGambar(){
		$id = $this->uri->segment(3);
		$this->modAdmin->statusGambar($id);
		echo "<script>alert('Status Berhasil diubah')
			location.href='../tampilPicture'</script>";
	}
	function hapusGambar(){
		$id = $this->uri->segment(3);
		$this->modAdmin->hapusGambar($id);
		echo "<script>alert('Data Berhasil dihapus')
			location.href='../tampilPicture'</script>";
	}
	function hapusProduk(){
		$id = $this->uri->segment(3);
		$this->modAdmin->hapusProduk($id);
		echo "<script>alert('Data Berhasil dihapus')
			location.href='../tampilProduk'</script>";
	}
	function hapusClipping(){
		$id = $this->uri->segment(3);
		$this->modAdmin->hapusClipping($id);
		echo "<script>alert('Data Berhasil dihapus')
			location.href='../tampilClipig'</script>";
	}
	function hapusContent(){
		$id = $this->uri->segment(3);
		$this->modAdmin->hapusContent($id);
		echo "<script>alert('Data Berhasil dihapus')
			location.href='../tampilContent'</script>";	
	}

	function tampilProduk(){
		$data['isi'] = $this->modAdmin->tampilProduk();
		$this->template->load('Template_ADMIN','Admin/tampilProduk',$data);
	}
	function tampilPicture(){
		$data['isi'] = $this->modAdmin->tampilGambar();
		$this->template->load('Template_ADMIN','Admin/tampilPicture',$data);
	}
	function tampilClipig(){
		$data['isi'] = $this->modAdmin->tampilClipping();
		$this->template->load('Template_ADMIN','Admin/tampilcliping',$data);
	}
	function tampilContent(){
		$data['isi'] = $this->modAdmin->tampilContent();
		$this->template->load('Template_ADMIN','Admin/tampilcontent',$data);	
	}
	function pelanggan(){
		if(isset($_POST['post'])){
			$nama = $this->input->post('nama');
			$alamat = $this->input->post('alamat');
			$telp = $this->input->post('telepon');
			if($nama ==""|| $alamat =="" || $telp ==""){
			echo "<script>alert('Data Masih Kosong')
					location.href='../conWeb/produk'</script>";
			}else{
				$kod = $this->modAdmin->kodepelanggan();
				$data = array('kodePelanggan'=>$kod,'NamaPelanggan'=>$nama,'Alamat'=>$alamat,'Telpon'=>$telp);
				$this->modAdmin->pelanggan($data);
				echo "<script>alert('Pelanggan Berhasil ditambahkan')
					location.href='../conWeb/produk'</script>";
			}
		}
	}
	function daftarPelanggan(){
		$data['isi'] = $this->modAdmin->tampilPelanggan();
		$this->template->load('Template_ADMIN','Admin/pelanggan',$data);
	}
	function cPelangan(){
		$data['isi'] = $this->modAdmin->tampilPelanggan();
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

					$this->modAdmin->cliping($dataGambar);
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

					$this->modAdmin->vidio($data);
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
					location.href='con_admin'</script>";
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
					location.href='con_admin'</script>";
				} else {
					$imgUpload = $this->upload->data();
					$img= $imgUpload['file_name'];
					$id = '2';
					$dataGambar = array('namaGambar'=>$jud,'Gambar'=>$img,'JenisGambar'=>$jenis,'Keterangan'=>$ket,'Status'=>$id);

					$this->modAdmin->gambar($dataGambar);
					echo "<script>alert('Data Berhasil Ditambahkan')
					location.href='con_admin'</script>";
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

					$this->modAdmin->content($dataContent);
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
					$this->modAdmin->uContent($dataContent,$ids);
					echo "<script>alert('Content Berhasil Diubah')
					location.href='tampilContent'</script>";
		    	}
			}			

		}else{
			$id = $this->uri->segment(3);
			$data['ids'] = $id;
			$data['isi'] = $this->modAdmin->getContent($id)->row_array();
			$this->template->load('Template_ADMIN','Admin/uContent',$data);
		}	
	}
	function user(){
		$data['isi'] = $this->mod_login->tUser();
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
					$this->mod_login->iUser($data);
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
		$this->mod_login->dUser($id);
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
					$this->mod_login->uUser($data,$id);
					echo "<script>alert('Username Berhasil diubah')
					location.href='user'</script>";
				}else{
					echo "<script>alert('Passwod tidak cocok')
					location.href=''</script>";
				}
			}
		}else{
			$id = $this->uri->segment(3);
			$data['isi']=$this->mod_login->gUser($id)->row_array();
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

					$this->modAdmin->produk($dataGambar);
					echo "<script>alert('Produk Berhasil Ditambahkan')
					location.href=''</script>";
		    	}
			}
			

		}else{
			$this->template->load('Template_ADMIN','Admin/produk');
		}
	}
	function service(){
		$data['isi'] = $this->modAdmin->service();
		$this->template->load('Template_ADMIN','Admin/service',$data);
	}
	function Cservice(){
		$data['isi'] = $this->modAdmin->service();
		$html = $this->load->view('Admin/cServices',$data,true);
		
		$pdfFilePath = "Daftar Keluhan.pdf";
		$pdf = $this->m_pdf->load();
		$pdf->WriteHTML($html);
		$pdf->Output($pdfFilePath, "D");
	}
	
	function hservices(){
		$id = $this->uri->segment(3);
		$this->modAdmin->hservices($id);
		echo "<script>alert('Services berhasiil dihapus')
					location.href='../service'</script>";
	}
	function hPelangan(){
		$id = $this->uri->segment(3);
		$this->modAdmin->hPelanggan($id);
		echo "<script>alert('Pelanggan berhasiil dihapus')
					location.href='../daftarPelanggan'</script>";
	}
}



?>