<?php
/**
 * 
 * @author 2DAWT
 *
 */
class Home_model extends CI_Model {
	
	/**
	 * 
	 */
	public function __construct(){
		
		parent::__construct();
		$this->load->database();
	}
	
	/**
	 * 
	 * @return unknown
	 */
	public function  getCategorias(){
		$categorias = $this->db->get('categoria');
		
		return $categorias;
	}
}
