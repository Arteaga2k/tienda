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
        $monedas = $this->moneda->get_monedas();
        
        echo $this->twig->render('carro/detalle_carro.twig', array(
            'monedas' => $monedas['monedas'],
            'moneda' => $this->session->userdata('moneda'),
            'carrito' => $this->carrito->getCarrito(),
            'usuario' => $this->session->userdata('login'),
            'form' => $form
        ));
    }

    /**
     *
     * @param unknown $id            
     */
    public function eliminaItem($id)
    {
        $this->carrito->eliminaItem($id);
        redirect(site_url('carro/verCarro'));
    }

    /**
     * Vacía el contenido del carrito
     */
    public function vaciaCarro()
    {
        $carrito = $this->carrito->destroy();
        redirect(site_url('carro/verCarro'));
    }

    /**
     * inserta item al carrito
     * llamada vía ajax
     *
     * @param unknown $cantidad            
     * @param unknown $idproducto            
     */
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
            $moneda =  $this->session->userdata('moneda');
            $precio = (float)$moneda['valor'] * (float)$producto->precio;            
          
            
            $this->carrito->InsertarItem(array(
                'id' => $idproducto,
                'cantidad' => $cantidadFinal,
                'precio' => round($precio,1),
                'nombre' => $producto->nombre
            ));
        }
        
        echo json_encode($this->carrito->getCarrito());
    }

    /**
     * Actualiza la cantidad de un item
     * del carrito
     * llamada vía ajax
     *
     * @param unknown $cantidad            
     * @param unknown $idproducto            
     */
    public function ajaxUpdateCart($cantidad, $idproducto)
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
            
            $this->carrito->actualizaItem(array(
                'id' => $idproducto,
                'cantidad' => $cantidadFinal
            ));
        }
        
        echo json_encode($this->carrito->getCarrito());
    }
}