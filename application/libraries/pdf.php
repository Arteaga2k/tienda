<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

require_once APPPATH . 'third_party/tcpdf/tcpdf.php';

class Pdf extends TCPDF
{
    function __construct()
    {
        parent::__construct();
    }
    
    //Page header
    public function Header() {
        // Logo
        $image_file = K_PATH_IMAGES.'logocarrito.png';
        $this->Image($image_file, 10, 10, 60, '', 'png', '', 'T', false, 300, '', false, false, 0, false, false, false);
       
        // Set font
        //$this->SetFont('helvetica', 'B', 20);
        // Title
       //$this->Cell(0, 25, 'FACTURA DE LA COMPRA', 0, false, 'C', 0, '', 0, false, 'M', 'M');
       //$this->writeHTMLCell($w = 0, $h = 0, $x = '80', $y = '11', 'FACTURA DE LA COMPRA', $border = 0, $ln = 1, $fill = 0, $reseth = true, $align = 'C', $autopadding = true);
    }
    
    // Page footer
	public function Footer() {
		// Position at 15 mm from bottom
		$this->SetY(-15);
		// Set font
		$this->SetFont('helvetica', 'I', 8);
		// Page number
		$this->Cell(0, 10, 'Page '.$this->getAliasNumPage().'/'.$this->getAliasNbPages(), 0, false, 'C', 0, '', 0, false, 'T', 'M');
	}
}