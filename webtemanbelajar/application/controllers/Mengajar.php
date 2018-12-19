<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Mengajar extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model(array('Mengajar_model','Mapel_model'));
        $this->load->library('form_validation');
    }

    public function index()
    {
        $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->input->get('start'));
        
        if ($q <> '') {
            $config['base_url'] = base_url() . 'mengajar/index.html?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'mengajar/index.html?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'mengajar/index.html';
            $config['first_url'] = base_url() . 'mengajar/index.html';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = TRUE;
        $config['total_rows'] = $this->Mengajar_model->total_rows($q);
        $mengajar = $this->Mengajar_model->get_limit_data($config['per_page'], $start, $q);

        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            'mengajar_data' => $mengajar,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
        );
        //$this->load->view('mengajar/mengajar_list', $data);
        $this->template->set('title', '');
        $this->template->load('index2', 'contents' , 'mengajar/mengajar_list',$data);
    }

    public function read($id) 
    {
        $row = $this->Mengajar_model->get_by_id($id);
        if ($row) {
            $data = array(
		'id_mengajar' => $row->id_mengajar,
		'id_tentor' => $row->id_tentor,
		'id_mapel' => $row->id_mapel,
	    );
           // $this->load->view('mengajar/mengajar_read', $data);
            $this->template->set('title', '');
        $this->template->load('index2', 'contents' , 'mengajar/mengajar_read',$data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('mengajar'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('mengajar/create_action'),
	    'id_mengajar' => set_value('id_mengajar'),
	    'id_tentor' => $this->session->userdata('ses_id'),
	    'id_mapel' => set_value('id_mapel'),
	);
       // $this->load->view('mengajar/mengajar_form', $data);
        $data['query']= $this->Mapel_model->get_list();
        $this->template->set('title', '');
        $this->template->load('index2', 'contents' , 'mengajar/mengajar_form',$data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'id_tentor' => $this->input->post('id_tentor',TRUE),
		'id_mapel' => $this->input->post('id_mapel',TRUE),
	    );

            $this->Mengajar_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('mengajar'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Mengajar_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('mengajar/update_action'),
		'id_mengajar' => set_value('id_mengajar', $row->id_mengajar),
		'id_tentor' => set_value('id_tentor', $row->id_tentor),
		'id_mapel' => set_value('id_mapel', $row->id_mapel),
	    );
            //$this->load->view('mengajar/mengajar_form', $data);
            $this->template->set('title', '');
        $this->template->load('index2', 'contents' , 'mengajar/mengajar_form',$data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('mengajar'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id_mengajar', TRUE));
        } else {
            $data = array(
		'id_tentor' => $this->input->post('id_tentor',TRUE),
		'id_mapel' => $this->input->post('id_mapel',TRUE),
	    );

            $this->Mengajar_model->update($this->input->post('id_mengajar', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('mengajar'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Mengajar_model->get_by_id($id);

        if ($row) {
            $this->Mengajar_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('mengajar'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('mengajar'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('id_tentor', 'id tentor', 'trim|required');
	$this->form_validation->set_rules('id_mapel', 'id mapel', 'trim|required');

	$this->form_validation->set_rules('id_mengajar', 'id_mengajar', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

    public function excel()
    {
        $this->load->helper('exportexcel');
        $namaFile = "mengajar.xls";
        $judul = "mengajar";
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
	xlsWriteLabel($tablehead, $kolomhead++, "Id Tentor");
	xlsWriteLabel($tablehead, $kolomhead++, "Id Mapel");

	foreach ($this->Mengajar_model->get_all() as $data) {
            $kolombody = 0;

            //ubah xlsWriteLabel menjadi xlsWriteNumber untuk kolom numeric
            xlsWriteNumber($tablebody, $kolombody++, $nourut);
	    xlsWriteNumber($tablebody, $kolombody++, $data->id_tentor);
	    xlsWriteNumber($tablebody, $kolombody++, $data->id_mapel);

	    $tablebody++;
            $nourut++;
        }

        xlsEOF();
        exit();
    }

    public function word()
    {
        header("Content-type: application/vnd.ms-word");
        header("Content-Disposition: attachment;Filename=mengajar.doc");

        $data = array(
            'mengajar_data' => $this->Mengajar_model->get_all(),
            'start' => 0
        );
        
        $this->load->view('mengajar/mengajar_doc',$data);
    }

}

/* End of file Mengajar.php */
/* Location: ./application/controllers/Mengajar.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2018-11-09 16:25:16 */
/* http://harviacode.com */