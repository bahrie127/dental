<?php
/**
 * Created by JetBrains PhpStorm.
 * User: bahrie
 * Date: 12/5/12
 * Time: 10:30 PM
 * To change this template use File | Settings | File Templates.
 */

class Front extends CI_Controller{
    function __construct(){
        parent::__construct();

    }

    function index(){

        $this->load->view('frontend/header');
    }
}