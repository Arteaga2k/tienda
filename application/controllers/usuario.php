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
     * muestra formularios alta y login usuario
     */
    public function index()
    {
        $this->form['id'] = 0;
        
        $this->form["form_alta"] = form_open("usuario/formUsuario", array(
            "class" => "form-horizontal",
            "name" => "formUsuario"
        ));
        
        $this->form["form_login"] = form_open("usuario/formLogin", array(
            "class" => "form-horizontal",
            "name" => "formLogin"
        ));
        
        $this->form['token'] = $this->token();
        $provincias = $this->home_model->getProvincias();
        
        echo $this->twig->render('usuario/alta_formulario.twig', array(
            'provincias' => $provincias,
            'form' => $this->form
        ));
    }
    
    /**
     * Muestra formulario edición usuario
     */
    public function editaUsuario($id)
    {   
        $this->form['id'] = $id;
        
       
    }

    /**
     * Da de alta un nuevo usuario
     */
    public function formUsuario()
    {
        // existe variable post token y es igual
        // a la sesión llamada token que se ha creado
        if ($this->verificaToken('token')) {
            
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
                // TODO comprobar que exista otro usuario con mismos datos
                
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
                $result = $this->usuario_model->insertarUsuario($usuario);
                if ($result) {
                    // seguimos con el pedido
                    redirect(base_url() . 'carro/verCarro');
                } else {
                    // guardamos mensaje de error producido
                    $this->form['error'] = $this->session->flashdata('usuario_incorrecto');
                    $this->index();
                }
            }
        }
    }
    

    /**
     * Valida formulario acceso de usuario
     */
    public function formLogin()
    {
        if ($this->verificaToken('tokenLogin')) {
            // existe variable post token y es igual
            // a la sesión llamada token que se ha creado
            
            $this->form_validation->set_rules('usernameLogin', 'Username', 'required');
            $this->form_validation->set_rules('passwordLogin', 'Password', 'trim|required|md5');
            
            $form['form_alta'] = form_open('usuario/formUsuario', array(
                'class' => 'form-horizontal',
                'name' => 'formUsuario'
            ));
            
            $form["form_login"] = form_open("usuario/formLogin", array(
                "class" => "form-horizontal",
                "name" => "formLogin"
            ));
            
            // guardamos error
            $form['errorLogin'] = $this->session->flashdata('usuario_incorrecto');
            
            // Comprueba validación formulario
            if ($this->form_validation->run() == FALSE) {
                
                $this->index();
            } else {
                
                $username = $this->input->post('usernameLogin');
                $password = $this->input->post('passwordLogin');
                $usuario = $this->usuario_model->login_user($username, $password);
                
                if ($usuario == TRUE) {
                    $data = array(
                        'is_logued_in' => TRUE,
                        'id_usuario' => $usuario->idUsuario,
                        'username' => $usuario->username
                    );                    
                    // guardamos en session datos login
                    $this->session->set_userdata("login", $data);                    
                    // redireccionamos al paso realizar pedido
                    // estando logueado
                    redirect(base_url() . 'carro/realizaPedido');
                }else{
                    $this->index();
                }
            }
        }
    }

    /**
     * Verifica token formulario
     *
     * @param unknown $cadena            
     * @return boolean
     */
    public function verificaToken($cadena)
    {
        if ($this->input->post($cadena) && $this->input->post($cadena) == $this->session->userdata('token')) {
            return true;
        } else {
            redirect(base_url() . 'usuario');
        }
    }

    /**
     * clave aleatoria que será la que contendrá el formulario
     * de esta forma evitaremos el Cross-Site Request Forgery.
     *
     *
     * @return string
     */
    public function token()
    {
        $token = md5(uniqid(rand(), true));
        $this->session->set_userdata('token', $token);
        return $token;
    }

    /**
     * eliminamos sesion
     */
    public function logout()
    {
        $this->session->unset_userdata('login');
        
        redirect(base_url() . 'home');
    }
}