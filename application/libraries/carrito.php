<?php

if (! defined ( 'BASEPATH' ))
	exit ( 'No direct script access allowed' );

$data = array(
               'id'      => 'sku_123ABC',
               'qty'     => 1,
               'price'   => 39.95,
               'name'    => 'T-Shirt'               
            );



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
			$this->_cart = $this->CI->session->userdata('cart');
		} else {
			$this->_cart = $this->CI->session->userdata ( 'cart' ) ;
		}
	}
	
	/**
	 * Desstructor clase carrito
	 */
	function __destruct() {
		unset ( $this->_cart );
		
		/*$this->_cart ['cart_total'] = 0;
		$this->_cart ['total_items'] = 0;*/
		
		$this->CI->session->unset_userdata ( 'cart' );
	}
	
	/**
	 * Función que guarda carrito en sesion
	 */
	public function GuardaCarrito() {
		$carrito = $this->CI->session->userdata ( 'cart' ) ;
		
		if (!empty($carrito)){
			$carrito = $this->_cart;
		}
	}
	
	/**
	 * function for Add Item to Cart
	 * 
	 * @param mixed $itemID        	
	 * @param mixed $itemData        	
	 * @param int $count        	
	 */
	public function AddItems($items = array()) {
		if (( int ) $count <= 0)
			return;
		if (isset ( $this->_cart [$items['id']] )) {
			$this->_cart [$items['id']] ['cantidad'] += $cantidad;
		} else {
			$this->_cart [$items['id']] ['cantidad'] = $items['cantidad'];
			$this->_cart [$items['id']] ['precio'] = $items['precio'];
			$this->_cart [$items['id']] ['nombre'] = $items['nombre'];
		}
		
		$this->GuardaCarrito ();
	}
	
	/**
	 * function for Del Item from Cart
	 * 
	 * @param mixed $itemID        	
	 * @param int $count        	
	 */
	public function RemoveItems($itemID, $count) {
		if ($count < 0)
			return;
		if (isset ( $this->_cart [$itemID] )) {
			if ($this->_cart [$itemID] ['count'] > $count) {
				$this->_cart [$itemID] ['count'] -= $count;
			} else {
				unset ( $this->_cart [$itemID] );
			}
		}
		$this->GuardaCarrito ();
	}
	
	/**
	 * Función que devuelte el carrito
	 *
	 * @return multitype: datos carrito
	 */
	public function GetCarrito() {
		return $this->_cart;
	}
	
	/**
	 * function return Items total count from Cart
	 */
	public function GetItemsCount() {
		$count_total = 0;
		foreach ( $this->_cart as $cart_position ) {
			$count_total += $cart_position ['count'];
		}
		return ( int ) $count_total;
	}
	
	/**
	 *
	 * @return number
	 */
	public function GetPositionsCount() {
		return ( int ) count ( $this->_cart );
	}
}
