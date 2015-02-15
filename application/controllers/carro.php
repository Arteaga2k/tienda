<?php

/**
 * 
 * @author Carlos
 *
 */
class Carro extends CI_Controller
{

    private $form = array();

    /**
     * Constructor clase Carro
     */
    public function __construct()
    {
        parent::__construct();
        $this->load->model('home_model');
        $this->load->model('usuario_model');
        $this->load->model('pedido_model');
    }   

    /**
     * muestra contenido del carro
     */
    public function verCarro()
    {
        $form['error'] = $this->session->flashdata('carro_incorrecto');
        
        echo $this->twig->render('carro/detalle_carro.twig', array(
            'carrito' => $this->carrito->getCarrito(),
            'usuario' => $this->session->userdata('login'),
            'form' => $form
        ));
    }

    /**
     * Vacía el contenido del carrito
     */
    public function vaciaCarro()
    {
        $carrito = $this->carrito->destroy();
         redirect(base_url() . 'home');
    }
    
    // probando ajax
    public function ajaxAddCart($cantidad, $idproducto)
    {
        $cantidadFinal = $cantidad;
        $producto = $this->home_model->getProducto($idproducto);
        $carrito = $this->carrito->getCarrito();
    
        // comprobamos que hay stock
        if (intval($producto->stock) > 0) {
    
            if (! empty($carrito) && isset($carrito['items'][$idproducto])) {
                $cantidad1 = intval($carrito['items'][$idproducto]['cantidad']);
                $suma = $cantidad1 + intval($cantidad);
                $cantidadFinal = $producto->stock >= $suma ? $cantidad : $producto->stock;
            }
    
            $this->carrito->InsertarItem(array(
                'id' => $idproducto,
                'cantidad' => $cantidadFinal,
                'precio' => $producto->precio,
                'nombre' => $producto->nombre
            ));
        }
    
        echo json_encode($this->carrito->getCarrito());
    }

    
    

  
}