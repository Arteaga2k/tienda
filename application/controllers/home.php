<?php
/**
 * Clase: Home
 * 
 * Controlador Home, pantalla principal, muestra productos especiales y categorías
 * 
 * @author 2DAWT
 *
 */
class Home extends CI_Controller {
	
	/**
	 */
	public function __construct() {
		parent::__construct ();
		$this->load->model ( 'home_model' );
	}
	
	/**
	 */
	public function index() {
		$categorias = $this->home_model->getCategorias ();
		
						
						
		echo $this->twig->render('home/index.twig', array(
				'categorias'=>$categorias->result_array()
		));	
		
		
	}
}