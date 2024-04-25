<?php
session_start();
require_once 'config.php';
require_once LIBRARIES_PATH . '/fpdf/fpdf.php';

class PDF extends FPDF
{
	public function __construct()
	{
		if (!isset($_SESSION['products']) || !isset($_SESSION['amounts'])) {
			header('Location: ' . APP_URL . '/products.php');
			exit;
		}
		parent::__construct();
	}

	public function Header()
	{
		$this->SetFont('Arial', 'B', 15);
		$this->Image(IMAGES_PATH . '/c/site/logo.png', 90, 10, 30, 25);
		$this->Ln(30);
	}

	public function FillTable()
	{
		$amount = $total = 0;

		$this->Cell(80, 10, 'Nombre', 1, 0, 'C');
		$this->Cell(37, 10, 'Precio', 1, 0, 'C');
		$this->Cell(37, 10, 'Cantidad', 1, 0, 'C');
		$this->Cell(37, 10, 'Subtotal', 1, 0, 'C');

		foreach ($_SESSION['products'] as $product) {
			$amount_by_product = $_SESSION['amounts'][$product['id']];
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
		$this->SetFont('Arial', 'I', 10);
		$this->Cell(191, 10, iconv('UTF-8', 'windows-1252', 'Su pedido fue dado de alta con éxito a las ' . date('H:i:s') . ' del ' . date('d-m-Y')), 0, 0, 'L');
	}

	public function Footer()
	{
		$this->SetY(-15);
		$this->SetFont('Arial', 'I', 8);
		$this->Cell(0, 10, iconv('UTF-8', 'windows-1252', 'Página ') . $this->PageNo() . '/{nb}', 0, 0, 'C');
	}
}

$pdf = new PDF();
$pdf->setTitle('Ticket');
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->FillTable();
$pdf->Output();
