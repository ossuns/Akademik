<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Murid extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Murid_model');
        $this->load->library('form_validation');
        $this->simple_login->cek_login();
    }

    public function index()
    {
        $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->input->get('start'));
        
        if ($q <> '') {
            $config['base_url'] = base_url() . 'murid/index.html?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'murid/index.html?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'murid/index.html';
            $config['first_url'] = base_url() . 'murid/index.html';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = TRUE;
        $config['total_rows'] = $this->Murid_model->total_rows($q);
        $murid = $this->Murid_model->get_limit_data($config['per_page'], $start, $q);

        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            'murid_data' => $murid,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
        );
        //$this->load->view('murid/murid_list', $data);
        $this->template->set('title', '');
        $this->template->load('index2', 'contents' , 'murid/murid_list',$data);
    }

    public function read($id) 
    {
        $row = $this->Murid_model->get_by_id($id);
        if ($row) {
            $data = array(
		'id_murid' => $row->id_murid,
		'nama_murid' => $row->nama_murid,
		'password' => $row->password,
		'email' => $row->email,
		'no_telp' => $row->no_telp,
		'jk' => $row->jk,
		'jenjang' => $row->jenjang,
		'alamat' => $row->alamat,
		'sekolah' => $row->sekolah,
		'status_bayar' => $row->status_bayar,
		'foto' => $row->foto,
	    );
            
        $this->template->set('title', '');
        $this->template->load('index2', 'contents' , 'murid/murid_read',$data);
            //$this->load->view('murid/murid_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('murid'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('murid/create_action'),
	    'id_murid' => set_value('id_murid'),
	    'nama_murid' => set_value('nama_murid'),
	    'password' => set_value('password'),
	    'email' => set_value('email'),
	    'no_telp' => set_value('no_telp'),
	    'jk' => set_value('jk'),
	    'jenjang' => set_value('jenjang'),
	    'alamat' => set_value('alamat'),
	    'sekolah' => set_value('sekolah'),
	    'status_bayar' => set_value('status_bayar'),
	    'foto' => set_value('foto'),
	);
       
        $this->template->set('title', '');
        $this->template->load('index2', 'contents' , 'murid/murid_form',$data);
       // $this->load->view('murid/murid_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'nama_murid' => $this->input->post('nama_murid',TRUE),
		'password' => $this->input->post('password',TRUE),
		'email' => $this->input->post('email',TRUE),
		'no_telp' => $this->input->post('no_telp',TRUE),
		'jk' => $this->input->post('jk',TRUE),
		'jenjang' => $this->input->post('jenjang',TRUE),
		'alamat' => $this->input->post('alamat',TRUE),
		'sekolah' => $this->input->post('sekolah',TRUE),
		'status_bayar' => $this->input->post('status_bayar',TRUE),
		'foto' => $this->input->post('foto',TRUE),
	    );

            $this->Murid_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('murid'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Murid_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('murid/update_action'),
		'id_murid' => set_value('id_murid', $row->id_murid),
		'nama_murid' => set_value('nama_murid', $row->nama_murid),
		'password' => set_value('password', $row->password),
		'email' => set_value('email', $row->email),
		'no_telp' => set_value('no_telp', $row->no_telp),
		'jk' => set_value('jk', $row->jk),
		'jenjang' => set_value('jenjang', $row->jenjang),
		'alamat' => set_value('alamat', $row->alamat),
		'sekolah' => set_value('sekolah', $row->sekolah),
		'status_bayar' => set_value('status_bayar', $row->status_bayar),
		'foto' => set_value('foto', $row->foto),
	    );
           
        $this->template->set('title', '');
        $this->template->load('index2', 'contents' , 'murid/murid_form',$data);
           // $this->load->view('murid/murid_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('murid'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id_murid', TRUE));
        } else {
            $data = array(
		'nama_murid' => $this->input->post('nama_murid',TRUE),
		'password' => $this->input->post('password',TRUE),
		'email' => $this->input->post('email',TRUE),
		'no_telp' => $this->input->post('no_telp',TRUE),
		'jk' => $this->input->post('jk',TRUE),
		'jenjang' => $this->input->post('jenjang',TRUE),
		'alamat' => $this->input->post('alamat',TRUE),
		'sekolah' => $this->input->post('sekolah',TRUE),
		'status_bayar' => $this->input->post('status_bayar',TRUE),
		'foto' => $this->input->post('foto',TRUE),
	    );

            $this->Murid_model->update($this->input->post('id_murid', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('murid'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Murid_model->get_by_id($id);

        if ($row) {
            $this->Murid_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('murid'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('murid'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('nama_murid', 'nama murid', 'trim|required');
	$this->form_validation->set_rules('password', 'password', 'trim|required');
	$this->form_validation->set_rules('email', 'email', 'trim|required');
	$this->form_validation->set_rules('no_telp', 'no telp', 'trim|required');
	$this->form_validation->set_rules('jk', 'jk', 'trim|required');
	$this->form_validation->set_rules('jenjang', 'jenjang', 'trim|required');
	$this->form_validation->set_rules('alamat', 'alamat', 'trim|required');
	$this->form_validation->set_rules('sekolah', 'sekolah', 'trim|required');
	$this->form_validation->set_rules('status_bayar', 'status bayar', 'trim|required');
	$this->form_validation->set_rules('foto', 'foto', 'trim|required');

	$this->form_validation->set_rules('id_murid', 'id_murid', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

    public function excel()
    {
        $this->load->helper('exportexcel');
        $namaFile = "murid.xls";
        $judul = "murid";
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
	xlsWriteLabel($tablehead, $kolomhead++, "Nama Murid");
	xlsWriteLabel($tablehead, $kolomhead++, "Password");
	xlsWriteLabel($tablehead, $kolomhead++, "Email");
	xlsWriteLabel($tablehead, $kolomhead++, "No Telp");
	xlsWriteLabel($tablehead, $kolomhead++, "Jk");
	xlsWriteLabel($tablehead, $kolomhead++, "Jenjang");
	xlsWriteLabel($tablehead, $kolomhead++, "Alamat");
	xlsWriteLabel($tablehead, $kolomhead++, "Sekolah");
	xlsWriteLabel($tablehead, $kolomhead++, "Status Bayar");
	xlsWriteLabel($tablehead, $kolomhead++, "Foto");

	foreach ($this->Murid_model->get_all() as $data) {
            $kolombody = 0;

            //ubah xlsWriteLabel menjadi xlsWriteNumber untuk kolom numeric
            xlsWriteNumber($tablebody, $kolombody++, $nourut);
	    xlsWriteLabel($tablebody, $kolombody++, $data->nama_murid);
	    xlsWriteLabel($tablebody, $kolombody++, $data->password);
	    xlsWriteLabel($tablebody, $kolombody++, $data->email);
	    xlsWriteLabel($tablebody, $kolombody++, $data->no_telp);
	    xlsWriteLabel($tablebody, $kolombody++, $data->jk);
	    xlsWriteLabel($tablebody, $kolombody++, $data->jenjang);
	    xlsWriteLabel($tablebody, $kolombody++, $data->alamat);
	    xlsWriteLabel($tablebody, $kolombody++, $data->sekolah);
	    xlsWriteLabel($tablebody, $kolombody++, $data->status_bayar);
	    xlsWriteLabel($tablebody, $kolombody++, $data->foto);

	    $tablebody++;
            $nourut++;
        }

        xlsEOF();
        exit();
    }

    public function word()
    {
        header("Content-type: application/vnd.ms-word");
        header("Content-Disposition: attachment;Filename=murid.doc");

        $data = array(
            'murid_data' => $this->Murid_model->get_all(),
            'start' => 0
        );
        
        $this->load->view('murid/murid_doc',$data);
    }

}

/* End of file Murid.php */
/* Location: ./application/controllers/Murid.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2018-11-09 16:25:28 */
/* http://harviacode.com */