<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Servlet extends CI_Controller {

	public function send_email()
	{
		$this->load->library('Generalclass');
		
		if($this->input->post('g-recaptcha-response'))
		{
			$secret = "<G_RECAPTCHA_SECRET>";
			$recaptcha = $this->input->post('g-recaptcha-response');
			$ip = $_SERVER['REMOTE_ADDR'];
			$rsp = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$secret&response=$recaptcha&remoteip=$ip");
			$rsp = json_decode($rsp);
		}
		
		if(!isset($rsp) || $rsp->success !== true)
		{
			die("Please Enter your CAPTCHA");
		}
		
		// send_email(보내는이름, 보내는메일, 받는이름, 받는메일, 제목, 내용)
		//public function send_email($from_name, $from_email, $to_name, $to_email, $subject, $content){
		$from_name = trim($this->input->post('name'));
		$from_email = trim($this->input->post('email'));
		$title = trim($this->input->post('title'));
		$content = nl2br(trim($this->input->post('content')));
		
		$content = "sender_name:" . $from_name . "<br>" . "sender_email:" . $from_email . "<br><br>" . $content;
		
		if(empty($from_name) || empty($from_email) || empty($title) || empty($content))
		{
			die("Please Type all form.");
		}
		
		if($this->generalclass->send_email($from_name, $from_email, 'aivesoft', 'contact@aivesoft.com', $title, $content, $_FILES['attach_file']))
		{
			$this->session->set_flashdata('msg', 'Your Email has sent successfully!');
		}
		else
		{
			$this->session->set_flashdata('msg', 'Error has occured!');
		}
		
		header("Location:/");
	}
}
