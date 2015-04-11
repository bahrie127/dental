<?php
/**
 * Created by JetBrains PhpStorm.
 * User: bahrie
 * Date: 12/5/12
 * Time: 10:30 PM
 * To change this template use File | Settings | File Templates.
 */

class Dashboard extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->auth->restrict();
        $this->load->model('m_laporan');
    }

    function index(){
        $data['resource_path']=$this->config->item('base_url').$this->config->item('resources_path');
        $data['base_url']=$this->config->item('base_url')."index.php";
        $data['laporan']=$this->m_laporan->get_checkup()->result();
        $this->load->view('admin/dashboard',$data);
    }

}