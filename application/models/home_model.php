<?php
/**
 * 
 * @author 2DAWT
 *
 */
class Home_model extends CI_Model {
	
	/**
	 * 
	 */
	public function __construct(){
		
		parent::__construct();
		$this->load->database();
	}
	
	/**
	 * 
	 * @return listado de categorias revisadas
	 */
	public function  getCategorias(){
		$categorias = $this->db->where('revisado', true)->get('categoria');
				
		return $categorias;
	}
	
	
	/**
	 * 
	 * @return listado productos destacados
	 */
	public function getProductosDestacados(){
		
		$consulta = 'SELECT *
					FROM producto_destacado
					INNER JOIN producto
					ON producto_destacado.idProducto=producto.idProducto
					WHERE (producto_destacado.fecha_inicio <= "'.date("Y-m-d").'" 
					AND producto_destacado.fecha_fin >= "'.date("Y-m-d").'") 
					OR (producto_destacado.fecha_inicio is null AND producto_destacado.fecha_fin is null)										
					';
		
		
		$condFecha = array(
				'fecha_inicio' => NULL,
				'fecha_fin' => NULL			
		);
		
		echo $consulta;
		
		$productosDest = $this->db->query($consulta);		
		
		return $productosDest;
	}
}
