<?php
if (! defined('BASEPATH'))
    exit('No direct script access allowed');

/**
 * Librería que realiza una consulta al Banco Central Europeo
 * para saber el valor actual del cambio € a diferentes monedas
 *
 * @author Carlos *
 *        
 */
class Moneda
{

    private $_monedas = array();

    /**
     * Constructor clase carrito
     */
    public function __construct()
    {
        // Set the super object to a local variable for use later
        $this->CI = & get_instance();
        // Load the Sessions class
        $this->CI->load->library('session');
        
        if ($this->CI->session->userdata('monedas') == FALSE) {
            // si esta vacío, obtenemos valores
            $this->carga_rates();
            
            // cargamos una moneda por defecto, EURO
            $moneda = array(
                'nombre' => 'EUR',
                'valor' => 1
            );
            
            $this->CI->session->set_userdata('moneda',$moneda);                    
        }
        $this->_monedas = unserialize($this->CI->session->userdata('monedas'));
       
    }

    /**
     * Obtenemos el cambio euro a otras monedas
     */
    public function carga_rates()
    {
        $XML = simplexml_load_file("http://www.ecb.europa.eu/stats/eurofxref/eurofxref-daily.xml");
        // the file is updated daily between 2.15 p.m. and 3.00 p.m. CET
        
        foreach ($XML->Cube->Cube->Cube as $rate) {
            // Output the value of 1EUR for a currency code
            //echo '1&euro;='.$rate["rate"].' '.$rate["currency"].'<br/>';
           
            //$this->_cart['moneadas'][$itemid]['cantidad'] = $data['cantidad'];
            
            $moneda = array(
                'rate' => (string)$rate['rate'],
                'nombre' => (string)$rate['currency']
            );
            $this->_monedas['monedas'][(string)$rate['currency']] = (string)$rate['rate'];           
            // --------------------------------------------------
            // Here you can add your code for inserting
            // $rate["rate"] and $rate["currency"] into your database
            // --------------------------------------------------
        }
        $this->CI->session->set_userdata('monedas', serialize($this->_monedas));
    }

    /**
     * Función que realiza la conversión euro a una moneda determinada
     *
     * @param string $currency
     *            tipo de moneada
     * @param double $cantidad
     *            cantidad en euros
     * @return number resultado de la conversión
     */
    public function hacer_conversion($nombremoneda, $cantidad)
    {
        $this->_monedas = unserialize($this->CI->session->userdata('monedas'));
        
        $rate = $this->_monedas['monedas'][$nombremoneda];
        $conversion = (double) $cantidad * (double) $rate;      
        
        return $conversion;
    }

    /**
     * Devuelve el array de monedas y rates
     *
     * @return multitype:
     */
    public function get_monedas()
    {
        $monedas = $this->_monedas;
        return $monedas;
    }
    
    /**
     * 
     * @param unknown $nombremoneda
     * @return multitype:
     */
    public function get_valor_moneda($nombremoneda){
        $valor = $this->_monedas['monedas'][$nombremoneda];
        return $valor;
    }
}