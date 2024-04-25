<?php
session_start();
require_once 'config.php';
require_once 'globals.php';
require_once LIBRARIES_PATH . '/fpdf/fpdf.php';

class PDF extends FPDF
{
    public function __construct($orientation = 'P', $unit = 'mm', $size = 'A4')
    {
        if (!isset($_SESSION['sales']) || count($_SESSION['sales']) == 0) {
            header('Location: ' . APP_URL);
            exit;
        }

        parent::__construct($orientation, $unit, $size);
    }

    public function Header()
    {
        $this->SetFont('Arial', 'B', 15);
        $this->Cell(50, 15, APP_NAME, 1, 0, 'C');
        $this->Ln(20);
    }

    public function FillTable()
    {
        global $headers, $sales_first_week, $sales_second_week, $sales_third_week, $sales_fourth_week, $sales_by_mounth, $all_sales, $commissions, $salaries, $insurance_money, $total, $major_sale, $minor_sale, $major_seller, $minor_seller;

        foreach ($headers as $column) {
            $this->Cell(40, 10, iconv('UTF-8', 'windows-1252', $column), 1, 0, 'C');
        }
        $this->Ln();

        $rows = count($_SESSION['sales']);

        for ($i = 0; $i < $rows; $i++) {
            _calculate_results_($_SESSION['sales'][$i], $sales_first_week, $sales_second_week, $sales_third_week, $sales_fourth_week, $sales_by_mounth, $all_sales, $commissions, $salaries, $insurance_money, $total, $major_sale, $major_seller, $minor_sale, $minor_seller);
            $this->Cell(40, 10, $_SESSION['sales'][$i]['id'], 1, 0, 'C');
            $this->Cell(40, 10, $_SESSION['sales'][$i]['name'], 1, 0, 'C');
            $this->Cell(40, 10, '$' . number_format($_SESSION['sales'][$i]['first_week'], 2), 1, 0, 'C');
            $this->Cell(40, 10, '$' . number_format($_SESSION['sales'][$i]['second_week'], 2), 1, 0, 'C');
            $this->Cell(40, 10, '$' . number_format($_SESSION['sales'][$i]['third_week'], 2), 1, 0, 'C');
            $this->Cell(40, 10, '$' . number_format($_SESSION['sales'][$i]['fourth_week'], 2), 1, 0, 'C');
            $this->Cell(40, 10, '$' . number_format($sales_by_mounth, 2), 1, 0, 'C');
            $this->Cell(40, 10, '$' . number_format(($sales_by_mounth * 0.02), 2), 1, 0, 'C');
            $this->Cell(40, 10, '$' . number_format($_SESSION['sales'][$i]['salary'], 2), 1, 0, 'C');
            $this->Cell(40, 10, '$' . number_format((($_SESSION['sales'][$i]['salary'] + ($sales_by_mounth * 0.02)) * 0.03), 2), 1, 0, 'C');
            $this->Cell(40, 10, '$' . number_format(($sales_by_mounth + ($sales_by_mounth * 0.02) + $_SESSION['sales'][$i]['salary'] + (($_SESSION['sales'][$i]['salary'] + ($sales_by_mounth * 0.02)) * 0.03)), 2), 1, 0, 'C');
            $this->Ln();
        }
        $this->Cell(80, 10, 'Totales', 1, 0, 'C');
        $this->Cell(40, 10, '$' . number_format($sales_first_week, 2), 1, 0, 'C');
        $this->Cell(40, 10, '$' . number_format($sales_second_week, 2), 1, 0, 'C');
        $this->Cell(40, 10, '$' . number_format($sales_third_week, 2), 1, 0, 'C');
        $this->Cell(40, 10, '$' . number_format($sales_fourth_week, 2), 1, 0, 'C');
        $this->Cell(40, 10, '$' . number_format($all_sales, 2), 1, 0, 'C');
        $this->Cell(40, 10, '$' . number_format($commissions, 2), 1, 0, 'C');
        $this->Cell(40, 10, '$' . number_format($salaries, 2), 1, 0, 'C');
        $this->Cell(40, 10, '$' . number_format($insurance_money, 2), 1, 0, 'C');
        $this->Cell(40, 10, '$' . number_format($total, 2), 1, 0, 'C');
        $this->Ln();
        $this->Cell(440, 10, 'La mayor venta fue de $' . number_format($major_sale, 2) . ' hecha por ' . $major_seller, 1, 0, 'C');
        $this->Ln();
        $this->Cell(440, 10, 'La menor venta fue de $' . number_format($minor_sale, 2) . ' hecha por ' . $minor_seller, 1, 0, 'C');
    }

    public function Footer()
    {
        $this->SetY(-15);
		$this->SetFont('Arial', 'I', 8);
		$this->Cell(0, 10, iconv('UTF-8', 'windows-1252', 'Página ') . $this->PageNo() . '/{nb}', 0, 0, 'C');
    }
}

$pdf = new PDF('L', 'mm', [460, 200]);
$pdf->setTitle(APP_NAME);
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->FillTable();
$pdf->Output();
