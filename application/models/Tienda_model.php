<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * 
 */
class Tienda_model extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function getProducto($id=0){
		if ($id>0) {
			$sql = "SELECT *from `producto` WHERE id_producto = $id";
		}else{
			$sql = "SELECT *from `producto`";
		}
		$resulado =$this->db->query($sql);
		if ($resulado->num_rows()>0) {
			return $resultado;			
		}else{
			return false;
		}
	}
}