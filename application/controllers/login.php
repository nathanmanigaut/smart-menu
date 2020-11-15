<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{
		$this->load->view('/front/partials/header');
		$this->load->view('/front/partials/nav');
		$this->load->view('/front/login');
		$this->load->view('/front/partials/footer');
    }
    public function connect()
	{
		$email = $this->input->post('email');
		$mdp = $this->input->post('mdp');

		
		if(!empty($email) && !empty($mdp)){
			
			$key = 'email';
			$this->load->model('User_model','user');
			$query = $this->user->selects('*', $key, $email);
					
				if($query->num_rows() == 1){
					foreach($query->result() as $user){
						if(password_verify($mdp,$user->password)){
							
							$userdata = array (
								'id' => $user->id,
								'email' => $user->email,
							);
							
							$this->session->set_userdata($userdata);
							header('Location: http://smart-menu.local/dashboard');
						} else {
							header('Location : http://smart-menu.local/login'); 
							
						}
					}	
				} else{
					echo"Aucun utilisateur trouvé";
				} 
			    
		} else {
			echo"merci de renseigner un utilisateur ou mot de passe valide";
		}
	}
	public function signout()
	{
		$this->session->sess_destroy();
		header('Location: http://smart-menu.local/');
	}
}    