<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class Dashboard extends CI_Controller {
        public function __construct() {
            parent::__construct();

            $this->load->model(array('Dashboard2_model','Tentor_model'));
            $this->simple_login->cek_login();
        }

        public function index() {
            $data = array(
                'jumlah_tentor' => $this->Dashboard2_model->get_all_data_tentor(),
                'jumlah_transaksi' => $this->Dashboard2_model->get_all_data_transaksi(),
                'data_tentor'   => $this->Tentor_model->get_all_data($this->session->userdata('id_tentor')),
                'jumlah_pendapatan' => $this->Dashboard2_model->get_all_data_pendapatan(),
                'jumlah_murid' => $this->Dashboard2_model->get_all_data_murid()
            );

            $this->template->set('title', 'Dashboard');
            $this->template->load('index2', 'contents' , 'Dashboard/dashboard',$data);
        }


    
}
