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
					WHERE producto_destacado.fecha_inicio <= "'.date("Y-m-d").'"
					';
		
		
		$condFecha = array(
				'fecha_inicio' => NULL,
				'fecha_fin' => NULL			
		);
		
		echo $consulta;
		
		$productosDest = $this->db->query($consulta);
		
		/*= $this->db
		->select('*')
		->from('producto_destacado')
		->from('producto')
		->where('fecha_inicio <=' , date("Y-m-d"))		
		->where('fecha_fin >=', date("Y-m-d"))
		->or_where($condFecha)
		->join('producto_destacado', 'producto_destacado.idProducto_destacado = producto.idProducto', 'left')
		->get();*/
		
		return $productosDest;
	}
}
