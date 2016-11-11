<?php

class ConWeb extends CI_Controller{
	
	function __construct(){
		parent::__construct();
		$this->load->model(array('ModWeb','ModAdmin'));
	}

	function event(){
		$id = $this->uri->segment(3);
		$data['d'] =$this->ModWeb->eventOne($id)->row_array();
		$this->template->load('Template','Website/event',$data);
	}
	function pers(){
		$id = $this->uri->segment(3);
		$data['d'] =$this->ModWeb->pers($id)->row_array();
		$this->template->load('Template','Website/pers',$data);
	}
	function komunitas(){
		if(isset($_POST['post'])){
			$nama = $this->input->post('pelanggan');
			$id = $this->input->post('idpel');
			if($nama==""){
				echo "<script>alert('Nama pelanggan masih kosong')
			      location.href='komunitas'</script>";
			}else{
				if($id==""){
					echo "<script>alert('Anda belum menjadi pelanggan, silakan daftar terlebih dahulu !!')
		      		location.href='produk'</script>";
				}else{
					echo "<script>alert('Selamat Datang $nama , di Komunitas TVS Motor Lampung')
			      	location.href='Kkomunitas/$id'</script>";
				}
			}
		}else{
			$tgl = getdate();
			$tahun = $tgl['year'];
			$data['tahun'] = $tahun;
			$data['isi'] = $this->ModWeb->cliping();
			$this->template->load('Template','Website/komunitas',$data);
		}
	}
	function Kkomunitas(){
		$id = $this->uri->segment(3);
		if(isset($_POST['post'])){
			$idpel = $this->input->post('idpel');
			$komen = $this->input->post('komen');
			if($idpel==""){
				echo "<script>alert('Anda belum menjadi pelanggan, silakan daftar terlebih dahulu !!')
		      		location.href='produk'</script>";
			}else{
				$data = array('kodePelanggan'=>$idpel,'komentar'=>$komen);
				$this->ModWeb->komunitas($data);
				echo "<script>alert('Komentar Berhasil ditambahkan')
			      location.href='Kkomunitas/$idpel'</script>";
			}
		}else if(isset($_POST['tampil'])){
			$idpel = $this->input->post('idpel');
			echo "<script>location.href='komunitasfull/$idpel'</script>";
		}else{
			$data['idpel'] = $id;
			$data['jum'] = $this->ModWeb->tampilkomunitasfull()->num_rows();
			$data['Koment'] = $this->ModWeb->tampilkomunitas();
			$this->template->load('Template','Website/Kkomunitas',$data);
		}
	}
	function komunitasfull(){
		$data['idpel'] = $this->uri->segment(3);
		$data['jum'] = $this->ModWeb->tampilkomunitasfull()->num_rows();
		$data['Koment'] = $this->ModWeb->tampilkomunitasfull();
		$this->template->load('Template','Website/Kkomunitas',$data);
	}
	function index(){
		$data['isi'] = $this->ModWeb->awal();
		$this->template->load('Template','Website/awal',$data);
	}
	function korporat(){
		$this->template->load('Template','Website/korporat');	
	}
	function produk(){
		if(isset($_POST['post'])){
			$id = $this->input->post('cari');

			$hsl = $this->ModWeb->produkCari($id);
			if($hsl->num_rows()>0){
				$data['d'] = $this->ModAdmin->kodepelanggan();
				$data['isi'] = $this->ModWeb->produkCari($id);
		        $this->template->load('Template','Website/produk',$data);
			}else{
				echo "<script>alert('Produk Tidak Ditemukan')
			      location.href='produk'</script>";
			}
		}else{
			$data['d'] = $this->ModAdmin->kodepelanggan();
			$data['isi'] = $this->ModWeb->produk();
			$this->template->load('Template','Website/produk',$data);	
		}
			
	}

	function pelanggan(){
		if(isset($_POST['post'])){
			$nama = $this->input->post('nama');
			$alamat = $this->input->post('alamat');
			$telp = $this->input->post('telepon');
			if($nama ==""|| $alamat =="" || $telp ==""){
			echo "<script>alert('Data Masih Kosong')
					location.href='../ConWeb/produk'</script>";
			}else{
				$kod = $this->ModAdmin->kodepelanggan();
				$data = array('kodePelanggan'=>$kod,'NamaPelanggan'=>$nama,'Alamat'=>$alamat,'Telpon'=>$telp);
				$this->ModAdmin->pelanggan($data);
				echo "<script>alert('Pelanggan Berhasil ditambahkan')
					location.href='../ConWeb/produk'</script>";
			}
		}
	}
	
