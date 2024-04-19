<?php

$hot = [
    [
        'id' => 1,
        'name' => 'Americano',
        'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing.',
        'price' => rand(50, 100)
    ],
    [
        'id' => 2,
        'name' => 'Latte',
        'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing.',
        'price' => rand(50, 100)
    ]
];

$cold = [
    [
        'id' => 3,
        'name' => 'Té helado',
        'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing.',
        'price' => rand(50, 100)
    ],
    [
        'id' => 4,
        'name' => 'Latte helado',
        'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing.',
        'price' => rand(50, 100)
    ],
    [
        'id' => 5,
        'name' => 'Mokka helado',
        'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing.',
        'price' => rand(50, 100)
    ]
];

$asserts = [
    [
        'id' => 6,
        'name' => 'Pastel Red Velvet',
        'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing.',
        'price' => rand(50, 100)
    ],
    [
        'id' => 7,
        'name' => 'Macarrones',
        'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing.',
        'price' => rand(50, 100)
    ],
    [
        'id' => 8,
        'name' => 'Cheesecake',
        'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing.',
        'price' => rand(50, 100)
    ],
    [
        'id' => 9,
        'name' => 'Pay de manzana',
        'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing.',
        'price' => rand(50, 100)
    ],
    [
        'id' => 10,
        'name' => 'Donas',
        'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing.',
        'price' => rand(50, 100)
    ]
];

$juices = [
    [
        'id' => 11,
        'name' => 'Naranja',
        'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing.',
        'price' => rand(50, 100)
    ],
    [
        'id' => 12,
        'name' => 'Verde',
        'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing.',
        'price' => rand(50, 100)
    ],
    [
        'id' => 13,
        'name' => 'Zanahoria',
        'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing.',
        'price' => rand(50, 100)
    ],
    [
        'id' => 14,
        'name' => 'Mandarina',
        'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing.',
        'price' => rand(50, 100)
    ],
    [
        'id' => 15,
        'name' => 'Limonada',
        'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing.',
        'price' => rand(50, 100)
    ]
];

$extra = [
    [
        'id' => 16,
        'name' => 'Ensalada Cesar',
        'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing.',
        'price' => rand(50, 100)
    ],
    [
        'id' => 17,
        'name' => 'Botella de agua',
        'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing.',
        'price' => rand(50, 100)
    ]
];

/**
 * Variable donde se almacenan los encabezados de cada parte del menu que componen la página de productos
 * @var Array
 */
$columns = ['Bebidas calientes', 'Bebidas frías', 'Postres', 'Jugos', 'Extras'];

/**
 * Variable donde se almacena un listado de productos con datos en común como el id, nombre, descripción y precio
 * @var Array[]
 */
$products = [$hot, $cold, $asserts, $juices, $extra];

/**
 * Variable que contiene el número de elementos que tiene la lista de productos
 * @var int
 */
$rows = count($products);

/**
 * Variable que contendrá los elementos HTML generados con los resultados que se mostrarán al usuario
 * @var String
 */
$html = '';