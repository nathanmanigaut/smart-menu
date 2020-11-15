<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function index()
	{
		$user_id = $this->session->id;
		$key = 'user_id';
		$this->load->model('Etab_model','etab');
		$query = $this->etab->selects('*', $key, $user_id);
		if($query->num_rows() >= 1 ){
		$data['etablissements'] = $query;
		
			foreach($query->result() as $etab){
				$etabdata = array (
					'etab_id' => $etab->id,
					'etab_name' => $etab->name,
				);
				$this->session->set_userdata($etabdata);
			}
		}
		if(!empty($this->session->id && $this->session->email)){
			$this->load->view('/back/partials/header');
			$this->load->view('/back/partials/nav');
			$this->load->view('/back/dashboard');
			$this->load->view('/back/partials/footer');
		} else {
			header('Location: http://smart-menu.local/login');
		}
	
		
		
	}

	public function create_etablissement()
	{
		$user_id = $this->session->id;
		$name = $this->input->post('name');
		$url = $this->input->post('url');
		$adress = $this->input->post('adress');
		$postal_code = $this->input->post('postal_code');
		$city = $this->input->post('city');

		if(!empty($user_id) && !empty($name) && !empty($url) && !empty($adress) && !empty($postal_code) && !empty($city)){
			$data = array(
				'user_id' => $user_id,
				'name' => $name,
				'url'=> $url,
				'adress'=> $adress,
				'postal_code'=> $postal_code,
				'city'=> $city,
			);
			$this->load->model('Etab_model','etab');
			$this->etab->inserts($data);
			//$this->db->insert('etablissement', $data);
			header('Location: http://smart-menu.local/dashboard');
		} else {
			echo"Veuillez bien saisir tout les champs";
		}
	}

	public function update_etablissement()
	{
		$user_id = $this->session->id;
		$name = $this->input->post('name');
		$url = $this->input->post('url');
		$adress = $this->input->post('adress');
		$postal_code = $this->input->post('postal_code');
		$city = $this->input->post('city');

		if(!empty($user_id) && !empty($name) && !empty($url) && !empty($adress) && !empty($postal_code) && !empty($city)){
			$data = array(
				'user_id' => $user_id,
				'name' => $name,
				'url'=> $url,
				'adress'=> $adress,
				'postal_code'=> $postal_code,
				'city'=> $city,
			);
			$key = 'user_id';
			$this->load->model('Etab_model','etab');
			$this->etab->updates($data, $key, $user_id);
			//$this->db->insert('etablissement', $data);
			header('Location: http://smart-menu.local/dashboard');
		} else {
			echo"Veuillez bien saisir tout les champs";
		}
	}
	
}
