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
//        $data['icon'] = 'ti-search';
//        $data['name'] = 'Search Result';
//        $data['search_text'] = $_POST['search_text'];
//        $data['redirect_url'] = base_url() . 'search/advsearch';
//        $this->load->view('header', $data);
//        $this->load->view('advancedsearch');
    }

    public function advsearch()
    {
        if(!empty($_POST['searchedby'])) {
            $data['icon'] = 'ti-search';
            $data['name'] = 'Search Result';
            $data1['search_text'] = $_POST['searchedby'];
            $this->load->view('header', $data);
            $this->load->view('advancedsearch', $data1);
        }
    }

}
