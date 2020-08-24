<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tienda extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('URL');
		$this->load->model('Tienda_model');
	}

	public function index()
	{
		$this->load->view('Tienda/catalogo_view');

	}

	public function Registro()
	{
		$this->load->view('Tienda/registro_view');
	}

	public function login()
	{
		$this->load->view('Tienda/login_view');
	}

	public function agregar()
	{
		$this->load->view('Tienda/agregar_view');
	}

	public function registrados()
	{
		$productos = $this->Tienda_model->getProducto();
		$data = array('productos'=>$productos);
		$this->load->view('Tienda/registrados_view', $data);
	}

	
}
