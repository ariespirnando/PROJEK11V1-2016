<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class IncPelanggan extends CI_Controller
{
 
    public function __construct() {
        parent::__construct();
        $this->load->model('modAdmin'); 
    }
 
    public function get_all() {
        $kode = strtolower($_GET['term']);  
        $query = $this->modAdmin->cariPelanggan($kode); 
 
        $kota       =  array();
        foreach ($query->result() as $d) {
            if($d->kodePelanggan!='PL1000001'){
                $kota[]     = array(
                    'label' => $d->NamaPelanggan,
                    'kodePelanggan' => $d->kodePelanggan,
                    'NamaPelanggan' => $d->NamaPelanggan
                );
            }
        }
        echo json_encode($kota);      //data array yang telah kota deklarasikan dibawa menggunakan json
    }
}
 