<?php
/**
 * Created by JetBrains PhpStorm.
 * User: bahrie
 * Date: 12/5/12
 * Time: 10:30 PM
 * To change this template use File | Settings | File Templates.
 */

class Login extends CI_Controller{
    function __construct(){
        parent::__construct();

    }

    function index(){
        $data['error']="";
        $this->load->view('login-page',$data);
    }

    function login_in(){
        if($this->auth->do_login($this->input->POST('user'),$this->input->POST('pass'))){
            $this->load->view('loading/loading');
        }else{
            $data['error']="username dan password salah";
            $this->load->view('login-page',$data);
        }

    }

    function logout(){
        $this->session->sess_destroy();
        $this->load->view('loading/loading2');
    }


}