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
	 * Constructos clase carrito
	 */
	public function __construct() {
		// Set the super object to a local variable for use later
		$this->CI = & get_instance ();
		// Load the Sessions class
		$this->CI->load->library ( 'session' );
		
		// Grab the shopping cart array from the session table, if it exists
		if ($this->CI->session->userdata ( 'cart' ) !== FALSE) {
			$this->_cart = $this->CI->session->userdata ( 'cart' );
		} else {
			$this->_cart = "";
		}
	}
}
