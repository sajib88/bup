<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Upload extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->helper('url');
       
    }


    public function index()
    {
        $data['icon'] = 'ti-upload';
        $data['name'] = ' Upload';
        $this->load->view('header', $data);
        $this->load->view('upload2');

    }


}
