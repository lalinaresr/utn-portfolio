<?php
session_start();

/**
 * Variable donde se almacenan los encabezados de cada fila que componen la tabla de datos
 * @var Array
 */
$headers = [
    'ID',
    'Nombre',
    'Semana 1',
    'Semana 2',
    'Semana 3',
    'Semana 4',
    '1 + 2 + 3 + 4',
    'Comisión 2%',
    'Sueldo',
    'Seguro 3%',
    'Totales'
];

/**
 * Variable que contendrá las ventas totales de todos los vendedores en su primera semana
 * @var float
 */
$sales_first_week = 0;

/**
 * Variable que contendrá las ventas totales de todos los vendedores en su segunda semana
 * @var float
 */
$sales_second_week = 0;

/**
 * Variable que contendrá las ventas totales de todos los vendedores en su tercera semana
 * @var float
 */
$sales_third_week = 0;

/**
 * Variable que contendrá las ventas totales de todos los vendedores en su cuarta semana
 * @var float
 */
$sales_fourth_week = 0;

/**
 * Variable que contendrá las ventas totales de todos los vendedores por mes
 * @var float
 */
$sales_by_mounth = 0;

/**
 * Variable que contendrá la suma de las ventas totales de todos los vendedores por mes
 * @var float
 */
$all_sales = 0;

/**
 * Variable que contendrá la suma de las comisiones de todos los vendedores por mes
 * @var float
 */
$commissions = 0;

/**
 * Variable que contendrá la suma de los salarios de todos los vendedores por mes
 * @var float
 */
$salaries = 0;

/**
 * Variable que contendrá la suma de los seguros de todos los vendedores por mes
 * @var float
 */
$insurance_money = 0;

/**
 * Variable que contendrá la suma de las ventas totales + comisiones + salario + seguro de todos los vendedores por mes
 * @var float
 */
$total = 0;

/**
 * Variable que contendrá la cantidad de venta mayor por mes
 * @var float
 */
$major_sale = 0;

/**
 * Variable que contendrá la cantidad de venta menor por mes
 * @var float
 */
$minor_sale = 99999;

/**
 * Variable que contendrá al vendedor de la venta mayor por mes
 * @var float
 */
$major_seller = '';

/**
 * Variable que contendrá al vendedor de la venta menor por mes
 * @var float
 */
$minor_seller = '';

/**
 * Variable donde se almacena un listado de vendedores con datos en común como el id, nombre, ventas por semana y salario
 * @var Array[]
 */
$sales = [
    ['id' => 1, 'name' => 'Zury', 'first_week' => rand(1000, 10000), 'second_week' => rand(1000, 10000), 'third_week' => rand(1000, 10000), 'fourth_week' => rand(1000, 10000), 'salary' => rand(1500, 2500)],
    ['id' => 2, 'name' => 'Luis', 'first_week' => rand(1000, 10000), 'second_week' => rand(1000, 10000), 'third_week' => rand(1000, 10000), 'fourth_week' => rand(1000, 10000), 'salary' => rand(1500, 2500)],
    ['id' => 3, 'name' => 'Joan', 'first_week' => rand(1000, 10000), 'second_week' => rand(1000, 10000), 'third_week' => rand(1000, 10000), 'fourth_week' => rand(1000, 10000), 'salary' => rand(1500, 2500)],
    ['id' => 4, 'name' => 'Rosa', 'first_week' => rand(1000, 10000), 'second_week' => rand(1000, 10000), 'third_week' => rand(1000, 10000), 'fourth_week' => rand(1000, 10000), 'salary' => rand(1500, 2500)],
    ['id' => 5, 'name' => 'Alan', 'first_week' => rand(1000, 10000), 'second_week' => rand(1000, 10000), 'third_week' => rand(1000, 10000), 'fourth_week' => rand(1000, 10000), 'salary' => rand(1500, 2500)]
];
