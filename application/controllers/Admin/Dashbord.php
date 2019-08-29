<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashbord extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->view('templates/header');
		$this->load->view('templates/topbar');
		$this->load->view('templates/sidebar');
		$this->load->view('admin/admin');
		$this->load->view('templates/footer');
	}
}