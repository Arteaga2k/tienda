<?php
if (! defined ( 'BASEPATH' ))
	exit ( 'No direct script access allowed' );

/**
 * Librería carrito de la compra
 *
 * @author Carlos
 *        
 */
class Carrito {
	private $_cart = array (); // Datos carrito
	
	/**
	 * Constructor clase carrito
	 */
	public function __construct() {
		// Set the super object to a local variable for use later
		$this->CI = & get_instance ();
		// Load the Sessions class
		$this->CI->load->library ( 'session' );
		
				
		
		// Grab the shopping cart array from the session table, if it exists
		if ($this->CI->session->userdata ( 'cart' ) !== FALSE) {
			$this->_cart =unserialize($this->CI->session->userdata ( 'cart' ));
		}
	}
	
	/**
	 * 
	 * @param unknown $data
	 */
	public function InsertarItem($data = array()){
		if ( ! is_array($data) OR count($data) == 0){
			return;
		}
		
		if (isset($this->_cart[$data]['id'])) {
			$this->_cart[$data]['id']['cantidad'] += $data['cantidad'];
		} else {
			$this->_cart[$data]['id']['cantidad'] = $data['cantidad'];
			$this->_cart[$data]['id']['precio'] = $data['precio'];
		}
		
		$this->CI->session->userdata ( 'cart' ) = serialize($this->_cart);
		
	}
	
	public function EliminarItem($itemID, $count){
	    if ($count < 0) return;
	    if (isset($this->_cart[$itemID])) {
	        if ($this->_cart[$itemID]['count'] > $count) {
	            $this->_cart[$itemID]['count'] -= $count;
	        } else {
	            unset($this->_cart[$itemID]);
	        }
	    }
	    $this->FlushCart();
	}
}
