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
	
    private $categoria = 1;
    
	/**
	 */
	public function __construct() {
		parent::__construct ();
		$this->load->model ( 'home_model' );
	}
	
	
	
	
	public function categoria($cat) {
	    
	    echo 'la categoria es '.$cat;
	    
	    $this->categoria = $cat;
	    //echo $this->categoria;	    
	    
	    $this->index();
	    //redirect('home/index/');
	    
	    
	}	
	
	
	/**
	 */
	public function index($categoria = 1) {	
	    
	    //echo $this->categoria;
	    
		$pagination = 2;
		$config['base_url'] = base_url().'home/index/'.$categoria.'';
		$config['total_rows'] =  $this->home_model->getTotalProdDestacados($categoria);
		$config['per_page'] = $pagination;
		$config["uri_segment"] = 4;//el segmento de la paginación
		$config['num_links'] = 5;				
		
		
		$this->pagination->initialize($config);
		
		// prueba
		/*$this->carrito->InsertarItem(array('id' => 1,
										'cantidad'=>2,
										'precio'=>34
		));*/
		
		
		$segmento = !empty($this->uri->segment(4)) ? $this->uri->segment(4) : 0 ;		
		
		$categorias = $this->home_model->getCategorias ();
		$productosDest = $this->home_model->getProductosDestacados($categoria, $pagination, $segmento);		
		
						
		echo $this->twig->render('home/index.twig', array(
				'categorias' =>	$categorias->result_array(),
				'productosDest' => $productosDest->result_array(),
				'pagination' => $this->pagination->create_links()
		));
		
	}
}