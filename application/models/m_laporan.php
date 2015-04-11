<?php
class M_laporan extends CI_Model{

	function index(){

    }

    function get_all(){
        $query=$this->db->get('pembukuan');
        return $query;
    }

    function get_by_date($dari,$sampai){
        $this->db->where('tanggal >=', $dari);
        $this->db->where('tanggal <=', $sampai);
        return $this->db->get('pembukuan');
    }

    function get_pagination($mulai,$banyak){
        $this->db->from('pembukuan');
        $this->db->limit($banyak,$mulai);
        $query = $this->db->get();
        return $query->result();
    }

    function get_all_pasien(){
        return $this->db->count_all('pasien');
    }

    function get_all_pendapatan(){
        $query=$this->db->get('pembukuan');
        $alltotal=0;
        foreach($$query->result() as $row){
            $alltotal+=($row->pemasukan-$row->pengeluaran);
        }
        return $alltotal;
    }

    function get_checkup(){
       return $this->db->query('SELECT pasien.nama as nama,schedule_checkup.tanggal_checkup as tanggal,schedule_checkup.keterangan as keterangan FROM schedule_checkup, pasien where schedule_checkup.pasien_id=pasien.pasien_id  and schedule_checkup.tanggal_checkup>=DATE(NOW()) and schedule_checkup.tanggal_checkup<=DATE_ADD(DATE(NOW()), INTERVAL 14 DAY) order by schedule_checkup.tanggal_checkup asc');

       // $this->db->order_by('tanggal', 'asc');
        //return $this->db->get();
    }

    function get_pemasukan_perday(){
        $this->db->where('tanggal=DATE(NOW())');
        $this->db->select_sum('harga');
        return $query = $this->db->get('transaksi')->result();
    }

}

