<?php

/**
 * 
 * @author Carlos
 *
 */
class Pedido extends CI_Controller
{

    /**
     * Constructor clase Pedido
     */
    public function __construct()
    {
        parent::__construct();
        $this->load->model('home_model');
        $this->load->model('usuario_model');
        $this->load->model('pedido_model');
    }

    public function factura($id,$proforma = FALSE)
    {
        if ($this->login->usuario_logueado()) {
            $pedido = $this->pedido_model->getLineasById($id);
            $fechaCreacion = $pedido[0]['fecha_creacion'];
            
            // create new PDF document
            $pdf = new Pdf(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
            
            // set document information
            $pdf->SetCreator(PDF_CREATOR);
            $pdf->SetAuthor('Carlos Arteaga Virella');
            $pdf->SetTitle('Factura PDF PEDIDO' . $id);
            $pdf->SetSubject('Factura PDF');
            $pdf->SetKeywords('FACTURA, PDF');
            
            // set default header data
            $pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, PDF_HEADER_TITLE, PDF_HEADER_STRING);
            
            // set header and footer fonts
            $pdf->setHeaderFont(Array(
                PDF_FONT_NAME_MAIN,
                '',
                PDF_FONT_SIZE_MAIN
            ));
            $pdf->setFooterFont(Array(
                PDF_FONT_NAME_DATA,
                '',
                PDF_FONT_SIZE_DATA
            ));
            
            // set default monospaced font
            $pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);
            
            // set margins
            $pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
            $pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
            $pdf->SetFooterMargin(PDF_MARGIN_FOOTER);
            
            // set auto page breaks
            $pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);
            
            // set image scale factor
            $pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);
            
            // set some language-dependent strings (optional)
            if (@file_exists(dirname(__FILE__) . '/lang/eng.php')) {
                require_once (dirname(__FILE__) . '/lang/eng.php');
                $pdf->setLanguageArray($l);
            }
            
            // ---------------------------------------------------------
            
            // add a page
            $pdf->AddPage();
            
            $txt = "Shopping Cart Componentes