	function komentar(){
		if(isset($_POST['post'])){
			$kodePelanggan = $this->input->post('idPelanggan');
			$komentar = $this->input->post('komen');
			$idp = $this->input->post('idProduk');
			if($komentar == ""){
				echo "<script>alert('Terdapat data yang kosong')
			      location.href='komentar/$idp'</script>";
			}else{
				if($kodePelanggan==""){
					echo "<script>alert('Anda belum menjadi pelanggan, silakan daftar terlebih dahulu !!')
			      		location.href='produk'</script>";

				}else{
					$data = array('idProduk'=>$idp,'kodePelanggan'=>$kodePelanggan,'komentar'=>$komentar);
					$this->ModWeb->tambahKomentar($data);
					echo "<script>alert('Komentar Berhasil')
			      	location.href='komentar/$idp'</script>";
				}
			}
		}else if(isset($_POST['tampil'])){
			$idp = $this->input->post('idProduk');
			$data['Koment'] = $this->ModWeb->fullKomentar($idp);
			$data['jum'] = $this->ModWeb->fullKomentar($idp)->num_rows();
			$data['isi'] = $this->ModWeb->produkOne($idp)->row_array();
			$this->template->load('Template','Website/komentar',$data);	
		}else{
			$id = $this->uri->segment(3);
			$data['Koment'] = $this->ModWeb->komentarLimit($id);
			$data['jum'] = $this->ModWeb->fullKomentar($id)->num_rows();
			$data['isi'] = $this->ModWeb->produkOne($id)->row_array();
			$this->template->load('Template','Website/komentar',$data);	
		}
	}
	
	function bisnis(){
		$data['isi'] = $this->ModWeb->galeri();
		$this->template->load('Template','Website/bisnis',$data);
	}
	function media(){
		$tgl = getdate();
		$tahun = $tgl['year'];
		$data['tahun'] = $tahun;
		$data['isi'] = $this->ModWeb->cliping();
		$data['data'] = $this->ModAdmin->tampilContent();
		$data['eve'] = $this->ModWeb->event();
		$this->template->load('Template','Website/media',$data);
	}
	function dCliping(){
		$id = $this->uri->segment(3);
		$gambar = $this->ModAdmin->getClipping($id);
		$data = file_get_contents(base_url()."/assets/Upload/".$gambar);
		$path = "Cliping.jpg";
		force_download($path,$data);
	}
	function services(){
		if(isset($_POST['submit'])){
			$id = $this->input->post('idPelanggan');
			$tahun = $this->input->post('tahun');
			$jenis = $this->input->post('jenis');
			$keluhan = $this->input->post('keluhan');
			$tes = $this->input->post('jcliping');
			$st = 1;
			if($tahun=="" || $jenis=="" || $keluhan=="" || $tes==""){
				echo "<script>alert('Terdapat data yang kosong')
				      location.href='services'</script>";
			}else{
				if($id==""){
					echo "<script>alert('Anda belum menjadi pelanggan, silakan daftar terlebih dahulu !!')
		      		location.href='produk'</script>";
				}else{
					$data = array('kodePelanggan'=>$id,'tahun'=>$tahun,'jenis'=>$jenis,'keluahan'=>$keluhan,'status'=>$st);
					$this->ModWeb->service($data);
					echo "<script>alert('Terimakasih, keluhan anda akan segera kami proses')
			      	location.href='services'</script>";
				}
			}
			
		}elseif (isset($_POST['post'])) {
			$kod = $this->input->post('cari');
			$id = $this->input->post('kode');
			if($kod==""){
				echo "<script>alert('Terdapat data yang kosong')
				      location.href='services'</script>";
			}else{
				if($id==""){
				echo "<script>alert('Anda belum terdaftar')
				      location.href='produk'</script>";
				}else{
					$data['x'] = $this->ModWeb->getdialog($id);
					$data['y'] = "Keluhan,";
					$data['z'] = "Tanggapan Admin,";
					$tgl = getdate();
					$tahun = $tgl['year'];
					$data['tahun'] = $tahun;
					$data['isi'] = $this->ModWeb->cliping();
					$data['data'] = $this->ModAdmin->tampilContent();
					$this->template->load('Template','Website/cService',$data);
				}
			}
		
		}
		else{
			$tgl = getdate();
			$tahun = $tgl['year'];
			$data['tahun'] = $tahun;
			$data['isi'] = $this->ModWeb->cliping();
			$data['data'] = $this->ModAdmin->tampilContent();
			$this->template->load('Template','Website/services',$data);
		}
	}

}
?>