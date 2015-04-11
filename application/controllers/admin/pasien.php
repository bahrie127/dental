<?php
/**
 * Created by JetBrains PhpStorm.
 * User: bahrie
 * Date: 12/5/12
 * Time: 10:30 PM
 * To change this template use File | Settings | File Templates.
 */
class Pasien extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->auth->restrict();
        $this->load->database();
        $this->load->helper('url');

        $this->load->library('grocery_CRUD');

    }


    function index()
    {

        $crud = new grocery_CRUD();

        $crud->set_theme('datatables');
        $crud->set_table('pasien');
        $crud->set_subject('Pasien');

        $output = $crud->render();
        $this->load->view('admin/pasien', $output);
    }

    function schedule()
    {
        $crud = new grocery_CRUD();

        $crud->set_theme('datatables');
        $crud->set_table('schedule_checkup');
        $crud->set_relation('pasien_id','pasien','nama');
        $crud->display_as('pasien_id','Nama');
        $crud->set_subject('Schedule Checkup');

        $output = $crud->render();
        $this->load->view('admin/pasien', $output);
    }

    function update_foto(){
        $crud = new grocery_CRUD();

        $crud->set_theme('datatables');
        $crud->set_table('foto_checkup');
        $crud->set_relation('pasien_id','pasien','nama');
        $crud->display_as('pasien_id','Nama');
        $crud->set_subject('Foto Checkup');
        $crud->set_field_upload('foto','assets/uploads/files');

        $output = $crud->render();
        $this->load->view('admin/pasien', $output);
    }

    function transaksi(){
        $crud = new grocery_CRUD();

        $crud->set_theme('datatables');
        $crud->set_table('transaksi');
        $crud->set_relation('pasien_id','pasien','nama');
        $crud->display_as('pasien_id','Nama');

        $crud->set_subject('Transaksi');

        $output = $crud->render();
        $this->load->view('admin/pasien', $output);
    }

    function user(){
        $crud = new grocery_CRUD();

        $crud->set_theme('datatables');
        $crud->set_table('user');
        $crud->columns('user_nama','user_username');
        $crud->display_as('user_nama','Nama');
        $crud->display_as('user_username','Username');
        $crud->set_subject('User');
        $crud->callback_before_insert(array($this, 'checking_post'));
        $crud->callback_before_update(array($this, 'checking_post'));
        $output = $crud->render();
        $this->load->view('admin/pasien', $output);
    }

    function checking_post($post_array)
    {
        $post_array['user_password'] = md5($post_array['user_password']);

        return $post_array;
    }
}