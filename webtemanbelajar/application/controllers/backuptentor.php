<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Tentor extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Tentor_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->input->get('start'));
        
        if ($q <> '') {
            $config['base_url'] = base_url() . 'tentor/index.html?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'tentor/index.html?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'tentor/index.html';
            $config['first_url'] = base_url() . 'tentor/index.html';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = TRUE;
        $config['total_rows'] = $this->Tentor_model->total_rows($q);
        $tentor = $this->Tentor_model->get_limit_data($config['per_page'], $start, $q);

        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            'tentor_data' => $tentor,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
        );
        //$this->load->view('tentor/tentor_list', $data);
        $this->template->set('title', '');
        $this->template->load('index2', 'contents' , 'tentor/tentor_list',$data);
    }

    public function read($id) 
    {
        $row = $this->Tentor_model->get_by_id($id);
        if ($row) {
            $data = array(
		'id_tentor' => $row->id_tentor,
		'nama_tentor' => $row->nama_tentor,
		'status' => $row->status,
		'no_ktp' => $row->no_ktp,
		'no_telp' => $row->no_telp,
		'email' => $row->email,
		'password' => $row->password,
		'pendidikan' => $row->pendidikan,
		'pengalaman' => $row->pengalaman,
		'prestasi' => $row->prestasi,
		'pekerjaan' => $row->pekerjaan,
		'status_terima_bayar' => $row->status_terima_bayar,
		'deskripsi' => $row->deskripsi,
		'foto_ktp' => $row->foto_ktp,
		'foto_ijazah' => $row->foto_ijazah,
		'foto_profil' => $row->foto_profil,
		'id_provinsi' => $row->id_provinsi,
	    );
            //$this->load->view('tentor/tentor_read', $data);
        $this->template->set('title', '');
        $this->template->load('index2', 'contents' , 'tentor/tentor_read',$data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('tentor'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('tentor/create_action'),
	    'id_tentor' => set_value('id_tentor'),
	    'nama_tentor' => set_value('nama_tentor'),
	    'status' => set_value('status'),
	    'no_ktp' => set_value('no_ktp'),
	    'no_telp' => set_value('no_telp'),
	    'email' => set_value('email'),
	    'password' => set_value('password'),
	    'pendidikan' => set_value('pendidikan'),
	    'pengalaman' => set_value('pengalaman'),
	    'prestasi' => set_value('prestasi'),
	    'pekerjaan' => set_value('pekerjaan'),
	    'status_terima_bayar' => set_value('status_terima_bayar'),
	    'deskripsi' => set_value('deskripsi'),
	    'foto_ktp' => set_value('foto_ktp'),
	    'foto_ijazah' => set_value('foto_ijazah'),
	    'foto_profil' => set_value('foto_profil'),
	    'id_provinsi' => set_value('id_provinsi'),
	);
        //$this->load->view('tentor/tentor_form', $data);

        $this->template->set('title', '');
        $this->template->load('index2', 'contents' , 'tentor/tentor_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'nama_tentor' => $this->input->post('nama_tentor',TRUE),
		'status' => $this->input->post('status',TRUE),
		'no_ktp' => $this->input->post('no_ktp',TRUE),
		'no_telp' => $this->input->post('no_telp',TRUE),
		'email' => $this->input->post('email',TRUE),
		'password' => $this->input->post('password',TRUE),
		'pendidikan' => $this->input->post('pendidikan',TRUE),
		'pengalaman' => $this->input->post('pengalaman',TRUE),
		'prestasi' => $this->input->post('prestasi',TRUE),
		'pekerjaan' => $this->input->post('pekerjaan',TRUE),
		'status_terima_bayar' => $this->input->post('status_terima_bayar',TRUE),
		'deskripsi' => $this->input->post('deskripsi',TRUE),
		'foto_ktp' => $this->input->post('foto_ktp',TRUE),
		'foto_ijazah' => $this->input->post('foto_ijazah',TRUE),
		'foto_profil' => $this->input->post('foto_profil',TRUE),
		'id_provinsi' => $this->input->post('id_provinsi',TRUE),
	    );

            $this->Tentor_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('tentor'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Tentor_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('tentor/update_action'),
		'id_tentor' => set_value('id_tentor', $row->id_tentor),
		'nama_tentor' => set_value('nama_tentor', $row->nama_tentor),
		'status' => set_value('status', $row->status),
		'no_ktp' => set_value('no_ktp', $row->no_ktp),
		'no_telp' => set_value('no_telp', $row->no_telp),
		'email' => set_value('email', $row->email),
		'password' => set_value('password', $row->password),
		'pendidikan' => set_value('pendidikan', $row->pendidikan),
		'pengalaman' => set_value('pengalaman', $row->pengalaman),
		'prestasi' => set_value('prestasi', $row->prestasi),
		'pekerjaan' => set_value('pekerjaan', $row->pekerjaan),
		'status_terima_bayar' => set_value('status_terima_bayar', $row->status_terima_bayar),
		'deskripsi' => set_value('deskripsi', $row->deskripsi),
		'foto_ktp' => set_value('foto_ktp', $row->foto_ktp),
		'foto_ijazah' => set_value('foto_ijazah', $row->foto_ijazah),
		'foto_profil' => set_value('foto_profil', $row->foto_profil),
		'id_provinsi' => set_value('id_provinsi', $row->id_provinsi),
	    );
          //  $this->load->view('tentor/tentor_form', $data);
        $this->template->set('title', '');
        $this->template->load('index2', 'contents' , 'tentor/tentor_form',$data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('tentor'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id_tentor', TRUE));
        } else {
            $data = array(
		'nama_tentor' => $this->input->post('nama_tentor',TRUE),
		'status' => $this->input->post('status',TRUE),
		'no_ktp' => $this->input->post('no_ktp',TRUE),
		'no_telp' => $this->input->post('no_telp',TRUE),
		'email' => $this->input->post('email',TRUE),
		'password' => $this->input->post('password',TRUE),
		'pendidikan' => $this->input->post('pendidikan',TRUE),
		'pengalaman' => $this->input->post('pengalaman',TRUE),
		'prestasi' => $this->input->post('prestasi',TRUE),
		'pekerjaan' => $this->input->post('pekerjaan',TRUE),
		'status_terima_bayar' => $this->input->post('status_terima_bayar',TRUE),
		'deskripsi' => $this->input->post('deskripsi',TRUE),
		'foto_ktp' => $this->input->post('foto_ktp',TRUE),
		'foto_ijazah' => $this->input->post('foto_ijazah',TRUE),
		'foto_profil' => $this->input->post('foto_profil',TRUE),
		'id_provinsi' => $this->input->post('id_provinsi',TRUE),
	    );

            $this->Tentor_model->update($this->input->post('id_tentor', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('tentor'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Tentor_model->get_by_id($id);

        if ($row) {
            $this->Tentor_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('tentor'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('tentor'));
        }
    }

    public function aktifasi_tentor($id){
         $row= $this->Tentor_model->aktifkan_tentor($id);
        redirect(site_url('tentor'));
    }
    public function nonaktifasi_tentor($id){
         $row= $this->Tentor_model->nonaktifkan_tentor($id);
        redirect(site_url('tentor'));
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('nama_tentor', 'nama tentor', 'trim|required');
	$this->form_validation->set_rules('status', 'status', 'trim|required');
	$this->form_validation->set_rules('no_ktp', 'no ktp', 'trim|required');
	$this->form_validation->set_rules('no_telp', 'no telp', 'trim|required');
	$this->form_validation->set_rules('email', 'email', 'trim|required');
	$this->form_validation->set_rules('password', 'password', 'trim|required');
	$this->form_validation->set_rules('pendidikan', 'pendidikan', 'trim|required');
	$this->form_validation->set_rules('pengalaman', 'pengalaman', 'trim|required');
	$this->form_validation->set_rules('prestasi', 'prestasi', 'trim|required');
	$this->form_validation->set_rules('pekerjaan', 'pekerjaan', 'trim|required');
	$this->form_validation->set_rules('status_terima_bayar', 'status terima bayar', 'trim|required');
	$this->form_validation->set_rules('deskripsi', 'deskripsi', 'trim|required');
	$this->form_validation->set_rules('foto_ktp', 'foto ktp', 'trim|required');
	$this->form_validation->set_rules('foto_ijazah', 'foto ijazah', 'trim|required');
	$this->form_validation->set_rules('foto_profil', 'foto profil', 'trim|required');
	$this->form_validation->set_rules('id_provinsi', 'id provinsi', 'trim|required');

	$this->form_validation->set_rules('id_tentor', 'id_tentor', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

    public function excel()
    {
        $this->load->helper('exportexcel');
        $namaFile = "tentor.xls";
        $judul = "tentor";
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
	xlsWriteLabel($tablehead, $kolomhead++, "Nama Tentor");
	xlsWriteLabel($tablehead, $kolomhead++, "Status");
	xlsWriteLabel($tablehead, $kolomhead++, "No Ktp");
	xlsWriteLabel($tablehead, $kolomhead++, "No Telp");
	xlsWriteLabel($tablehead, $kolomhead++, "Email");
	xlsWriteLabel($tablehead, $kolomhead++, "Password");
	xlsWriteLabel($tablehead, $kolomhead++, "Pendidikan");
	xlsWriteLabel($tablehead, $kolomhead++, "Pengalaman");
	xlsWriteLabel($tablehead, $kolomhead++, "Prestasi");
	xlsWriteLabel($tablehead, $kolomhead++, "Pekerjaan");
	xlsWriteLabel($tablehead, $kolomhead++, "Status Terima Bayar");
	xlsWriteLabel($tablehead, $kolomhead++, "Deskripsi");
	xlsWriteLabel($tablehead, $kolomhead++, "Foto Ktp");
	xlsWriteLabel($tablehead, $kolomhead++, "Foto Ijazah");
	xlsWriteLabel($tablehead, $kolomhead++, "Foto Profil");
	xlsWriteLabel($tablehead, $kolomhead++, "Id Provinsi");

	foreach ($this->Tentor_model->get_all() as $data) {
            $kolombody = 0;

            //ubah xlsWriteLabel menjadi xlsWriteNumber untuk kolom numeric
            xlsWriteNumber($tablebody, $kolombody++, $nourut);
	    xlsWriteLabel($tablebody, $kolombody++, $data->nama_tentor);
	    xlsWriteLabel($tablebody, $kolombody++, $data->status);
	    xlsWriteNumber($tablebody, $kolombody++, $data->no_ktp);
	    xlsWriteNumber($tablebody, $kolombody++, $data->no_telp);
	    xlsWriteLabel($tablebody, $kolombody++, $data->email);
	    xlsWriteLabel($tablebody, $kolombody++, $data->password);
	    xlsWriteLabel($tablebody, $kolombody++, $data->pendidikan);
	    xlsWriteLabel($tablebody, $kolombody++, $data->pengalaman);
	    xlsWriteLabel($tablebody, $kolombody++, $data->prestasi);
	    xlsWriteLabel($tablebody, $kolombody++, $data->pekerjaan);
	    xlsWriteLabel($tablebody, $kolombody++, $data->status_terima_bayar);
	    xlsWriteLabel($tablebody, $kolombody++, $data->deskripsi);
	    xlsWriteLabel($tablebody, $kolombody++, $data->foto_ktp);
	    xlsWriteLabel($tablebody, $kolombody++, $data->foto_ijazah);
	    xlsWriteLabel($tablebody, $kolombody++, $data->foto_profil);
	    xlsWriteNumber($tablebody, $kolombody++, $data->id_provinsi);

	    $tablebody++;
            $nourut++;
        }

        xlsEOF();
        exit();
    }

    public function word()
    {
        header("Content-type: application/vnd.ms-word");
        header("Content-Disposition: attachment;Filename=tentor.doc");

        $data = array(
            'tentor_data' => $this->Tentor_model->get_all(),
            'start' => 0
        );
        
        $this->load->view('tentor/tentor_doc',$data);
    }

}

/* End of file Tentor.php */
/* Location: ./application/controllers/Tentor.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2018-11-09 16:24:35 */
/* http://harviacode.com */