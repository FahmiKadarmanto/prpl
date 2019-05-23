<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{
	public function index()
	{
		$this->load->view('main');
	}

	public function mainMenu()
	{
		$this->load->view('main_page');
	}

	public function adminMenu()
	{
		$this->load->view('admin_menu');
	}
}
