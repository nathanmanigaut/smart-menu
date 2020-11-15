<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Products extends CI_Controller {

	public function index()
	{
		$this->load->model('Cat_model','categories');
		$this->load->model('Product_model','prod');
		$this->load->view('/back/partials/header');
		$this->load->view('/back/partials/nav');
		$this->load->view('/back/products');
		$this->load->view('/back/partials/footer');
	}

	public function add_prod()
	{
		$this->load->model('Cat_model','categories');
		$this->load->model('Product_model','prod');
		$this->load->view('/back/partials/header');
		$this->load->view('/back/partials/nav');
		$this->load->view('/back/add_prod');
		$this->load->view('/back/partials/footer');
	}

	public function insert_prod()
	{	
		$cat_id = $this->input->post('cat_id');
		$name = $this->input->post('name');
		$description = $this->input->post('description');
		$price = $this->input->post('price');
		if(!empty($name) && !empty($price) && !empty($description)){
			$data = array(

				'cat_id'=> $cat_id,
				'name' => $name,
				'composition' => $description,
				'price' => $price,
			);
			$this->load->model('Product_model','prod');
			$this->prod->inserts($data);
		header('Location: http://smart-menu.local/products');
		} else {
			echo("Veuillez remplir tous les champs");
		}
	}
	
}
