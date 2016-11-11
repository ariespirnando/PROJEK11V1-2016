<?php

class Con_login extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
        $this->load->model(array('Mod_login'));	
	}
	function index(){
        //$this->load->view('Admin/login');
		if(isset($_POST['post'])){
			$user = $this->input->post('Username');
			$pass = $this->input->post('Password');
			//$pass1 = md5($pass);
			$data = array('username' => $user, 'password'=> md5($pass));
			$log=  $this->Mod_login->login($data);
            if($log->num_rows()==1)
            {
            	//echo $user."<br>";
				//echo $pass1;
            	    foreach ($log->result() as $sess) {
                    $sess_data['logged_in'] = 'Sudah Loggin';
                    $sess_data['id_user'] = $sess->id;
                    $sess_data['username'] = $sess->username;
                    $this->session->set_userdata($sess_data);
                    }

                    echo "<script>alert('Welcome In Dasboard TVS Motor')
                    location.href='Con_admin/tampilPicture'</script>";
            }else{
                	echo "<script>alert('Password Tidak ada')
                    location.href='Con_login'</script>";
            }
		}else{
			$this->load->view('Admin/login');
		}		
	}
    function logout()
    {
        $this->session->unset_userdata('username');
        session_destroy();
         echo "<script>alert('Terimakasih sudah menggunakan aplikasi Ini :)')
                    location.href='../ConWeb'</script>";
    }   
}
?>