<?php

/**
 * 
 * @author Carlos
 *
 */
class Carro extends CI_Controller
{

    /**
     * Constructor clase Carro
     */
    public function __construct()
    {
        parent::__construct();
        $this->load->model('home_model');
    }

    public function realizaPedido()
    {
        // si estamos logueado
        
        // si no
        redirect(base_url().'usuario/nuevoUsuario');
    }

    public function verCarro()
    {
        $carrito = $this->carrito->getCarrito();
        // var_dump($carrito);
        echo $this->twig->render('carro/carro.twig', array(
            'carrito' => $this->carrito->getCarrito()
        ));
    }
}