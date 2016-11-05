<?php

class conWeb extends CI_Controller{
	
	function __construct(){
		parent::__construct();
		$this->load->model(array('modWeb','modAdmin'));
	}

	function event(){
		$id = $this->uri->segment(3);
		$data['d'] =$this->modWeb->eventOne($id)->row_array();
		$this->template->load('Template','Website/event',$data);
	}
	function pers(){
		$id = $this->uri->segment(3);
		$data['d'] =$this->modWeb->pers($id)->row_array();
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
			$data['isi'] = $this->modWeb->cliping();
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
				$this->modWeb->komunitas($data);
				echo "<script>alert('Komentar Berhasil ditambahkan')
			      location.href='Kkomunitas/$idpel'</script>";
			}
		}else if(isset($_POST['tampil'])){
			$idpel = $this->input->post('idpel');
			echo "<script>location.href='komunitasfull/$idpel'</script>";
		}else{
			$data['idpel'] = $id;
			$data['jum'] = $this->modWeb->tampilkomunitasfull()->num_rows();
			$data['Koment'] = $this->modWeb->tampilkomunitas();
			$this->template->load('Template','Website/Kkomunitas',$data);
		}
	}
	function komunitasfull(){
		$data['idpel'] = $this->uri->segment(3);
		$data['jum'] = $this->modWeb->tampilkomunitasfull()->num_rows();
		$data['Koment'] = $this->modWeb->tampilkomunitasfull();
		$this->template->load('Template','Website/Kkomunitas',$data);
	}
	function index(){
		$data['isi'] = $this->modWeb->awal();
		$this->template->load('Template','Website/awal',$data);
	}
	function korporat(){
		$this->template->load('Template','Website/korporat');	
	}
	function produk(){
		if(isset($_POST['post'])){
			$id = $this->input->post('cari');

			$hsl = $this->modWeb->produkCari($id);
			if($hsl->num_rows()>0){
				$data['isi'] = $this->modWeb->produkCari($id);
		        $this->template->load('Template','Website/produk',$data);
			}else{
				echo "<script>alert('Produk Tidak Ditemukan')
			      location.href='produk'</script>";
			}
		}else{
			$data['d'] = $this->modAdmin->kodepelanggan();
			$data['isi'] = $this->modWeb->produk();
		    $this->template->load('Template','Website/produk',$data);	
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
					$this->modWeb->tambahKomentar($data);
					echo "<script>alert('Komentar Berhasil')
			      	location.href='komentar/$idp'</script>";
				}
			}
		}else if(isset($_POST['tampil'])){
			$idp = $this->input->post('idProduk');
			$data['Koment'] = $this->modWeb->fullKomentar($idp);
			$data['jum'] = $this->modWeb->fullKomentar($idp)->num_rows();
			$data['isi'] = $this->modWeb->produkOne($idp)->row_array();
			$this->template->load('Template','Website/komentar',$data);	
		}else{
			$id = $this->uri->segment(3);
			$data['Koment'] = $this->modWeb->komentarLimit($id);
			$data['jum'] = $this->modWeb->fullKomentar($id)->num_rows();
			$data['isi'] = $this->modWeb->produkOne($id)->row_array();
			$this->template->load('Template','Website/komentar',$data);	
		}
	}
	
	function bisnis(){
		$data['isi'] = $this->modWeb->galeri();
		$this->template->load('Template','Website/bisnis',$data);
	}
	function media(){
		$tgl = getdate();
		$tahun = $tgl['year'];
		$data['tahun'] = $tahun;
		$data['isi'] = $this->modWeb->cliping();
		$data['data'] = $this->modAdmin->tampilContent();
		$data['eve'] = $this->modWeb->event();
		$this->template->load('Template','Website/media',$data);
	}
	function dCliping(){
		$id = $this->uri->segment(3);
		$gambar = $this->modAdmin->getClipping($id);
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
					$this->modWeb->service($data);
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
					$data['x'] = $this->modWeb->getdialog($id);
					$data['y'] = "Keluhan,";
					$data['z'] = "Tanggapan Admin,";
					$tgl = getdate();
					$tahun = $tgl['year'];
					$data['tahun'] = $tahun;
					$data['isi'] = $this->modWeb->cliping();
					$data['data'] = $this->modAdmin->tampilContent();
					$this->template->load('Template','Website/cService',$data);
				}
			}
		
		}
		else{
			$tgl = getdate();
			$tahun = $tgl['year'];
			$data['tahun'] = $tahun;
			$data['isi'] = $this->modWeb->cliping();
			$data['data'] = $this->modAdmin->tampilContent();
			$this->template->load('Template','Website/services',$data);
		}
	}

}
?>