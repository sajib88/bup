<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

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
        $this->load->view('login');
	}

	public function newpage()
	{
        $this->load->view('header');
        $this->load->view('testpage');
        $this->load->view('footer');
	}

    public function dashboard()
    {
        $data['icon'] = 'ti-home';
        $data['name'] = 'Dashboard';
        $this->load->view('header', $data);
        $this->load->view('dashboard');
    }

    public function video()
    {
        $data['icon'] = 'ti-video-clapper';
        $data['name'] = 'Video';
        $this->load->view('header', $data);
        $this->load->view('video');
    }

    public function image()
    {
        $data['icon'] = 'ti-image';
        $data['name'] = 'Photo';
        $this->load->view('header', $data);
        $this->load->view('image');
    }

    public function audio()
    {
        $data['icon'] = 'ti-music-alt';
        $data['name'] = 'Audio';
        $this->load->view('header', $data);
        $this->load->view('audio');
    }

    public function documents()
    {
        $data['icon'] = 'ti-agenda';
        $data['name'] = 'Documents';
        $this->load->view('header', $data);
        $this->load->view('documents');
    }
	
}
