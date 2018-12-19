<?php if(! defined('BASEPATH')) exit('Akses langsung tidak diperbolehkan'); 

class Simple_login {
	// SET SUPER GLOBAL
	var $CI = NULL;
	public function __construct() {
		$this->CI =& get_instance();
	}
	// Fungsi login
	public function login($username, $password) {
		$query = $this->CI->db->get_where('admin ',array('username'=>$username,'password' => md5($password)));
		if($query->num_rows() == 1) {
			$query2 	= $this->CI->db->query('SELECT username FROM admin where username = "'.$username.'"');
			$admin 	= $query2->row();
			//$email	= $admin->email;

			$this->CI->session->set_userdata('akses', '1');
			$this->CI->session->set_userdata('username', $username);
			$this->CI->session->set_userdata('id_login', uniqid(rand()));
			//$this->CI->session->set_userdata('email', $email);
			redirect('/dashboard/');
		}else{
			$this->CI->session->set_flashdata('sukses','Oops... Username/password salah');
			redirect('/login/');
		}
		return false;

		/*$data_akun = array(
                'username' => $username
            );
            
            $cek_akun = $this->CI->db->select('username, password, id_admin')
                                     ->from('admin')
                                     ->where($data_akun);

            $row      = $cek_akun->get()->result_array();
            $verify   = md5($password);
			// echo "<p style='font-size: 12em'>" . $cek_akun->count_all_results() . "</p>";
			print_r($row);

			if ( $cek_akun->count_all_results() === 1 && $verify ) {
				$this->CI->session->set_userdata('nama', $row[0]['nama']);
				$this->CI->session->set_userdata('id', $row[0]['id']);
				$this->CI->session->set_userdata('user_type', 'Admin');
				
				redirect('/dashboard');

			} else {
				$this->CI->session->set_flashdata('sukses', 'Oops... Username/Password salah');

				redirect('/login');
			}
			return false;*/
	}
	public function logintentor($email, $password) {
		$query = $this->CI->db->get_where('tentor',array('email'=>$email,'password' => md5($password)));
		if($query->num_rows() > 0) {

			$data=$query->row_array();

				$this->CI->session->set_userdata('akses','2');
                    $this->CI->session->set_userdata('ses_id',$data['id_tentor']);
                    $this->CI->session->set_userdata('username',$data['nama_tentor']);
                    redirect('/dashboardpeserta/');
			

			/*$query2 	= $this->CI->db->query('SELECT nama_tentor FROM tentor where nama_tentor = "'.$username.'"');
			$query3 	= $this->CI->db->query('SELECT id_tentor FROM tentor where nama_tentor = "'.$username.'"');
			$admin 	= $query2->row();
			$id_tentor	= $admin->id_tentor;
			$this->CI->session->set_userdata('username', $username);

			$this->CI->session->set_userdata('id_tentor', $id_tentor);
			$this->CI->session->set_userdata('id_login', uniqid(rand()));
			//$this->CI->session->set_userdata('email', $email);
			redirect('/dashboard/');*/
		}else{
			$this->CI->session->set_flashdata('sukses','Oops... Username/password salah');
			redirect('/tentor/login/');
		}
		return false;

		
	}

	
	// Proteksi halaman
	public function cek_login() {
		if($this->CI->session->userdata('username') == '') {
			$this->CI->session->set_flashdata('sukses','Anda belum login');
			redirect('admin/login/');
		}
	}
	// Fungsi logout
	public function logout() {
		$this->CI->session->unset_userdata('username');
		$this->CI->session->unset_userdata('id_login');
		$this->CI->session->unset_userdata('foto_profil');
		//$this->CI->session->unset_userdata('email');
		$this->CI->session->set_flashdata('sukses','Anda berhasil logout');
		redirect('tentor/login/');
	}
}