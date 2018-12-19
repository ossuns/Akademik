<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	  public function __construct()
    {
        parent::__construct();
        $this->load->helper(array('form', 'url', 'html'));

        $this->load->model('Tentor_model');
        $this->load->library(array('simple_login','session','form_validation','table'));
        $this->load->database();
         //$this->simple_login->cek_login();
    }
	
	// Index login
	public function index() {
		// Fungsi Login
		$valid = $this->form_validation;
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$valid->set_rules('username','Username','required');
		$valid->set_rules('password','Password','required');
		
		if($valid->run()) {
			
			$this->simple_login->login($username, $password);
		}
		// End fungsi login
		$data = array(	'title'	=> 'Halaman Login Administrator');
		$this->load->view('layouts/login',$data);
	}

	public function login_tentor() {
		// Fungsi Login tentor
		$valid = $this->form_validation;
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$valid->set_rules('username','Username','required');
		$valid->set_rules('password','Password','required');
		
		if($valid->run()) {
			
			$this->simple_login->logintentor($username, $password);
		}
		// End fungsi login
		$data = array(	'title'	=> 'Halaman Login Administrator');
		$this->load->view('layouts/logintentor',$data);
	}
	

	public function regis_tentor() {
		// Fungsi Login
		



		$valid = $this->form_validation;
		/*$username = $this->input->post('username');
		$password = $this->input->post('password');
		$email = $this->input->post('email');
		$ktp = $this->input->post('ktp');
		$telpon = $this->input->post('telpon');*/
		$enkrip=md5($this->input->post('password'));

		$data = array(
		'nama_tentor' => $this->input->post('username', TRUE),
		'password' => $enkrip,
		'email' =>  $this->input->post('email', TRUE),
		'no_ktp' =>  $this->input->post('ktp', TRUE),
		'no_telp' =>  $this->input->post('telpon', TRUE),
	    );

		$valid->set_rules('username','Username','required');
		$valid->set_rules('password','Password','required');
		$valid->set_rules('email','EMail','required');
		$valid->set_rules('ktp','ktp','required');
		$valid->set_rules('telpon','telpon','required');
		
		if($valid->run()) {
			
			$this->Tentor_model->register_tentor($data);
			redirect('/tentor/login');
		}
		// End fungsi login
		$data = array(	'title'	=> 'Registrasi Menjadi Tentor');
		$this->load->view('layouts/register',$data);
	}

	// Logout di sini
	public function logout() {
		$this->simple_login->logout();	
	}	
}