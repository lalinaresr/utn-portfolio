<?php
	session_start();

	require_once 'config.php';
	require_once LIBRARIES_PATH . '/fpdf/fpdf.php';

	/**
	 * 
	 */
	date_default_timezone_set('America/Mexico_City');


	/**
	 * summary
	 */
	class ImprimirPago extends FPDF	{
		// Cabecera de página
		public function Header() {
		    // Logo
		    $this->Image(IMAGES_PATH . '/c/site/logo-1.png', 10, 10, 45);
		    
		    // Arial bold 15
		    $this->SetFont('Arial', 'B', 12);
		    
		    // Movernos a la derecha
		    $this->Cell(70);
		    
		    // Titulo
		    $this->Cell(60, 16, 'Formato de Pago', 1, 0, 'C');

		    // Salto de línea
		    $this->Ln(20);
		}

		// Pie de página
		public function Footer() {
		    // Posición: a 1,5 cm del final
		    $this->SetY(-15);
		    // Arial italic 8
		    $this->SetFont('Arial','I',8);
		    // Número de página
		    $this->Cell(0, 10, 'Pagina ' . $this->PageNo() . '/{nb}', 0, 0, 'C');
		}

		/**
		 * [datosTabla description]
		 * @return [type] [description]
		 */
		public function datosTabla(){
			$this->Ln();
			$this->Cell(80, 10, 'Producto', 1, 0, 'C');
			$this->Cell(37, 10, 'Precio', 1, 0, 'C');
			$this->Cell(37, 10, 'Cantidad', 1, 0, 'C');
			$this->Cell(37, 10, 'Subtotal', 1, 0, 'C');

			$contadorCantidad = 0;
			$contadorPrecio = 0;
			$acumuladorCantidad = 0;
			$acumuladorTotalPagar = 0;
			foreach ($_SESSION['compra']['bebidas'] as $bebida) {
				$this->Ln();
				$this->Cell(80, 10, $bebida, 1, 0, 'L');					;
				$this->Cell(37, 10, '$' . $_SESSION['compra']['precios'][$contadorPrecio], 1, 0, 'C');
				$this->Cell(37, 10, $_SESSION['compra']['cantidades'][$contadorCantidad], 1, 0, 'C');
				$this->Cell(37, 10, '$' . ($_SESSION['compra']['cantidades'][$contadorCantidad] * $_SESSION['compra']['precios'][$contadorPrecio]) , 1, 0, 'C');

				$acumuladorCantidad = $acumuladorCantidad + $_SESSION['compra']['cantidades'][$contadorCantidad];
				$acumuladorTotalPagar = $acumuladorTotalPagar + ($_SESSION['compra']['cantidades'][$contadorCantidad] * $_SESSION['compra']['precios'][$contadorPrecio]);

				$contadorCantidad++;					;
				$contadorPrecio++;					;
			}

			$this->Ln();
			$this->Cell(117, 10, 'Total', 1, 0, 'C');
			$this->Cell(37, 10, $acumuladorCantidad, 1, 0, 'C');
			$this->Cell(37, 10, '$' . $acumuladorTotalPagar, 1, 0, 'C');

			$this->Ln();	
			$this->SetFont('Arial', 'I', 8);		
			$this->Cell(191, 10, utf8_decode('Su compra fue realizada con éxito el día ') . date('d-m-Y') . ' a las ' . date('H:i:s') . '.' , 0, 0, 'L');
		}
	}

	// Creación del objeto de la clase heredada
	$imprimirPago = new ImprimirPago();
	$imprimirPago->setTitle('Boleta de pago');
	$imprimirPago->AliasNbPages();
	$imprimirPago->AddPage();
	if (isset($_SESSION['compra'])) {
		$imprimirPago->datosTabla();
	} else {
		header('Location: products.php');
	}
	$imprimirPago->Output();
?>