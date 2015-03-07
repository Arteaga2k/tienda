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
        $this->load->model('pedido_model');
    }

    public function panelUsuario()
    {
        $login = $this->session->userdata("login");
        if ($this->login->usuario_logueado()) {
            
            $this->form['error'] = $this->session->flashdata('pedido_incorrecto');
            
            $pedidosNoProce = $this->pedido_model->getPedsNoProcesados($login['id_usuario']);
            $historialPedidos = $this->pedido_model->getPedidos($login['id_usuario']);
            $usuario = $this->usuario_model->getUsuarioById($login['id_usuario']);
            $monedas = $this->moneda->get_monedas();
            
            echo $this->twig->render('usuario/panel_usuario.twig', array(
                'monedas' => $monedas['monedas'],
                'moneda' => $this->session->userdata('moneda'),
                'form' => $this->form,
                'usuario' => $usuario,
                'pedsNoProce' => $pedidosNoProce,
                'pedidos' => $historialPedidos
            ));
        } else {
            $this->session->set_userdata("url", 'usuario/panelUsuario');
            redirect(site_url('usuario/loginUsuario'));
        }
    }

    /**
     * Función crea formulario login
     */
    public function loginUsuario()
    {
        $this->form["form_login"] = form_open("usuario/procesaFormLogin", array(
            "class" => "form-horizontal",
            "name" => "procesaFormLogin"
        ));
        
        $this->form['token'] = $this->token();
        $provincias = $this->home_model->getProvincias();
        $monedas = $this->moneda->get_monedas();
        
        echo $this->twig->render('usuario/login_formulario.twig', array(
            'monedas' => $monedas['monedas'],
            'moneda' => $this->session->userdata('moneda'),
            'provincias' => $provincias,
            'form' => $this->form
        ));
    }

    /**
     * Función crear formulario
     */
    public function creaUsuario()
    {
        $this->form['id'] = 0;
        
        $this->form["form_alta"] = form_open("usuario/procesaFormUsuario", array(
            "class" => "form-horizontal",
            "name" => "procesaFormUsuario"
        ));
        
        $this->form['token'] = $this->token();
        $provincias = $this->home_model->getProvincias();
        $monedas = $this->moneda->get_monedas();
        
        echo $this->twig->render('usuario/alta_formulario.twig', array(
            'monedas' => $monedas['monedas'],
            'moneda' => $this->session->userdata('moneda'),
            'provincias' => $provincias,
            'form' => $this->form
        ));
    }

    /**
     * Muestra formulario edición usuario
     */
    public function editaUsuario($id = 0)
    {
        // comprobamos que usuario está logueado
        if ($this->login->usuario_logueado()) {
            if (isset($id) && $id != 0) {
                // obtenemos usuario
                $usuario = $this->usuario_model->getUsuarioById($id);
                // si existe usuario a editar
                if (! empty($usuario)) {
                    $this->form['usuario'] = $usuario;
                    $this->form['id'] = $id;
                    
                    $this->form["form_edicion"] = form_open("usuario/procesaFormUsuario", array(
                        "class" => "form-horizontal",
                        "name" => "procesaFormUsuario"
                    ));
                    
                    $this->form['token'] = $this->token();
                    $provincias = $this->home_model->getProvincias();
                    $monedas = $this->moneda->get_monedas();
                    
                    echo $this->twig->render('usuario/usuario_edita_formulario.twig', array(
                        'monedas' => $monedas['monedas'],
                        'moneda' => $this->session->userdata('moneda'),
                        'provincias' => $provincias,
                        'form' => $this->form,
                        'usuario' => $this->session->userdata("login")
                    ));
                } else {
                    redirect(site_url('home'));
                }
            }
        } else {
            $this->session->set_userdata("url", 'usuario/editaUsuario/' . $id . '');
            redirect(site_url('usuario/loginUsuario'));
        }
    }
    
    /**
     * Muestra formulario confirmación baja de usuario
     * @param int $id identificador de usuario
     */
    public function confirmar_baja_usuario($id){
        // comprobamos que usuario está logueado
        if ($this->login->usuario_logueado()) {
            if (isset($id) && $id != 0) {
                // obtenemos usuario
                $usuario = $this->usuario_model->getUsuarioById($id);
                $monedas = $this->moneda->get_monedas();
                             
                echo $this->twig->render('usuario/confirmacion.twig', array(
                    'cabecera' => 'Confirmación baja de usuario',
                    'monedas' => $monedas['monedas'],
                    'moneda' => $this->session->userdata('moneda'),                           
                    'usuario' =>$usuario
                ));
            }
        }
    }
    
    /**
     * Realiza la baja de un usario
     * @param int $id identificador de usuario
     */
    public function procesa_baja_usuario($id){
        // comprobamos que usuario está logueado
        if ($this->login->usuario_logueado()) {
            if (isset($id) && $id != 0) {
                // obtenemos usuario
                $usuario = $this->usuario_model->procesa_baja_usuario($id);                
                $this->logout();                
            }
        }
    }

    /**
     * Muestra formulario edición contraseña de usuario
     * 
     * @param string $id
     *            identificador usuario
     */
    public function editaPassword($id = 0)
    {
        // comprobamos que usuario está logueado
        if ($this->login->usuario_logueado()) {
            if (isset($id) && $id != 0) {
                // obtenemos usuario
                $usuario = $this->usuario_model->getUsuarioById($id);
                // si existe usuario a editar
                if (! empty($usuario)) {

                    $this->form['id'] = $id;
                    $this->form['token'] = $this->token();
                    // guardamos error
                    $this->form['error'] = $this->session->flashdata('error_nuevo_pwd');
                    $monedas = $this->moneda->get_monedas();
                    
                    $this->form["form_edicion_pwd"] = form_open("usuario/procesaFormEditaPwD", array(
                        "class" => "form-horizontal",
                        "name" => "procesaFormEditaPwD"
                    ));
                    
                    echo $this->twig->render('usuario/usuario_editapwd_formulario.twig', array(
                        'monedas' => $monedas['monedas'],
                        'moneda' => $this->session->userdata('moneda'),
                        'form' => $this->form,
                        'usuario' => $this->session->userdata("login")
                    ));
                }
            } else {
                redirect(site_url('home'));
            }
        } else { // usuario no logueado, redireccionamos a formulario login
            $this->session->set_userdata("url", 'usuario/editaUsuario/' . $id . '');
            redirect(site_url('usuario/loginUsuario'));
        }
    }

    /**
     */
    public function restablecePassword()
    {
        $this->form['token'] = $this->token();
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
        $this->form['error'] = $this->session->flashdata('error_email');
        
        // Comprueba validación formulario
        if ($this->form_validation->run() == FALSE || $this->form['error']) {
            $this->form["email"] = form_error('email');
            
            $this->form["form_email"] = form_open("", array(
                "class" => "form-horizontal"
            ));
            
            echo $this->twig->render('usuario/nueva_pwd_formulario.twig', array(
                'form' => $this->form
            ));
        } else {
            // obtenemos datos usuario
            $usuario = $this->usuario_model->getUsuarioByEmail($this->input->post('email'));
            // si existe usuario con ese email
            if (! empty($usuario)) {
                
                $nueva_clave = substr(md5(rand()), 0, "10"); // generamos una nueva contraseña de forma aleatoria
                $usuario_clave2 = md5($nueva_clave); // encriptamos la nueva contraseña para guardarla en la BBDD
                                                     
                // editamos contraseña en la bbdd
                $filasEditadas = $this->usuario_model->editaUsuario(array(
                    'password' => $usuario_clave2
                ), $usuario['idUsuario']);
                
                if ($filasEditadas == 1) {
                    // envia email con la nueva contraseña
                    $enviado = $this->sendNuevoPwD($nueva_clave);
                    
                    if ($enviado == TRUE) {
                        echo $this->twig->render('_templates/correcto.twig', array(
                            'mensaje' => 'Nueva contraseña enviada, revise su cuenta de correo'
                        ));
                    } else {
                        $this->session->set_flashdata('error_email', 'No se ha podido enviar nueva contraseña a ' . $this->input->post('email'));
                        redirect(site_url('usuario/restablecePassword'));
                    }
                } else {
                    $this->session->set_flashdata('error_email', 'No se ha podido generar una nueva contraseña');
                    redirect(site_url('usuario/restablecePassword'));
                }
            } else {
                // no existe email en bbdd
                $this->session->set_flashdata('error_email', 'La cuenta de correo ' . $this->input->post('email') . ' no está registrada en nuestra base de datos');
                redirect(site_url('usuario/restablecePassword'));
            }
        }
    }

    /**
     * Procesado formularios de creación y modificación datos
     * de usuario
     */
    public function procesaFormUsuario()
    {
        // verificamos token formulario
        $this->verificaToken('token');
        // obtenemos id
        $id = $this->input->post('id');
        
        $this->form_validation->set_rules('username', 'Username', 'required');
        if (! isset($id) && empty($id)) {
            $this->form_validation->set_rules('password', 'Password', 'trim|required|matches[passconf]|md5');
            $this->form_validation->set_rules('passconf', 'Confirmación Password', 'trim|required');
        }
        
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
        $this->form_validation->set_rules('nombre', 'Nombre', 'required');
        $this->form_validation->set_rules('apellidos', 'Apellidos', 'required');
        $this->form_validation->set_rules('dni', 'Dni', 'required|callback_dni_check');
        $this->form_validation->set_rules('direccion', 'Direccion', 'required');
        $this->form_validation->set_rules('cp', 'Código Postal', 'required|numeric|min_length[5]|max_length[5]');
        $this->form_validation->set_rules('provincia', 'Provincia', 'required');
        
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
            $this->form["provincia"] = form_error('provincia');
            
            if (isset($id) && ! empty($id))
                $this->editaUsuario($this->input->post('id'));
            else
                $this->creaUsuario();
        } else {
            
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
            
            // si existe post(id) estamos editando un usuario
            if (isset($id) && ! empty($id)) {
                // si usuario puede modificar sus datos, su estado actual es 1
                $usuario['estado'] = 1;
                
                // editamos usuario y recibimos filas afectadas
                $rows = $this->usuario_model->editaUsuario($usuario, $id);
                if ($rows == 1)
                    redirect(site_url('home'));
                else
                    redirect(site_url($this->session->userdata("url")));
            } else {
                // creamos usuario, guardamos resultado operación en $result
                $result = $this->usuario_model->creaUsuario($usuario);
                // si creamos con exito el usuario
                if ($result) {
                    // seguimos con el pedido
                    redirect(site_url('carro/verCarro'));
                } else {
                    // guardamos mensaje de error producido
                    $this->form['error'] = $this->session->flashdata('usuario_incorrecto');
                    redirect(site_url($this->session->userdata("url") ? $this->session->userdata("url") : 'home'));
                }
            }
        }
    }

    /**
     * Valida formulario acceso de usuario
     */
    public function procesaFormLogin()
    {
        // verificamos token formulario
        $this->verificaToken('tokenLogin');
        
        $this->form_validation->set_rules('usernameLogin', 'Username', 'required');
        $this->form_validation->set_rules('passwordLogin', 'Password', 'trim|required|md5');
        
        $form["form_login"] = form_open("usuario/procesaFormLogin", array(
            "class" => "form-horizontal",
            "name" => "procesaFormLogin"
        ));
        
        // guardamos error
        $form['errorLogin'] = $this->session->flashdata('usuario_incorrecto');
        
        // Comprueba validación formulario
        if ($this->form_validation->run() == FALSE) {
            $this->loginUsuario();
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
                
                redirect(site_url($this->session->userdata("url")));
            } else {
                $this->loginUsuario();
            }
        }
    }

    /**
     * Valida el formulario edición contraseña de un usuario
     */
    public function procesaFormEditaPwD()
    {
        $this->verificaToken('tokenLogin');
        // obtenemos id
        $id = $this->input->post('id');
        $this->form_validation->set_rules('passvieja', 'Password', 'trim|required|md5');
        $this->form_validation->set_rules('passnueva', 'Password', 'trim|required|matches[passconf]|md5');
        $this->form_validation->set_rules('passconf', 'Confirmación Password', 'trim|required');        
       
        
        // Comprueba validación formulario
        if ($this->form_validation->run() == FALSE) {
            $this->form['passvieja'] = form_error('passvieja');
            $this->form['passnueva'] = form_error('passnueva');
            $this->form['passconf'] = form_error('passconf');
            
            $this->editaPassword($id);
        } else {
            $passvieja = $this->input->post('passvieja');
            $id = $this->input->post('id');
            
            $usuario = $this->usuario_model->getUsuarioById($id);
           
            // si contraseña vieja coincide            
            if ($usuario['password'] == $passvieja) {
                $passnueva = $this->input->post('passnueva');
                $result = $this->usuario_model->editaPassword($id, $passnueva);
                
                if ($result) {
                    echo $this->twig->render('_templates/correcto.twig', array(
                        'mensaje' => 'Contraseña editada satisfactoriamente'
                    ));
                } else {
                    // TODO
                }
            }else{
                $this->session->set_flashdata('error_nuevo_pwd','Contraseña actual incorrecta');                
                $this->editaPassword($id);              
            }
        }
    }

    /**
     * Verifica token formulario
     *
     * @param unknown $cadena            
     * @return boolean
     */
    private function verificaToken($cadena)
    {
        if (! $this->input->post($cadena) && $this->input->post($cadena) == $this->session->userdata('token')) {
            redirect(site_url('usuario'));
        }
    }

    /*
     * función verifica validez dni
     */
    public function dni_check($dni)
    {
        $letra = substr($dni, - 1);
        $numeros = substr($dni, 0, - 1);
        if (substr("TRWAGMYFPDXBNJZSQVHLCKE", $numeros % 23, 1) == $letra && strlen($letra) == 1 && strlen($numeros) == 8) {
            return TRUE;
        } else {
            $this->form_validation->set_message('dni', 'The %s is invalid"');
            return FALSE;
        }
    }

    private function sendNuevoPwD($clave)
    {
        // Utilizando sendmail
        $config['protocol'] = 'smtp';
        $config['smtp_host'] = 'mail.iessansebastian.com';
        $config['smtp_user'] = 'aula4@iessansebastian.com';
        $config['smtp_pass'] = 'daw2alumno';
        
        $this->email->initialize($config);
        $this->email->from('aula4@iessansebastian.com', 'Prueba Automática desde CI');
        $this->email->to('arteaga.dev@gmail.com');
        // $this->email->cc('another@another-example.com');
        // $this->email->bcc('them@their-example.com');
        
        $this->email->subject('Restablecimiento de contraseña');
        $this->email->message("\n\nSu nueva contraseña es $clave \n");
        
        if ($this->email->send()) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    /**
     * clave aleatoria que será la que contendrá el formulario
     * de esta forma evitaremos el Cross-Site Request Forgery.
     *
     *
     * @return string
     */
    private function token()
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
        $this->session->set_userdata('url', 'home');
        $this->session->unset_userdata('login');
        redirect(site_url('home'));
    }
}