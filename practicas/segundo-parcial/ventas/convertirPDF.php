<?php
    
    require 'librarys/fpdf/fpdf.php';


    class ConvertirPDF extends FPDF {
    

        // Cabecera de página
        public function Header() {
            // Logo
            $this->Image('assets/images/logo/1.jpg', 10, 10, 35);
            
            // Arial bold 15
            $this->SetFont('Arial', 'B', 15);
            
            // Movernos a la derecha
            $this->Cell(185);
            
            // Titulo con detalles de colores
            $this->SetDrawColor(217, 84,79);
            $this->SetFillColor(255, 255, 255);
            $this->SetTextColor(217, 84, 79);
            $this->Cell(35, 16, 'Ventas', 1, 0, 'C');

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


        public function crearTabla() {

            //Cabecera con el nombre columnas
            foreach(array(
                'Folio',
                'Nombre',
                'Semana 1',
                'Semana 2',
                'Semana 3',
                'Semana 4',
                'Comision 2%',
                'Sueldo B.',
                'Seguro 3%',
                'Total'
            ) as $columna) {
                $this->Cell(40, 7, $columna, 1, 0, 'C');
            }   
            $this->Ln();

            $ventas = array(
               array('folio' => 1, 'nombre' => 'Edgar', 'semana_1' => 5000, 'semana_2' => 8000, 'semana_3' => 7000, 'semana_4' => 5000, 'sueldo' => 2000),
               array('folio' => 2, 'nombre' => 'Brenda', 'semana_1' => 7000, 'semana_2' => 3000, 'semana_3' => 8000, 'semana_4' => 2000, 'sueldo' => 2200),
               array('folio' => 3, 'nombre' => 'Miguel', 'semana_1' => 5000, 'semana_2' => 10000, 'semana_3' => 4000, 'semana_4' => 3000, 'sueldo' => 1800),
               array('folio' => 4, 'nombre' => 'Rosa', 'semana_1' => 3000, 'semana_2' => 2500, 'semana_3' => 5500, 'semana_4' => 9000, 'sueldo' => 2000),
               array('folio' => 5, 'nombre' => 'Sandy', 'semana_1' => 5500, 'semana_2' => 2000, 'semana_3' => 3000, 'semana_4' => 4000, 'sueldo' => 2100)
            );

            $totalVentasSemana = 0;
            $totalSemanaUno = 0;
            $totalSemanaDos = 0;
            $totalSemanaTres = 0;
            $totalSemanaCuatro = 0;
            $totalComisiones = 0;
            $totalSueldos = 0;
            $totalSeguros = 0;
            $totalFinal = 0;
            $ventaMayor = 0;
            $vendedorMayor = "";
			$ventaMenor = 999999;
			$vendedorMenor = "";
            for ($i = 0; $i < count($ventas); $i++) {
                $totalVentasSemana = $ventas[$i]['semana_1'] + $ventas[$i]['semana_2'] + $ventas[$i]['semana_3'] + $ventas[$i]['semana_4'];
                $totalSemanaUno = $totalSemanaUno + $ventas[$i]['semana_1'];
                $totalSemanaDos = $totalSemanaDos + $ventas[$i]['semana_2'];
                $totalSemanaTres = $totalSemanaTres + $ventas[$i]['semana_3'];
                $totalSemanaCuatro = $totalSemanaCuatro + $ventas[$i]['semana_4'];
                $totalComisiones = $totalComisiones + ($totalVentasSemana * 0.02);
                $totalSueldos = $totalSueldos + $ventas[$i]['sueldo'];
                $totalSeguros = $totalSeguros + ((($totalVentasSemana * 0.02) + $ventas[$i]['sueldo']) * 0.03);
                $totalFinal = $totalFinal + ($totalVentasSemana + ($totalVentasSemana * 0.02) + $ventas[$i]['sueldo'] +  ((($totalVentasSemana * 0.02) + $ventas[$i]['sueldo']) * 0.03)); 
                
                if($totalVentasSemana >= $ventaMayor) {
                   /* $ventaMayor = $ventaMayor . $totalVentasSemana . ', ';
                   $vendedorMayor = $vendedorMayor . $ventas[$i]['nombre'] . ' y '; */

                   $ventaMayor = $totalVentasSemana;
                   $vendedorMayor = $ventas[$i]['nombre']; 
                }  else if($ventaMenor > $totalVentasSemana){
					$ventaMenor = $totalVentasSemana;
					$vendedorMenor = $ventas[$i]['nombre']; 
				 }

                $this->Cell(40, 5, $ventas[$i]['folio'], 1, 0, 'C');  
                $this->Cell(40, 5, $ventas[$i]['nombre'], 1, 0, 'C');  
                $this->Cell(40, 5, '$' . $ventas[$i]['semana_1'], 1, 0, 'C');  
                $this->Cell(40, 5, '$' . $ventas[$i]['semana_2'], 1, 0, 'C');  
                $this->Cell(40, 5, '$' . $ventas[$i]['semana_3'], 1, 0, 'C');  
                $this->Cell(40, 5, '$' . $ventas[$i]['semana_4'], 1, 0, 'C');  
                $this->Cell(40, 5, '$' . ($totalVentasSemana * 0.02), 1, 0, 'C');  
                $this->Cell(40, 5, '$' . $ventas[$i]['sueldo'], 1, 0, 'C');  
                $this->Cell(40, 5, '$' . ((($totalVentasSemana * 0.02) + $ventas[$i]['sueldo']) * 0.03) , 1, 0, 'C');                  
                $this->Cell(40, 5, '$' . ($totalVentasSemana + ($totalVentasSemana * 0.02) + $ventas[$i]['sueldo'] +  ((($totalVentasSemana * 0.02) + $ventas[$i]['sueldo']) * 0.03)), 1, 0, 'C');  
                
                $this->Ln();
            }
            $this->Cell(80, 5, 'Total:', 1, 0, 'C');
            $this->Cell(40, 5, '$' . $totalSemanaUno, 1, 0, 'C');
            $this->Cell(40, 5, '$' . $totalSemanaDos, 1, 0, 'C');
            $this->Cell(40, 5, '$' . $totalSemanaTres, 1, 0, 'C');
            $this->Cell(40, 5, '$' . $totalSemanaCuatro, 1, 0, 'C');
            $this->Cell(40, 5, '$' . $totalComisiones, 1, 0, 'C');
            $this->Cell(40, 5, '$' . $totalSueldos, 1, 0, 'C');
            $this->Cell(40, 5, '$' . $totalSeguros, 1, 0, 'C');
            $this->Cell(40, 5, '$' . $totalFinal, 1, 0, 'C');

            $this->Ln(8);
            $this->Cell(120, 5, 'La mayor venta fue de $' . $ventaMayor . ' hecha por '. $vendedorMayor, 0, 0, 'L');
			$this->Ln(8);
			$this->Cell(120, 5, 'La menor venta fue de $' . $ventaMenor . ' hecha por '. $vendedorMenor, 0, 0, 'L');
            /* $this->Cell(120, 5, 'La mayor venta fue de $' . substr( $ventaMayor , 1, -2) . ' hecha por '. substr( $vendedorMayor , 0 , -3) . ' .', 0, 0, 'L'); */

        }
    }

    

    // Creación del objeto de la clase heredada
    $pdf = new ConvertirPDF('L', 'mm', array(420, 250));
    $pdf->setTitle('Ventas PDF');
    $pdf->AliasNbPages();
    $pdf->AddPage();
    $pdf->SetFont('Arial');
    $pdf->crearTabla();
    $pdf->Output();
?>