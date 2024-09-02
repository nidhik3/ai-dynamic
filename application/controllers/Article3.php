<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Article3 extends CI_Controller {

	public function index()
	{
		$this->load->helper('url');
        $this->load->view('header');
		$this->load->view('article3');
		$this->load->view('footer');
	}
}
