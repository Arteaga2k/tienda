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
		
		$itemid = $data['id'];
		
		if (isset($this->_cart[$itemid])) {
			$this->_cart[$itemid]['cantidad'] += $data['cantidad'];
		} else {
			$this->_cart[$itemid]['cantidad'] = $data['cantidad'];
			$this->_cart[$itemid]['precio'] = $data['precio'];
		}		
		
		
		if ($this->CI->session->userdata ( 'cart' ) !== FALSE){
			$this->CI->session->userdata ( serialize($this->_cart) ) ;
		}
		
		//return($this->_cart);
		
		
		
	}
	
	
}