SL CIF: B73347494
Avda Europa, 2-3, Pol.Ind. Las Salinas.
Alhama de Murcia
30840.Murcia.";
            
            // set cell padding
            $pdf->setCellPaddings(1, 1, 1, 1);
            
            // set cell margins
            $pdf->setCellMargins(1, 1, 1, 1);
            
            // set color for background
            $pdf->SetFillColor(255, 255, 227);
            $pdf->SetFont('helvetica', 'B', 20);
            $pdf->Cell($w = 0, $h = 0, 'FACTURA', $border = 0, $ln = 2, $align = 'C');
            // $pdf->writeHTMLCell($w = 0, $h = 0, $x = '80', $y = '11', 'FACTURA DE LA COMPRA', $border = 0, $ln = 1, $fill = 0, $reseth = true, $align = 'C', $autopadding = true);
            
            // set font
            $pdf->SetFont('times', 'BI', 12);
            
            // Vertical alignment
            $pdf->MultiCell(90, 20, $txt, 1, 'J', 1, 0, '', '', true, 0, false, true, 40, 'T');
            
            $pdf->MultiCell(0, 20, $txt, 1, 'J', 1, 0, '', '', true, 0, false, true, 40, 'T');
            
            $pdf->Ln(30);
            
            $html = '<table border="1">
             <tr>
                <td>Nº de Factura: ' . $id . '</td>
                <td>Fecha: ' . $fechaCreacion . '</td>
                <td>Forma de pago: --</td>        
            </tr>      
        </table>';
            // Imprimimos el texto con writeHTMLCell()
            // $pdf->writeHTML($html, true, false, true, false, '');
            $pdf->writeHTMLCell($w = 0, $h = 0, $x = '', $y = '', $html, $border = 0, $ln = 1, $fill = 0, $reseth = true, $align = '', $autopadding = true);
            
            $html1 = '<table border="1" style="width:100%">
        <tr>
            <td width="10%" bgcolor="#A1A1A1">Cod.</td>
            <td width="53%" bgcolor="#A1A1A1">Artículo</td>
            <td width="15%" bgcolor="#A1A1A1">Precio</td>
            <td width="7%" bgcolor="#A1A1A1">Und</td>
            <td width="15%" bgcolor="#A1A1A1">Total</td>
        </tr>';
            
            foreach ($pedido as $linea) {
                $html1 .= '
                <tr>
                    <td>' . $linea['codigo'] . '</td>
                    <td  align="left">' . $linea['nombre'] . '</td>
                    <td  align="right">' . $linea['precio'] . '</td>
                    <td  align="center">' . $linea['cantidad'] . '</td>
                    <td  align="right">' . intval($linea['cantidad']) * intval($linea['precio']) . '</td>
                   
                </tr>';
            }
            $html1 .= '</table>';
            
            $pdf->writeHTMLCell($w = 0, $h = 0, $x = '', $y = '', $html1, $border = 0, $ln = 1, $fill = 0, $reseth = true, $align = '', $autopadding = true);
            // ---------------------------------------------------------
            
            $tabla3 = '<table border="1" style="width:100%">
            <tr>
                <td width="50%" bgcolor="#A1A1A1">SUBTOTAL</td>
                <td width="20%" bgcolor="#A1A1A1">IVA</td>
                <td width="30%" bgcolor="#A1A1A1">TOTAL</td>                   
            </tr>
        </table>';
            
            $pdf->writeHTMLCell($w = 0, $h = 0, $x = '', $y = '', $tabla3, $border = 0, $ln = 1, $fill = 0, $reseth = true, $align = 'R', $autopadding = true);
            
            $tabla4 = '<table border="1" style="width:100%">
            <tr>
                <td width="50%" >12</td>
                <td width="20%" >2121</td>
                <td width="30%" >3232</td>                   
            </tr>
        </table>';
            $pdf->writeHTMLCell($w = 0, $h = 0, $x = '', $y = '', $tabla4, $border = 0, $ln = 1, $fill = 0, $reseth = true, $align = 'R', $autopadding = true);
            
            // Close and output PDF document
            $pdf->Output('example_003.pdf', 'I');
            
            // ============================================================+
            // END OF FILE
            // ============================================================+
        } else {
            $this->session->set_userdata('url', 'pedido/factura/' . $id . '');
            redirect(base_url() . 'usuario/loginUsuario');
        }
    }

    /**
     */
    public function preparaPedido()
    {
        $login = $this->session->userdata("login");
        $carro = $this->carrito->getCarrito();
        
        if ($carro['articulos_total'] > 0) {
            if ($login != false && $login['is_logued_in']) {
                
                $usuario = $this->usuario_model->getUsuarioById($login['id_usuario']);
                $this->form['usuario'] = $usuario;
                $this->form['token'] = $this->token();
                
                $this->form["form_direccion"] = form_open("pedido/procesaFormDatosEnvio", array(
                    "class" => "form-horizontal",
                    "name" => "procesaFormDatosEnvio"
                ));
                $provincias = $this->home_model->getProvincias();
                
                echo $this->twig->render('pedido/datos_pedido.twig', array(
                    'provincias' => $provincias,
                    'form' => $this->form,
                    'usuario' => $this->session->userdata('login'),
                    'carrito' => $this->carrito->getCarrito()
                ));
            } else {
                $this->session->set_userdata("url", 'pedido/preparaPedido');
                redirect(base_url() . 'usuario/loginUsuario');
            }
        } else {
            $this->session->set_flashdata('carro_incorrecto', 'El carrito de la compra está vacío');
            redirect(base_url() . 'carro/verCarro');
        }
    }

    /**
     */
    public function confirmaPedido()
    {
        $login = $this->session->userdata("login");
        $this->form['usuario'] = $this->usuario_model->getUsuarioById($login['id_usuario']);
        $this->form['pedido'] = $this->session->userdata('pedido');
        
        $this->form['form_confirmaPedido'] = form_open('pedido/confirmaPedido', array(
            'class' => 'form-horizontal',
            'name' => 'form_confirmaPedido'
        ));
        
        $this->form_validation->set_rules('condicion', 'Condiciones', 'required');
        
        // Comprueba validación formulario
        if ($this->form_validation->run() == FALSE) {
            $this->form['condicion'] = form_error('condicion');
            
            echo $this->twig->render('pedido/form_confirma_pedido.twig', array(
                'carrito' => $this->carrito->getCarrito(),
                'form' => $this->form,
                'usuario' => $this->session->userdata('login')
            ));
        } else {
            $this->verificaStockPedido();
            $errores = $this->session->flashdata('stock_error');
            if (empty($errores)) {
                $id = $this->pedido_model->creaPedido($this->session->userdata('pedido'));
                if (! empty($id)) {
                    $this->pedido_model->insertaLineas($this->carrito->getCarrito(), $id);
                    $this->emailPedidoRealizado($id);
                    redirect(base_url() . 'carro/vaciaCarro');
                } else {
                    // error
                }
            } else {}
        }
    }

    /**
     */
    public function emailPedidoRealizado($id)
    {
        
        // Utilizando sendmail
        $config['protocol'] = 'smtp';
        $config['smtp_host'] = 'mail.iessansebastian.com';
        $config['smtp_user'] = 'aula4@iessansebastian.com';
        $config['smtp_pass'] = 'daw2alumno';
        $config['mailtype'] = 'html';
        $config['charset'] = 'utf-8';
        
        $this->email->initialize($config);
        $this->email->from('aula4@iessansebastian.com', 'Prueba Automática desde CI');
        $this->email->to('arteaga.dev@gmail.com');
        
        $this->email->subject("Shopping Cart");
        $this->email->message($this->cuerpoEmail($id));
        
        $this->email->send();
        // echo $this->email->print_debugger();
    }

    /**
     */
    public function procesaFormDatosEnvio()
    {
        // existe variable post token y es igual
        // a la sesión llamada token que se ha creado
        $this->verificaToken('token');
        
        $this->form_validation->set_rules('nombre', 'Nombre', 'required');
        $this->form_validation->set_rules('apellidos', 'Apellidos', 'required');
        $this->form_validation->set_rules('dni', 'Dni', 'required|callback_dni_check');
        $this->form_validation->set_rules('direccion', 'Direccion', 'required');
        $this->form_validation->set_rules('cp', 'Código Postal', 'required|numeric|min_length[5]|max_length[5]');
        
        // Comprueba validación formulario
        if ($this->form_validation->run() == FALSE) {
            
            $this->form["nombre"] = form_error('nombre');
            $this->form["apellidos"] = form_error('apellidos');
            $this->form["dni"] = form_error('dni');
            $this->form["direccion"] = form_error('direccion');
            $this->form["cp"] = form_error('cp');
            
            $this->preparaPedido();
        } else {
            // creamos pedido
            $pedido = array(
                'descripcion' => $this->input->post('descripcion'),
                'fecha_creacion' => date("Y-m-d"),
                'idUsuario' => $this->input->post('id'),
                'nombre' => $this->input->post('nombre'),
                'apellidos' => $this->input->post('apellidos'),
                'dni' => $this->input->post('dni'),
                'direccion' => $this->input->post('direccion'),
                'cp' => $this->input->post('cp'),
                'idProvincia' => $this->input->post('provincia'),
                'estado' => 0
            );
            
            // guardamos en sesion el pedido preparado
            $this->session->set_userdata('pedido', $pedido);
            // y pedimos confirmación
            redirect(base_url() . 'pedido/confirmaPedido');
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
     * Verifica token formulario
     *
     * @param unknown $cadena            
     * @return boolean
     */
    private function verificaToken($cadena)
    {
        if (! $this->input->post($cadena) && $this->input->post($cadena) == $this->session->userdata('token')) {
            redirect(base_url() . 'usuario');
        }
    }

    /**
     * Verifica el stock de los productos
     * justo antes de confirmar un pedido
     */
    private function verificaStockPedido()
    {
        $carrito = $this->carrito->getCarrito();
        $errores;
        
        foreach ($carrito['items'] as $id => $item) {
            $cantidad = $item['cantidad'];
            
            $producto = $this->home_model->getProducto($id);
            
            if ($cantidad > $producto->stock) {
                $errores[] = $id;
            }
        }
        
        if (! empty($errores))
            $this->session->set_flashdata('stock_error', $errores);
    }

    /**
     * Dibuja el cuerpo del email
     * con la factura del pedido
     *
     * @return string
     */
    private function cuerpoEmail($id)
    {
        $pedido = $this->pedido_model->getLineasById($id);
        $fechaCreacion = $pedido[0]['fecha_creacion'];
        
        $html = '<html>
            <head>
                <title>Shopping Cart</title>
            </head>
            <body>
                <img src="http://99designs.es/logo-design/store/16704/preview/6339080~3e7be7d060797973df4a43b5ba4994b4aac43d72-stocklarge" 
                    alt="Shooping Cart" height="500" width="800" />
                <p></p>
                <h2>Factura</h2>
                <hr />
                <div>
                <table border="1">
                    <tr>
                        <td>Nº de Factura: ' . $id . '</td>
                        <td>Fecha: ' . $fechaCreacion . '</td>
                        <td>Forma de pago: --</td>        
                    </tr>      
                </table>
                </div>
                <table border="1" style="width:100%">
                    <tr>
                        <td width="10%" bgcolor="#A1A1A1">Cod.</td>
                        <td width="53%" bgcolor="#A1A1A1">Artículo</td>
                        <td width="15%" bgcolor="#A1A1A1">Precio</td>
                        <td width="7%" bgcolor="#A1A1A1">Und</td>
                        <td width="15%" bgcolor="#A1A1A1">Total</td>
                    </tr>';
        foreach ($pedido as $linea) {
            $html .= '<tr>
                        <td>' . $linea['codigo'] . '</td>
                        <td  align="left">' . $linea['nombre'] . '</td>
                        <td  align="right">' . $linea['precio'] . '</td>
                        <td  align="center">' . $linea['cantidad'] . '</td>
                        <td  align="right">' . intval($linea['cantidad']) * intval($linea['precio']) . '</td>                   
                    </tr>';
        }
        $html .= '</table><div>';
        
        $html .= '<table border="1" style="width:100%">
                    <tr>
                        <td width="50%" bgcolor="#A1A1A1">SUBTOTAL</td>
                        <td width="20%" bgcolor="#A1A1A1">IVA</td>
                        <td width="30%" bgcolor="#A1A1A1">TOTAL</td>                   
                    </tr>
                 </table>';
        
        $html .= '<table border="1" style="width:100%">
                    <tr>
                        <td width="50%" >12</td>
                        <td width="20%" >2121</td>
                        <td width="30%" >3232</td>                   
                    </tr>
                    </table></div>
                    <p>********* NO RESPONDER A ESTE EMAIL *********</p> 
        </body>
      </html>';
        
        return $html;
    }
}