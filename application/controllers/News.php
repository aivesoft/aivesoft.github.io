<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class News extends CI_Controller {

	public function view($document_num)
	{
		
		
		$this->load->view('header');
		$this->load->view('news/view');
		$this->load->view('footer');
	}

	public function listing()
	{
		
		
		$this->load->view('header');
		$this->load->view('news/listing');
		$this->load->view('footer');
	}
}
