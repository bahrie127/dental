<?php
/**
 * Created by JetBrains PhpStorm.
 * User: bahrie
 * Date: 12/5/12
 * Time: 10:30 PM
 * To change this template use File | Settings | File Templates.
 */
class Pembukuan extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->auth->restrict();
        $this->load->database();
        $this->load->helper('url');
        $this->load->model('m_laporan');
        $this->load->library('grocery_CRUD');

    }


    function index(){

        $crud = new grocery_CRUD();

        $crud->set_theme('datatables');
        $crud->set_table('pembukuan');
        $crud->set_subject('Pembukuan');
        $crud->columns('tanggal','pemasukan','pengeluaran','total','keterangan');
        $crud->callback_add_field('tanggal',array($this,'_tanggal'));
        $crud->callback_add_field('pemasukan',array($this,'_pemasukan_fill_now'));

        $crud->callback_column('total',array($this,'user_name'));
        //$crud->required_fields('city');
        //$crud->columns('city','country','phone','addressLine1','postalCode');

        $output = $crud->render();
        $this->load->view('admin/pembukuan',$output);
    }

    function user_name($value, $row)
    {
        return $row->pemasukan - $row->pengeluaran;
    }




     function _pemasukan_fill_now()
    {
        $data=$this->m_laporan->get_pemasukan_perday();

        return '<input name="pemasukan" type="text" value="'. $data[0]->harga. '" >';
    }

    function _tanggal()
    {

        return '<input name="tanggal" type="text" value="'. date("d/m/Y"). '" >';
    }


}