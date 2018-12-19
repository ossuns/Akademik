<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Mapel extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Mapel_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->input->get('start'));
        
        if ($q <> '') {
            $config['base_url'] = base_url() . 'mapel/index.html?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'mapel/index.html?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'mapel/index.html';
            $config['first_url'] = base_url() . 'mapel/index.html';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = TRUE;
        $config['total_rows'] = $this->Mapel_model->total_rows($q);
        $mapel = $this->Mapel_model->get_limit_data($config['per_page'], $start, $q);

        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            'mapel_data' => $mapel,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
        );
       // $this->load->view('mapel/mapel_list', $data);
        $this->template->set('title', '');
        $this->template->load('index2', 'contents' , 'mapel/mapel_list', $data);
    }

    public function read($id) 
    {
        $row = $this->Mapel_model->get_by_id($id);
        if ($row) {
            $data = array(
		'id_mapel' => $row->id_mapel,
		'nama_mapel' => $row->nama_mapel,
		'tarif_1' => $row->tarif_1,
		'tarif_2' => $row->tarif_2,
	    );
          $this->template->set('title', '');
        $this->template->load('index2', 'contents' , 'mapel/mapel_read', $data);
          //  $this->load->view('mapel/mapel_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('mapel'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('mapel/create_action'),
	    'id_mapel' => set_value('id_mapel'),
	    'nama_mapel' => set_value('nama_mapel'),
	    'tarif_1' => set_value('tarif_1'),
	    'tarif_2' => set_value('tarif_2'),
	);
        //$this->load->view('mapel/mapel_form', $data);
        $this->template->set('title', '');
        $this->template->load('index2', 'contents' , 'mapel/mapel_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'nama_mapel' => $this->input->post('nama_mapel',TRUE),
		'tarif_1' => $this->input->post('tarif_1',TRUE),
		'tarif_2' => $this->input->post('tarif_2',TRUE),
	    );

            $this->Mapel_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('mapel'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Mapel_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('mapel/update_action'),
		'id_mapel' => set_value('id_mapel', $row->id_mapel),
		'nama_mapel' => set_value('nama_mapel', $row->nama_mapel),
		'tarif_1' => set_value('tarif_1', $row->tarif_1),
		'tarif_2' => set_value('tarif_2', $row->tarif_2),
	    );
           // $this->load->view('mapel/mapel_form', $data);
            $this->template->set('title', '');
        $this->template->load('index2', 'contents' , 'mapel/mapel_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('mapel'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id_mapel', TRUE));
        } else {
            $data = array(
		'nama_mapel' => $this->input->post('nama_mapel',TRUE),
		'tarif_1' => $this->input->post('tarif_1',TRUE),
		'tarif_2' => $this->input->post('tarif_2',TRUE),
	    );

            $this->Mapel_model->update($this->input->post('id_mapel', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('mapel'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Mapel_model->get_by_id($id);

        if ($row) {
            $this->Mapel_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('mapel'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('mapel'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('nama_mapel', 'nama mapel', 'trim|required');
	$this->form_validation->set_rules('tarif_1', 'tarif 1', 'trim|required');
	$this->form_validation->set_rules('tarif_2', 'tarif 2', 'trim|required');

	$this->form_validation->set_rules('id_mapel', 'id_mapel', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

    public function excel()
    {
        $this->load->helper('exportexcel');
        $namaFile = "mapel.xls";
        $judul = "mapel";
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
	xlsWriteLabel($tablehead, $kolomhead++, "Nama Mapel");
	xlsWriteLabel($tablehead, $kolomhead++, "Tarif 1");
	xlsWriteLabel($tablehead, $kolomhead++, "Tarif 2");

	foreach ($this->Mapel_model->get_all() as $data) {
            $kolombody = 0;

            //ubah xlsWriteLabel menjadi xlsWriteNumber untuk kolom numeric
            xlsWriteNumber($tablebody, $kolombody++, $nourut);
	    xlsWriteLabel($tablebody, $kolombody++, $data->nama_mapel);
	    xlsWriteNumber($tablebody, $kolombody++, $data->tarif_1);
	    xlsWriteNumber($tablebody, $kolombody++, $data->tarif_2);

	    $tablebody++;
            $nourut++;
        }

        xlsEOF();
        exit();
    }

    public function word()
    {
        header("Content-type: application/vnd.ms-word");
        header("Content-Disposition: attachment;Filename=mapel.doc");

        $data = array(
            'mapel_data' => $this->Mapel_model->get_all(),
            'start' => 0
        );
        
        $this->load->view('mapel/mapel_doc',$data);
    }

}

/* End of file Mapel.php */
/* Location: ./application/controllers/Mapel.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2018-11-09 16:25:10 */
/* http://harviacode.com */