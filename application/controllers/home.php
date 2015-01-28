<?php
/**
 * Clase: Home
 * 
 * Controlador Home, pantalla principal, muestra productos especiales y categor�as
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
		
		$pagination = 3;
		$config['base_url'] = base_url().'home/index';
		$config['total_rows'] = 100; //$this->db->get('producto')->num_rows();
		$config['per_page'] = $pagination;
		$config["uri_segment"] = 3;//el segmento de la paginación
		$config['num_links'] = 5;				
		
		
		$this->pagination->initialize($config);
		
		$this->carrito->InsertarItem(array('id' => 1,
										'cantidad'=>2,
										'precio'=>34
		));
		
		
		
		$categorias = $this->home_model->getCategorias ( $pagination,$this->uri->segment(3));
		$productosDest = $this->home_model->getProductosDestacados();		
		
						
		/*echo $this->twig->render('home/index.twig', array(
				'categorias' =>	$categorias->result_array(),
				'productosDest' => $productosDest->result_array(),
				'pagination' => $this->pagination->create_links()
		));	*/
		
	}
}