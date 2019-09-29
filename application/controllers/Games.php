<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Games extends CI_Controller {

	public function view($game_name)
	{
		
		
		$this->load->view('header');
		$this->load->view('games/view');
		$this->load->view('footer');
	}

	public function listing()
	{
		
		
		$this->load->view('header');
		$this->load->view('games/listing');
		$this->load->view('footer');
	}
}
