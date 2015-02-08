<?php

/**
 * 
 * @author Carlos
 *
 */
class Usuario_model extends CI_Model
{

    /**
     * constructor
     */
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
    
    
    public function getUsuario($email, $username){
        $this->db->where('username', $username);
    }
    
    
    public function insertarUsuario($data){        
        
        $this->db->insert('usuario', $data);        
        // Produces: INSERT INTO mytable (title, name, date) VALUES ('My title', 'My name', 'My date')
    }
    
    public function login_user($email,$password)
    {
        $this->db->where('email',$email);
        $this->db->where('password',$password);
        $this->db->where('estado',1); // usuarios revisados por administrador
       
        $query = $this->db->get('usuario');
     
        if($query->num_rows() == 1)
        {
            return $query->row();
        }else{
            $this->session->set_flashdata('usuario_incorrecto','Los datos introducidos son incorrectos');
            redirect(base_url().'usuario/loginUsuario','refresh');
        }
    }
}