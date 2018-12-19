<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Kursus extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Kursus_model');
        $this->load->library('form_validation');
         $this->simple_login->cek_login();
    }

    public function index()
    {
        $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->input->get('start'));
        
        if ($q <> '') {
            $config['base_url'] = base_url() . 'kursus/index.html?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'kursus/index.html?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'kursus/index.html';
            $config['first_url'] = base_url() . 'kursus/index.html';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = TRUE;
        $config['total_rows'] = $this->Kursus_model->total_rows($q);
        $kursus = $this->Kursus_model->get_limit_data($config['per_page'], $start, $q);

        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            'kursus_data' => $kursus,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
        );
        //$this->load->view('kursus/kursus_list', $data);

        $this->template->set('title', '');
        $this->template->load('index2', 'contents' , 'kursus/kursus_list', $data);
    }
    public function data_tentor()
    {
        $id=$this->session->userdata('ses_id');
        $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->input->get('start'));
        
        if ($q <> '') {
            $config['base_url'] = base_url() . 'kursus/index.html?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'kursus/index.html?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'kursus/index.html';
            $config['first_url'] = base_url() . 'kursus/index.html';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = TRUE;
        $config['total_rows'] = $this->Kursus_model->total_rows_tentor($id,$q);
        $kursus = $this->Kursus_model->get_limit_data_tentor($id,$config['per_page'], $start, $q);

        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            'kursus_data' => $kursus,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
            'id' => $id,
        );
        //$this->load->view('kursus/kursus_list', $data);

        $this->template->set('title', '');
        $this->template->load('index2', 'contents' , 'kursus/kursus_list_tentor', $data);
    }

    public function list_ajax()
    {
        $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->input->get('start'));
        
        if ($q <> '') {
            $config['base_url'] = base_url() . 'kursus/index.html?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'kursus/index.html?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'kursus/index.html';
            $config['first_url'] = base_url() . 'kursus/index.html';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = TRUE;
        $config['total_rows'] = $this->Kursus_model->total_rows($q);
        $kursus = $this->Kursus_model->get_limit_data($config['per_page'], $start, $q);

        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            'kursus_data' => $kursus,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
        );
        $this->load->view('kursus/kursus_list_ajax', $data);
