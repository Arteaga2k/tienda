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

    /**
     */
    public function realizaPedido()
    {
        $login = $this->session->userdata("login");           
             
        // comprobamos si estamos logueados
        if ($login != false && $login['is_logued_in']) {
            // siguiente paso realizar compra
          
        } else {
           redirect(base_url() . 'usuario');
        }
    }

    /**
     * muestra contenido del carro
     */
    public function verCarro()
    {
        $carrito = $this->carrito->getCarrito();
        
        
        echo $this->twig->render('carro/carro.twig', array(
            'carrito' => $carrito,
            'usuario' => $this->usuarioLogueado()
        ));
    }
    
    /**
     * Devuelve username del usuario logueado
     * O vacío si no existe     
     * 
     * @return string <string, unknown>
     */
    public function usuarioLogueado(){
        $usuario =  $this->session->userdata("login");        
        
        return  $usuario['username'] ? $usuario['username'] : '';
        
    }
}