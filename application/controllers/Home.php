<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index() {
        $this->load->view('template/html_header');
        $this->load->view('template/header');
        $this->load->view('template/aside');
        $this->load->view('dashboard');
        $this->load->view('template/html_footer');
    }
    public function teste()	{
        echo "Tá na home";
		$this->load->view('welcome_message');
	}
}
