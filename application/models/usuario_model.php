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

    /**
     * Obtiene datos de un usuario
     *
     * @param string $email            
     * @param string $username            
     */
    public function getUsuario($email, $username)
    {
        $this->db->where('username', $username);
        $this->db->or_where('email', $email);
        $query = $this->db->get('usuario');
        
        return $query->result_array();
    }

    /**
     * Inserta un nuevo usuario en la bbdd
     *
     * @param unknown $data            
     */
    public function insertarUsuario($data)
    {
        // comprobamos si ya existe una cuenta con ese email o username
        $usuario = $this->getUsuario($data['email'], $data['username']);
        
        // var_dump($usuario);
        
        if (empty($usuario)) {
            $this->db->insert('usuario', $data);
            return true;
        } else {
            $this->session->set_flashdata('usuario_incorrecto', 'Ya existe una cuenta con los datos introducidos');
            return false;
        }
    }

    /**
     *
     * @param string $email            
     * @param string $password            
     */
    public function login_user($username, $password)
    {
        $this->db->where('username', $username);
        $this->db->where('password', $password);
        $this->db->where('estado', 1); // usuarios revisados por administrador
        
        $query = $this->db->get('usuario');
        
        if ($query->num_rows() == 1) {
            return $query->row();
        } else {
            $this->session->set_flashdata('usuario_incorrecto', 'Los datos introducidos son incorrectos');
            return false;
        }
    }
}