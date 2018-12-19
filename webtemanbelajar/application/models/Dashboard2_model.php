<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Dashboard2_Model extends CI_Model {

		public function __construct() {
			parent::__construct();
		}

		function get_all_data() {
			return $this->db->get('tentor')->result_array();
		}
		function get_data_by_id($id) {
			return $this->db->get_where('tentor', $id)->result_array();
        }
		
		function get_all_data_tentor() {
			return $this->db->select('*')->from('tentor')->count_all_results();
		}	

		function get_all_data_murid() {
			return $this->db->select('*')->from('murid')->count_all_results();
		}

		function get_all_data_transaksi() {
			return $this->db->select('*')->from('kursus')->count_all_results();
		}

		function get_all_data_pendapatan() {
			 $this->db->where('status_bayar', 'lunas');
			$this->db->select_sum('harga_total');
        //return $this->db->get($this->table)->row();
			//return $this->db->select('*')->from('kategori')->count_all_results();
			return $this->db->get('kursus')->result_array();
		}	

		function get_data_by_status($status) {
			return $this->db->select('status_lunas')->from('teams')->where('status_lunas', $status)->count_all_results();
		}

		function get_data_by_upload_file() {
			return $this->db->select('link_gdrive')
							->from('teams')
							->where('link_gdrive', null)
							->or_where('link_gdrive', '')
							->count_all_results();	
		}
	}