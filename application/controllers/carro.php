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
        
        $this->session->set_userdata("url", 'carro/verCarro/');
        
        $this->form['token'] = $this->token();
        $this->form["form_carro"] = form_open("carro/form_detalle_carro", array(
            "class" => "form-horizontal",
            "name" => "procesaFormUsuario"
        ));
        
        echo $this->twig->render('carro/detalle_carro.twig', array(
            'monedas' => $monedas['monedas'],
            'moneda' => $this->session->userdata('moneda'),
            'carrito' => $this->carrito->getCarrito(),
            'usuario' => $this->session->userdata('login'),
            'form' => $this->form
        ));
    }
    
    public function form_detalle_carro(){
        // verificamos token formulario
        $this->verificaToken('token');
        // obtenemos id
        $id = $this->input->post('id');
        
        $this->form_validation->set_rules('cantidad', 'Cantidad', 'required|numeric|min_length[1]|greater_than[0]');
        
        // Comprueba validación formulario
        if ($this->form_validation->run() == FALSE) {        
            $this->form["cantidad"] = form_error('cantidad');            
            $this->verCarro();
        }else {
            $cantidad = $this->input->post('cantidad');
            if ($cantidad>0)
            $this->ajaxUpdateCart($this->input->post('cantidad'), $this->input->post('idProducto'));
            redirect(site_url('carro/verCarro'));
        }
       
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
    
    /**
     * clave aleatoria que será la que contendrá el formulario
     * de esta forma evitaremos el Cross-Site Request Forgery.
     *
     *
     * @return string
     */
    private function token()
    {
        $token = md5(uniqid(rand(), true));
        $this->session->set_userdata('token', $token);
        return $token;
    }
    
    /**
     * Verifica token formulario
     *
     * @param unknown $cadena
     * @return boolean
     */
    private function verificaToken($cadena)
    {
        if (! $this->input->post($cadena) && $this->input->post($cadena) == $this->session->userdata('token')) {
            redirect(site_url('carro'));
        }
    }
}