<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Search extends CI_Controller {

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     *	- or -
     * 		http://example.com/index.php/welcome/index
     *	- or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */


    public function index()
    {
        $this->load->view('header');
        $this->load->view('search');
        /// $this->load->view('footer');
    }

    public function advsearch()
    {
        $this->load->view('header');
        $this->load->view('advancedsearch');

    }
    public function dataupload()
    {
        $this->load->view('header');
        $this->load->view('dataupload');
        /// $this->load->view('footer');
    }

    public function afterupload()
    {
        $this->load->view('header');
        $this->load->view('upload6');
        echo 'abc';
    }

}