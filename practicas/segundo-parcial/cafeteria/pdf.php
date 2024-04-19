<?php
session_start();
require_once 'config.php';
require_once LIBRARIES_PATH . '/fpdf/fpdf.php';

class PDF extends FPDF
{
	public function Header()
	{
		$this->Image(IMAGES_PATH . '/c/site/logo.png', 90, 10, 30, 25);
		$this->SetFont('Arial', 'B', 12);		
	}

	public function Footer()
	{
		$this->SetY(-15);
		$this->SetFont('Arial', 'I', 8);
		$this->Cell(0, 10, 'Pagina ' . $this->PageNo() . '/{nb}', 0, 0, 'C');
	}

	public function FillTable()
	{
		$this->Ln(30);
		$this->Cell(80, 10, 'Nombre', 1, 0, 'C');
		$this->Cell(37, 10, 'Precio', 1, 0, 'C');
		$this->Cell(37, 10, 'Cantidad', 1, 0, 'C');
		$this->Cell(37, 10, 'Subtotal', 1, 0, 'C');

		$amount = $total = 0;

		foreach ($_SESSION['products'] as $key => $product) {
			$amount_by_product = $_SESSION['amounts']['amount-' . $product['id']];
			$amount += $amount_by_product;
			$total += ($amount_by_product * $product['price']);
			$this->Ln();
			$this->Cell(80, 10, iconv('UTF-8', 'windows-1252', $product['name']), 1, 0, 'C');
			$this->Cell(37, 10, '$' . number_format($product['price'], 2), 1, 0, 'C');
			$this->Cell(37, 10, $amount_by_product, 1, 0, 'C');
			$this->Cell(37, 10, '$' . number_format(($amount_by_product * $product['price']), 2), 1, 0, 'C');
		}
		$this->Ln();
		$this->Cell(117, 10, 'Totales', 1, 0, 'C');
		$this->Cell(37, 10, $amount, 1, 0, 'C');
		$this->Cell(37, 10, '$' . number_format($total, 2), 1, 0, 'C');

		$this->Ln();
		$this->SetFont('Arial', 'I', 8);
		$this->Cell(191, 10, iconv('UTF-8', 'windows-1252', 'Su pedido fue dado de alta con éxito a las ' . date('H:i:s') . ' del ' . date('d-m-Y')), 0, 0, 'L');
	}
}

$pdf = new PDF();
$pdf->setTitle('Ticket');
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->FillTable();
$pdf->Output();
