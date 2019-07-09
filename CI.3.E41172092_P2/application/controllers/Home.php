<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$data = array ('nama' => 'Zainur Rofan', );

		$this->header();
		$this->load->view('index', $data);
		$this->footer();
	}

	public function Info()
	{
		echo "<h1> Ini hanya belajar</h1>";
	}

	public function nama($value='', $value1='') 
	{
		echo "Nama saya ". $value ." dan panggilan saya ". $value1;
	}

	public function header()
	{
		$this->load->view('header');
	}

	public function footer()
	{
		$this->load->view('footer');
	}
}