/*
        $this->template->set('title', '');
        $this->template->load('index2', 'contents' , 'kursus/kursus_list', $data);*/
    }

    public function list_ajax_tentor()
    {
        $id=$this->session->userdata('ses_id');
        $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->input->get('start'));
        
        if ($q <> '') {
            $config['base_url'] = base_url() . 'kursus/index.html?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'kursus/index.html?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'kursus/index.html';
            $config['first_url'] = base_url() . 'kursus/index.html';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = TRUE;
        $config['total_rows'] = $this->Kursus_model->total_rows_tentor($id,$q);
        $kursus = $this->Kursus_model->get_limit_data_tentor($id,$config['per_page'], $start, $q);

        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            'kursus_data' => $kursus,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
            'id' => $id,
        );
        $this->load->view('kursus/kursus_list_ajax_tentor', $data);

        /*$this->template->set('title', '');
        $this->template->load('index2', 'contents' , 'kursus/kursus_list_tentor', $data);*/
    }

    

    public function read($id) 
    {
        $row = $this->Kursus_model->get_by_id($id);
        if ($row) {
            $data = array(
		'id_kursus' => $row->id_kursus,
		'Id_murid' => $row->Id_murid,
		'id_mengajar' => $row->id_mengajar,
		'harga_total' => $row->harga_total,
		'status_bayar' => $row->status_bayar,
		'status_les' => $row->status_les,
		'jumlah_pertemuan' => $row->jumlah_pertemuan,
	    );
           // $this->load->view('kursus/kursus_read', $data);
            $this->template->set('title', '');
        $this->template->load('index2', 'contents' , 'kursus/kursus_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('kursus'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('kursus/create_action'),
	    'id_kursus' => set_value('id_kursus'),
	    'Id_murid' => set_value('Id_murid'),
	    'id_mengajar' => set_value('id_mengajar'),
	    'harga_total' => set_value('harga_total'),
	    'status_bayar' => set_value('status_bayar'),
	    'status_les' => set_value('status_les'),
	    'jumlah_pertemuan' => set_value('jumlah_pertemuan'),
	);
        $this->template->set('title', '');
        $this->template->load('index2', 'contents' , 'kursus/kursus_form', $data);
        //$this->load->view('kursus/kursus_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'Id_murid' => $this->input->post('Id_murid',TRUE),
		'id_mengajar' => $this->input->post('id_mengajar',TRUE),
		'harga_total' => $this->input->post('harga_total',TRUE),
		'status_bayar' => $this->input->post('status_bayar',TRUE),
		'status_les' => $this->input->post('status_les',TRUE),
		'jumlah_pertemuan' => $this->input->post('jumlah_pertemuan',TRUE),
	    );

            $this->Kursus_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('kursus'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Kursus_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('kursus/update_action'),
		'id_kursus' => set_value('id_kursus', $row->id_kursus),
		'Id_murid' => set_value('Id_murid', $row->Id_murid),
		'id_mengajar' => set_value('id_mengajar', $row->id_mengajar),
		'harga_total' => set_value('harga_total', $row->harga_total),
		'status_bayar' => set_value('status_bayar', $row->status_bayar),
		'status_les' => set_value('status_les', $row->status_les),
		'jumlah_pertemuan' => set_value('jumlah_pertemuan', $row->jumlah_pertemuan),
	    );
           // $this->load->view('kursus/kursus_form', $data);
            $this->template->set('title', '');
        $this->template->load('index2', 'contents' , 'kursus/kursus_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('kursus'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id_kursus', TRUE));
        } else {
            $data = array(
		'Id_murid' => $this->input->post('Id_murid',TRUE),
		'id_mengajar' => $this->input->post('id_mengajar',TRUE),
		'harga_total' => $this->input->post('harga_total',TRUE),
		'status_bayar' => $this->input->post('status_bayar',TRUE),
		'status_les' => $this->input->post('status_les',TRUE),
		'jumlah_pertemuan' => $this->input->post('jumlah_pertemuan',TRUE),
	    );

            $this->Kursus_model->update($this->input->post('id_kursus', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('kursus'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Kursus_model->get_by_id($id);

        if ($row) {
            $this->Kursus_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('kursus'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('kursus'));
        }
    }

    public function map($alamat_tentor, $alamat_murid){
        $data = array(
        'alamat_tentor' => $alamat_tentor,
        'alamat_murid' => $alamat_murid,
        );
        $this->load->view('map/map2', $data);
        /*$this->template->set('title', '');
        $this->template->load('index2', 'contents' , 'map/map2', $data);*/

    }

    public function aktifasi_bayar_les($id){
         $row= $this->Kursus_model->aktifkan_status_bayar($id);
        redirect(site_url('kursus/data_tentor'));
    }
     public function aktifasi_status_les($id){
         $row= $this->Kursus_model->aktifkan_status_les($id);
        redirect(site_url('kursus/data_tentor'));
    }
     public function aktifasi_status_booking($id){
         $row= $this->Kursus_model->aktifkan_status_booking($id);
        redirect(site_url('kursus/data_tentor'));
    }
    public function tolak_status_booking($id){
         $row= $this->Kursus_model->tolak_status_booking($id);
        redirect(site_url('kursus/data_tentor'));
    }
    public function chart(){
        $data = [];
        $data['data_grafik'] = json_encode($this->Kursus_model->get_data_for_grafik(date('Y')));

        $this->template->set('title', '');
        $this->template->load('index2', 'contents' , 'chart/chartjs', $data);
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('Id_murid', 'id murid', 'trim|required');
	$this->form_validation->set_rules('id_mengajar', 'id mengajar', 'trim|required');
	$this->form_validation->set_rules('harga_total', 'harga total', 'trim|required');
	$this->form_validation->set_rules('status_bayar', 'status bayar', 'trim|required');
	$this->form_validation->set_rules('status_les', 'status les', 'trim|required');
	$this->form_validation->set_rules('jumlah_pertemuan', 'jumlah pertemuan', 'trim|required');

	$this->form_validation->set_rules('id_kursus', 'id_kursus', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

    public function excel()
    {
        $this->load->helper('exportexcel');
        $namaFile = "kursus.xls";
        $judul = "kursus";
        $tablehead = 0;
        $tablebody = 1;
        $nourut = 1;
        //penulisan header
        header("Pragma: public");
        header("Expires: 0");
        header("Cache-Control: must-revalidate, post-check=0,pre-check=0");
        header("Content-Type: application/force-download");
        header("Content-Type: application/octet-stream");
        header("Content-Type: application/download");
        header("Content-Disposition: attachment;filename=" . $namaFile . "");
        header("Content-Transfer-Encoding: binary ");

        xlsBOF();

        $kolomhead = 0;
        xlsWriteLabel($tablehead, $kolomhead++, "No");
	xlsWriteLabel($tablehead, $kolomhead++, "Id Murid");
	xlsWriteLabel($tablehead, $kolomhead++, "Id Mengajar");
	xlsWriteLabel($tablehead, $kolomhead++, "Harga Total");
	xlsWriteLabel($tablehead, $kolomhead++, "Status Bayar");
	xlsWriteLabel($tablehead, $kolomhead++, "Status Les");
	xlsWriteLabel($tablehead, $kolomhead++, "Jumlah Pertemuan");

	foreach ($this->Kursus_model->get_all() as $data) {
            $kolombody = 0;

            //ubah xlsWriteLabel menjadi xlsWriteNumber untuk kolom numeric
            xlsWriteNumber($tablebody, $kolombody++, $nourut);
	    xlsWriteNumber($tablebody, $kolombody++, $data->Id_murid);
	    xlsWriteNumber($tablebody, $kolombody++, $data->id_mengajar);
	    xlsWriteNumber($tablebody, $kolombody++, $data->harga_total);
	    xlsWriteLabel($tablebody, $kolombody++, $data->status_bayar);
	    xlsWriteLabel($tablebody, $kolombody++, $data->status_les);
	    xlsWriteNumber($tablebody, $kolombody++, $data->jumlah_pertemuan);

	    $tablebody++;
            $nourut++;
        }

        xlsEOF();
        exit();
    }

    public function word()
    {
        header("Content-type: application/vnd.ms-word");
        header("Content-Disposition: attachment;Filename=kursus.doc");

        $data = array(
            'kursus_data' => $this->Kursus_model->get_all(),
            'start' => 0
        );
        
        $this->load->view('kursus/kursus_doc',$data);
    }

}

/* End of file Kursus.php */
/* Location: ./application/controllers/Kursus.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2018-11-09 16:25:02 */
/* http://harviacode.com */