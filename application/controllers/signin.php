<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Signin extends CI_Controller {

	public function index()
	{
		$this->load->view('/front/partials/header');
		$this->load->view('/front/partials/nav');
		$this->load->view('/front/signin');
		$this->load->view('/front/partials/footer');
	}
	public function verif()
	{
		$email = $this->input->post('email');
		$pseudo = $this->input->post('pseudo');
		$mdp = $this->input->post('mdp');
		$password = password_hash($mdp, PASSWORD_DEFAULT);
		$date = date("Y-m-d H:i:s");
		if(!empty($email) && !empty($pseudo) && !empty($mdp)){
			$data = array(
				'email' => $email,
				'pseudo' => $pseudo,
				'password'=> $password,
				'creation'=> $date,
			);
			$this->load->model('User_model','user');
			$this->user->inserts($data);
		}
		header('Location :http://http://smart-menu.local/');
	}

}
