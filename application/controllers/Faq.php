<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Faq extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->helper('url');
       
    }


    public function index()
    {
        $data['icon'] = 'ti-help';
        $data['name'] = 'FAQ';
        $this->load->view('header', $data);
        $this->load->view('faq');

    }


}
