<?php

class Usuario extends CI_Controller
{
    private $form = array();

    /**
     * Constructor clase Home
     */
    public function __construct()
    {
        parent::__construct();
        $this->load->model('usuario_model');
        $this->load->model('home_model');   
    }
    
    /**
     * formularios alta y login usuario
     */
    public function index(){

        $this->form["form_alta"] = form_open("usuario/nuevoUsuario", array(
            "class" => "form-horizontal",
            "name" => "nuevousuario"
        ));
        
        $this->form["form_login"] = form_open("usuario/loginUsuario", array(
            "class" => "form-horizontal",
            "name" => "loginusuario"
        ));
        
        $this->form['token'] = $this->token();
        $provincias = $this->home_model->getProvincias();              
        
        echo $this->twig->render('usuario/formulario.twig', array(
            'provincias' => $provincias,
            'form' => $this->form
        ));
    }

    /**
     * Da de alta un nuevo usuario
     */
    public function nuevoUsuario()
    {        
        // existe variable post token y es igual
        // a la sesión llamada token que se ha creado
        if ($this->input->post('token') && $this->input->post('token') == $this->session->userdata('token')) {   
            
            
            $this->form_validation->set_rules('username', 'Username', 'required');
            $this->form_validation->set_rules('password', 'Password', 'trim|required|matches[passconf]|md5');
            $this->form_validation->set_rules('passconf', 'Confirmación Password', 'trim|required');
            $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
            $this->form_validation->set_rules('nombre', 'Nombre', 'required');
            $this->form_validation->set_rules('apellidos', 'Apellidos', 'required');
            $this->form_validation->set_rules('dni', 'Dni', 'required');
            $this->form_validation->set_rules('direccion', 'Direccion', 'required');
            $this->form_validation->set_rules('cp', 'Código Postal', 'required|numeric');            
           
            
            // Comprueba validación formulario
            if ($this->form_validation->run() == FALSE) {
                
                $this->form["username"] = form_error('username');
                $this->form["password"] = form_error('password');
                $this->form["passconf"] = form_error('passconf');
                $this->form["email"] = form_error('email');
                $this->form["nombre"] = form_error('nombre');
                $this->form["apellidos"] = form_error('apellidos');
                $this->form["dni"] = form_error('dni');
                $this->form["direccion"] = form_error('direccion');
                $this->form["cp"] = form_error('cp');
                
                $this->index();
                
            } else {
                // damos de alta usuario
                //TODO comprobar que exista otro usuario con mismos datos
                
                $usuario = array(
                    'username' => $this->input->post('username'),
                    'password' => $this->input->post('password'),
                    'email' => $this->input->post('email'),
                    'nombre' => $this->input->post('nombre'),
                    'apellidos' => $this->input->post('apellidos'),
                    'dni' => $this->input->post('dni'),
                    'direccion' => $this->input->post('direccion'),
                    'cp' => $this->input->post('cp'),
                    'idProvincia' => $this->input->post('provincia'),
                    'estado' => 0
                );
                $this->usuario_model->insertarUsuario($usuario);
            }
        } else {
            redirect(base_url() . 'usuario');
        }
    }

    /**
     */
    public function loginUsuario()
    {
        $this->form_validation->set_rules('emailLogin', 'Username', 'required');
        $this->form_validation->set_rules('passwordLogin', 'Password', 'trim|required|md5');
        
        $form["form_alta"] = form_open("usuario/nuevoUsuario", array(
            "class" => "form-horizontal",
            "name" => "nuevousuario"
        ));
        
        $form["form_login"] = form_open("usuario/loginUsuario", array(
            "class" => "form-horizontal",
            "name" => "loginusuario"
        ));
        
        // guardamos error
        $form['errorLogin'] = $this->session->flashdata('usuario_incorrecto');
        
        // Comprueba validación formulario
        if ($this->form_validation->run() == FALSE) {
            
            $provincias = $this->home_model->getProvincias();
            
            echo $this->twig->render('usuario/formulario.twig', array(
                'provincias' => $provincias,
                'form' => $form
            ));
        } else {
            
            $email = $this->input->post('emailLogin');
            $password = $this->input->post('passwordLogin');
            $usuario = $this->usuario_model->login_user($email, $password);
            
            if ($usuario == TRUE) {
                $data = array(
                    'is_logued_in' => TRUE,
                    'id_usuario' => $usuario->idUsuario,
                    'username' => $usuario->username
                );
                $this->session->set_userdata($data);
                
                // TODO redireccionar al proceso de compra
            }
        }
    }
    
    /**
     * clave aleatoria que será la que contendrá el formulario 
     * de esta forma evitaremos el Cross-Site Request Forgery. 
     *  
     * @return string
     */
    public function token()
    {
        $token = md5(uniqid(rand(),true));
        $this->session->set_userdata('token',$token);
        return $token;
    }
    
    /**
     * eliminamos sesion
     */
    public function logout_ci()
    {
        $this->session->sess_destroy();
        //TODO redirect pantalla principal
    }
}