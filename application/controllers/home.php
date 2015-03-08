<?php

/**
 * Clase: Home
 * 
 * Controlador Home, pantalla principal, muestra productos especiales y categor�as
 * 
 * @author 2DAWT
 *
 */
class Home extends CI_Controller
{

    /**
     * Constructor clase Home
     */
    public function __construct()
    {
        parent::__construct();
        $this->load->model('home_model');
        $this->load->model('producto_model');
    }

    /**
     * PÁGINA: index
     *
     * http://tienda/home
     */
    public function index($segmento=0)
    {
            
        $this->session->set_userdata("url", 'home');
        
        // echo $this->categoria;
        $pagination = 2;
        $config['base_url'] = site_url('home/index/') ;
        $config['total_rows'] = $this->home_model->getTotalProdDestacados();
        $config['per_page'] = $pagination;
        $config["uri_segment"] = 3; // el segmento de la paginación
        $config['num_links'] = 5;
        
        $this->pagination->initialize($config);
        $monedas = $this->moneda->get_monedas();
        //$this->moneda_de_uso('EUR');
       
        $categorias = $this->home_model->getCategorias();
        $productosDest = $this->home_model->getProductosDestacados($pagination, $segmento);
        $this->session->set_userdata("url", 'home/index/'.$segmento);
        
        echo $this->twig->render('home/index.twig', array(
            'cabecera' => 'Productos Destacados',
            'monedas' => $monedas['monedas'],
            'moneda' => $this->session->userdata('moneda'),
            'categorias' => $categorias,
            'productos' => $productosDest,
            'pagination' => $this->pagination->create_links(),
            'carrito' => $this->carrito->getCarrito(),
            'usuario' => $this->session->userdata("login")
        ));
    }

    /**
     * PÁGINA: categoria
     *
     * http://tienda/categoria/{id}
     *
     * @param string $categoria            
     */
    public function categoria($idCategoria)
    {
        $pagination = 3;
        
        $config['base_url'] = site_url('home/categoria/' . $idCategoria . '')  ;
        $config['total_rows'] = $this->home_model->getTotalProductos($idCategoria);
        $config['per_page'] = $pagination;
        $config["uri_segment"] = 4; // el segmento de la paginación
        $config['num_links'] = 5;
        
        $this->pagination->initialize($config);
        
        $segmento = ! empty($this->uri->segment(4)) ? $this->uri->segment(4) : 0;
        
        $categorias = $this->home_model->getCategorias();
        $productosDest = $this->home_model->getProductos($idCategoria, $pagination, $segmento);
        $monedas = $this->moneda->get_monedas();
        $this->session->set_userdata("url", 'home/categoria/'.$idCategoria);
        
        echo $this->twig->render('home/index.twig', array(            
            'monedas' => $monedas['monedas'],
            'moneda' => $this->session->userdata('moneda'),
            'categorias' => $categorias,
            'productos' => $productosDest,
            'pagination' => $this->pagination->create_links(),
            'carrito' => $this->carrito->getCarrito(),
            'usuario' => $this->session->userdata("login")
        ));
    }

    /**
     * PÁGINA: producto
     *
     * http://tienda/home/producto/{id}
     *
     * @param string $id            
     */
    public function producto($idProducto)
    {
        $this->session->set_userdata("url", 'home/producto/' . $idProducto . '');
        
        $categorias = $this->home_model->getCategorias();
        $producto = $this->home_model->getProducto($idProducto);
        $monedas = $this->moneda->get_monedas();
        $this->session->set_userdata("url", 'home/producto/'.$idProducto);
        
        $this->form_validation->set_rules('cantidad', 'Cantidad', 'trim|required|min_length[1]|numeric|xss_clean');
        $form["form_open"] = form_open("", array(
            "class" => "form-inline"
        ));
        $form['error_cantidad'] = form_error('cantidad');
        echo form_error('cantidad');
        
        // Comprueba validación formulario
        if ($this->form_validation->run() == FALSE) {
            echo $this->twig->render('home/producto.twig', array(
                'monedas' => $monedas['monedas'],
                'moneda' => $this->session->userdata('moneda'),
                'categorias' => $categorias,
                'producto' => $producto,
                'form' => $form,
                'carrito' => $this->carrito->getCarrito(),
                'usuario' => $this->session->userdata("login")
            ));
        } else {
            // añadimos producto al carro
            $this->addProducto();            
        }
    }
    
    /**
     * Establece la moneada que el usuario desea usar
     * 
     * @param unknown $moneda
     */
    public function moneda_de_uso($nombremoneda){
        if ($nombremoneda == 'EUR')
            $valor = 1;
        else
            $valor = $this->moneda->get_valor_moneda($nombremoneda);
        
        $moneda = array(
            'nombre' => $nombremoneda,
            'valor' => $valor
        );
        
        $this->session->set_userdata('moneda',$moneda);
        $this->actualiza_precio_items_carro();
        
        redirect(site_url($this->session->userdata("url") ? $this->session->userdata("url") : 'home'));
    }
    
    /**
     * Actualiza carrito después de un cambio de moneda
     */
    public function actualiza_precio_items_carro(){
        $carrito = $this->carrito->getCarrito();   
        $moneda =  $this->session->userdata('moneda');
     
        foreach ($carrito['items'] as $key => $value){      
           
            $data = array(
                'id' => $key,
                'precio' => round($this->producto_model->get_producto_by_id($key)->precio * $moneda['valor'],1)
            );
            
            $this->carrito->cambio_precio($data);            
        }
       
       
    }
}