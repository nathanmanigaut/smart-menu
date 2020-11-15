<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Etablissement extends CI_Controller {

    public function index()
    {   
        $this->load->model('Etab_model','etab');
        $this->load->model('Cat_model','categories');
        $this->load->model('Product_model','prod');
        $this->load->view('/back/partials/header');
		$this->load->view('/back/partials/nav');
		$this->load->view('/back/etablissement');
		$this->load->view('/back/partials/footer');
    }
}