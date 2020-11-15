<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$this->load->view('/front/partials/header');
		$this->load->view('/front/partials/nav');
		$this->load->view('/front/home');
		$this->load->view('/front/partials/footer');
	}
}
