<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Kursus_model extends CI_Model
{

    public $table = 'kursus';
    public $id = 'id_kursus';
    public $order = 'DESC';

    function __construct()
    {
        parent::__construct();
    }

    // get all
    function get_all()
    {
        $this->db->order_by($this->id, $this->order);
        return $this->db->get($this->table)->result();
    }

    function get_data_for_grafik($tahun) {
        $perbulan = $this->db->select('COUNT(*) AS jumlah_perbulan, SUBSTR(tanggal, 6, 2) AS bulan')
                        ->from($this->table)
                        ->like(array('tanggal' => $tahun))
                        ->group_by('bulan')
                        ->get()
                        ->result_array();
        $new_perbulan = [];

        $_in_array = array(
            1 => '01', '02', '03', '04', '05', '06', '07', '08', '09', '10', '11', '12'
        );

        $bulan  = [];
        $jumlah = [];

        foreach ($perbulan as $no_bulan) {
            array_push($bulan, $no_bulan['bulan']);
            array_push($jumlah, $no_bulan['jumlah_perbulan']);
        }

        for ($i = 1; $i <= count($_in_array); $i++) {
            $konversi = (string) sprintf('%02d', $_in_array[$i]);
            
            if (! in_array($konversi, $bulan)) {
                $new_perbulan[$i] = array(
                    'jumlah_perbulan' => 0,
                    'bulan' => $_in_array[$i]
                );

            } else {
                $s = array_search($konversi, $bulan);
                
                $new_perbulan[$i] = array(
                    'jumlah_perbulan' => $jumlah[$s],
                    'bulan' => $_in_array[$i]
                );
            }
        }   
        return array_values($new_perbulan);
    }

    // get data by id
    function get_by_id($id)
    {
        $this->db->where($this->id, $id);
        return $this->db->get($this->table)->row();
    }
    
    // get total rows
    function total_rows($q = NULL) {
        $this->db->like('id_kursus', $q);
	$this->db->or_like('Id_murid', $q);
	$this->db->or_like('id_mengajar', $q);
	$this->db->or_like('harga_total', $q);
	$this->db->or_like('status_bayar', $q);
	$this->db->or_like('status_les', $q);
	$this->db->or_like('jumlah_pertemuan', $q);
	$this->db->from($this->table);
        return $this->db->count_all_results();
    }

    // get data with limit and search
    function get_limit_data($limit, $start = 0, $q = NULL) {

        $this->db->select('*');
        $this->db->join('murid', 'kursus.id_murid = murid.id_murid');
        $this->db->join('mengajar', 'kursus.id_mengajar = mengajar.id_mengajar');
        $this->db->join('mapel', 'mengajar.id_mapel = mapel.id_mapel');
        $this->db->join('tentor', 'mengajar.id_tentor = tentor.id_tentor');
        //$this->db->join('provinsi', 'tentor.id_provinsi = provinsi.id_provinsi');
        //$this->db->join('kabupaten', 'provinsi.id_kabupaten = kabupaten.id_kabupaten');


        $this->db->order_by($this->id, $this->order);
        $this->db->like('id_kursus', $q);
	$this->db->or_like('kursus.Id_murid', $q);
	$this->db->or_like('kursus.id_mengajar', $q);
	$this->db->or_like('harga_total', $q);
	$this->db->or_like('kursus.status_bayar', $q);
	$this->db->or_like('status_les', $q);
	$this->db->or_like('jumlah_pertemuan', $q);
	$this->db->limit($limit, $start);
        return $this->db->get($this->table)->result();
    }
    function total_rows_tentor($id,$q = NULL) {
        $this->db->where('tentor.id_tentor', $id);
        $this->db->join('murid', 'kursus.id_murid = murid.id_murid');
        $this->db->join('mengajar', 'kursus.id_mengajar = mengajar.id_mengajar');
        $this->db->join('mapel', 'mengajar.id_mapel = mapel.id_mapel');
        $this->db->join('tentor', 'mengajar.id_tentor = tentor.id_tentor');
        /*$this->db->like('id_kursus', $q);
    $this->db->or_like('Id_murid', $q);
    $this->db->or_like('id_mengajar', $q);
    $this->db->or_like('harga_total', $q);
    $this->db->or_like('status_bayar', $q);
    $this->db->or_like('status_les', $q);
    $this->db->or_like('jumlah_pertemuan', $q);*/
    $this->db->from($this->table);
        return $this->db->count_all_results();
    }
    function get_limit_data_tentor($id,$limit, $start = 0, $q = NULL) {
          $this->db->where('tentor.id_tentor', $id);
        $this->db->select('*');
        $this->db->join('murid', 'kursus.id_murid = murid.id_murid');
        $this->db->join('mengajar', 'kursus.id_mengajar = mengajar.id_mengajar');
        $this->db->join('mapel', 'mengajar.id_mapel = mapel.id_mapel');
        $this->db->join('tentor', 'mengajar.id_tentor = tentor.id_tentor');
       // $this->db->join('provinsi', 'tentor.id_provinsi = provinsi.id_provinsi');
       // $this->db->join('kabupaten', 'provinsi.id_kabupaten = kabupaten.id_kabupaten');


        $this->db->order_by($this->id, $this->order);
        /*$this->db->like('id_kursus', $q);
    $this->db->or_like('kursus.Id_murid', $q);
    $this->db->or_like('kursus.id_mengajar', $q);
    $this->db->or_like('harga_total', $q);
    $this->db->or_like('kursus.status_bayar', $q);
    $this->db->or_like('status_les', $q);
    $this->db->or_like('jumlah_pertemuan', $q);*/
    $this->db->limit($limit, $start);
        return $this->db->get($this->table)->result();
    }

    // insert data
    function insert($data)
    {
        $this->db->insert($this->table, $data);
    }

    // update data
    function update($id, $data)
    {
        $this->db->where($this->id, $id);
        $this->db->update($this->table, $data);
    }

    // delete data
    function delete($id)
    {
        $this->db->where($this->id, $id);
        $this->db->delete($this->table);
    }

    
    function nonaktifkan($id)
    {
        $this->db->set('status','non aktif');
        $this->db->where($this->id, $id);
        $query=$this->db->update('user');
        return $query;
    }
    function aktifkan_status_bayar($id)
    {
        $this->db->set('status_bayar','lunas');
        $this->db->where($this->id, $id);
        $query=$this->db->update('kursus');
        return $query;
    }

    function aktifkan_status_les($id)
    {
        $this->db->set('status_les','Sudah Selesai');
        $this->db->where($this->id, $id);
        $query=$this->db->update('kursus');
        return $query;
    }

    function aktifkan_status_booking($id)
    {
        $this->db->set('status_booking','Approved');
        $this->db->where($this->id, $id);
        $query=$this->db->update('kursus');
        return $query;
    }
    function tolak_status_booking($id)
    {
        $this->db->set('status_booking','Di Tolak');
        $this->db->where($this->id, $id);
        $query=$this->db->update('kursus');
        return $query;
    }

}

/* End of file Kursus_model.php */
/* Location: ./application/models/Kursus_model.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2018-11-09 16:25:02 */
/* http://harviacode.com */