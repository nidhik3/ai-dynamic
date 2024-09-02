<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Article2 extends CI_Controller {

	public function index()
	{
		$this->load->helper('url');
        $this->load->view('header');
		$this->load->view('article2');
		$this->load->view('footer');
	}
}
