<?php

$template = 'templates/portfolio';

$projects = [
    [
        'id' => 1,
        'type' => 'practica',
        'title' => 'Curriculum Vitae',
        'description' => 'Primera práctica la cual consistía en crear un Curriculum Vitae y diseñamos 3 formularios los cuales eran para datos personales, educación y experiencia en ellos solo ingresábamos datos para después solo imprimirlos.',
        'link' => 'practicas/primer-parcial/curriculum-vitae',
        'image' => 'public/images/projects/cv.png'
    ],
    [
        'id' => 2,
        'type' => 'practica',
        'title' => 'Calculadora',
        'description' => 'Segunda práctica la cual consistía en crear un formulario en el cual pediremos 2 valores numéricos, y con esto realizar las operaciones básicas comúnmente conocidas (Suma, Resta, Producto, División, Residuo, Creciente, Decreciente).',
        'link' => 'practicas/primer-parcial/calculadora',
        'image' => 'public/images/projects/ob.png'
    ],
    [
        'id' => 3,
        'type' => 'practica',
        'title' => 'Apoyos Económicos',
        'description' => 'Tercera práctica la cual consistía en crear un formulario en el cual damos como opciones 3 tipos de apoyos (Estudiantes, Madres Solteras, Adultos Mayores) y dependiendo del que seleccionara el usuario arrojaría el formulario correspondiente.',
        'link' => 'practicas/primer-parcial/apoyos-economicos',
        'image' => 'public/images/projects/ae.png'
    ],
    [
        'id' => 4,
        'type' => 'practica',
        'title' => 'Agencia de Carros',
        'description' => 'Cuarta práctica la cual consistía en realizar la venta de un carro, y esta depende del tipo de carro, versión y plan de trabajo. El usuario iba proporcionando datos para adquirir su carro a la medida. Al final se le presentaba los detalles de compra.',
        'link' => 'practicas/primer-parcial/agencia-carros/',
        'image' => 'public/images/projects/ac.png'
    ],
    [
        'id' => 5,
        'type' => 'examen',
        'title' => 'Tienda Deportiva',
        'description' => 'Examen tipo A del primer parcial el cual consistía en simular ventas en una tienda deportiva presentando un formulario el cual solicitaba los datos de tipo de producto, marca y cantidad para poder hacer los cálculos pertinentes dependiente el producto la cantidad y agregándole un porcentaje extra por marca.',
        'link' => 'examenes/primer-parcial/tienda-deportiva/',
        'image' => 'public/images/projects/td.png'
    ],
    [
        'id' => 6,
        'type' => 'examen',
        'title' => 'Inmobiliaria',
        'description' => 'Examen tipo B del primer parcial el cual consistía en simular ventas de inmuebles por continentes presentando un formulario el cual solicitaba el continente, tiempo a pagar, sueldo y enganche para poder hacer los cálculos pertinentes validando que el sueldo y enganche sean aptos para obtener el crédito.',
        'link' => 'examenes/primer-parcial/inmobiliaria/',
        'image' => 'public/images/projects/i.png'
    ],
    [
        'id' => 7,
        'type' => 'practica',
        'title' => 'Tablas de Multiplicar',
        'description' => 'Quinta práctica la cual consistía en mostrar la tabla de multiplicar de un número hasta el 10. El número debía ser ingresado por el usuario. En los números pares del 1 al 10 se pintaban de color verde y los impares de color rojo.',
        'link' => 'practicas/segundo-parcial/tablas-multiplicar/',
        'image' => 'public/images/projects/tm.png'
    ],
    [
        'id' => 8,
        'type' => 'practica',
        'title' => 'Edades',
        'description' => 'Sexta práctica esta consistía en crear un grupo de cuatro amigos los cuales contenían 3 datos y eran el nombre, teléfono y su edad. Nos interesaba conocer que persona tenía que edad, pero al final el objetivo era sumar las edades de los cuatro.',
        'link' => 'practicas/segundo-parcial/edades/',
        'image' => 'public/images/projects/e.png'
    ],
    [
        'id' => 9,
        'type' => 'practica',
        'title' => 'Inventario de refacciones',
        'description' => 'Séptima práctica la cual consistía en mostrar el inventario con 5 productos los cuales tenían las columnas de: Folio, Nombre, Existencia y Reorden este debía compararse con la existencia para ver en qué estado entraba: Critico, Disponible o Agotado.',
        'link' => 'practicas/segundo-parcial/inventario-refacciones/',
        'image' => 'public/images/projects/ir.png'
    ],
    [
        'id' => 10,
        'type' => 'practica',
        'title' => 'Reporte de ventas',
        'description' => 'Octava práctica la cual consistía en mostrar el total de ventas por empleado durante un periodo de 4 semanas, y a partir de eso obtener a quien haya vendido más y la cantidad que obtuvo durante ese periodo.',
        'link' => 'practicas/segundo-parcial/reporte-ventas/',
        'image' => 'public/images/projects/rv.png'
    ],
    [
        'id' => 11,
        'type' => 'practica',
        'title' => 'Cajero Automático',
        'description' => 'Novena práctica la cual consistía en simular un cajero automático con 5 transacciones bancarias, y depende de si era un retiro o deposito se sumaba o restaba para crear un saldo final con fecha de esa transacción para simular que día se hizo.',
        'link' => 'practicas/segundo-parcial/cajero-automatico/',
        'image' => 'public/images/projects/ca.png'
    ],
    [
        'id' => 12,
        'type' => 'practica',
        'title' => 'Cafetería',
        'description' => 'Décima práctica la cual consistía en simular ventas de una cafetería usando arreglos dinámicos los cuales crecían dependiendo del total de productos, precio y su cantidad se sacaba total por producto y un total final a pagar.',
        'link' => 'practicas/segundo-parcial/cafeteria/',
        'image' => 'public/images/projects/c.png'
    ],
    [
        'id' => 13,
        'type' => 'practica',
        'title' => 'Ferretería',
        'description' => 'Onceava práctica la cual consistía en simular un sistema completo de una ferretería en el que se tenía la tabla clientes, piezas y ventas. En cada tabla se realizaba el CRUD (Create, Read, Update, Delete). Además de hacer las operaciones pertinentes a la hora de realizar la venta de las piezas.',
        'link' => 'practicas/segundo-parcial/ferreteria/',
        'image' => 'public/images/projects/f.png'
    ],
    [
        'id' => 14,
        'type' => 'examen',
        'title' => 'Producción',
        'description' => 'Examen tipo A del segundo parcial el cual consistía en insertar y consultar información acerca de plantas productoras, en las cuales teníamos su nombre, cantidad producida y cantidad defectuosa de cada una. Además de recuperar información como mayor y menor planta productora y defectuosa.',
        'link' => 'examenes/segundo-parcial/produccion/',
        'image' => 'public/images/projects/p.png'
    ],
    [
        'id' => 15,
        'type' => 'examen',
        'title' => 'Pizzería',
        'description' => 'Examen tipo B del segundo parcial el cual consistía crear un simulador de ventas de pizzas. El usuario seleccionaba su especialidad, tamaño y la cantidad de pizzas que quería y se calculaba un subtotal y total de esa venta. Los datos se almacenaban en forma de orden de pedido para tener el control de esa compra.',
        'link' => 'examenes/segundo-parcial/pizzeria/',
        'image' => 'public/images/projects/pi.png'
    ]
];

$rows = count($projects);

include_once "{$template}/partials/header.php";
include_once "{$template}/partials/welcome/sidebar.php";
include_once "{$template}/partials/welcome/portfolio.php";
include_once "{$template}/partials/footer.php";
