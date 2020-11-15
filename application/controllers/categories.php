<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Categories extends CI_Controller {

	public function index()
	{	
		$this->load->model('Cat_model','categories');
		$etab_id = $this->session->etab_id;
		$key = 'etab_id';
		
		$query = $this->categories->selects('*', $key, $etab_id);
		if($query->num_rows() >= 1 ){
			foreach($query->result() as $cat){
				$catdata = array (
					'cat_id'=>$cat->id,
				);
				$this->session->set_userdata($catdata);
			}
		}
		$this->load->view('/back/partials/header');
		$this->load->view('/back/partials/nav');
		$this->load->view('/back/categories');
		$this->load->view('/back/partials/footer');
	}

	public function add_cat()
	{
		$this->load->view('/back/partials/header');;
		$this->load->view('/back/partials/nav');
		$this->load->view('/back/add_cat');
		$this->load->view('/back/partials/footer');
	}

	public function insert_cat()
	{	
		$etab_id = $this->session->etab_id;
		$name = $this->input->post('name');
		$description = $this->input->post('description');
		if(!empty($name) && !empty($description)){
			$data = array(
				'etab_id'=> $etab_id,
				'name' => $name,
				'description' => $description,
			);
			$this->load->model('Cat_model','cat');
			$this->cat->inserts($data);
		header('Location: http://smart-menu.local/categories');
		} else {
			echo("Veuillez remplir tous les champs");
		}
	}
	
}
