<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Main extends CI_Controller
{
	public function login()
	{
		$this->load->view('userLogin');
	}

	public function mainMenu()
	{
		$this->load->view('userMenu');
    }
    
    public function result()
    {
        $this->load->view('result');
	}
	
	public function adminMenu()
	{
		$this->load->view('adminMenu');
	}

public function print(){
	$this->load->view('surat');
}

}
