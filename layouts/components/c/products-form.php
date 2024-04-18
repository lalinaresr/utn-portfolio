<?php
    $columns = ['Bebidas calientes', 'Bebidas frías', 'Postres', 'Jugos', 'Extras'];

    $products = [
        [
            [
                'id' => 1,
                'name' => 'Americano',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing.',
                'price' => 80
            ],
            [
                'id' => 2,
                'name' => 'Latte',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing.',
                'price' => 87
            ]
        ],
        [
            [
                'id' => 1,
                'name' => 'Té helado',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing.',
                'price' => 40
            ],
            [
                'id' => 1,
                'name' => 'Mokka helado',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing.',
                'price' => 60
            ]
        ],
        [
            [
                'id' => 1,
                'name' => 'Pastel Red Velvet',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing.',
                'price' => 80
            ],
            [
                'id' => 2,
                'name' => 'Macarrones',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing.',
                'price' => 90
            ],
            [
                'id' => 3,
                'name' => 'Cheesecake',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing.',
                'price' => 75
            ],
            [
                'id' => 4,
                'name' => 'Pay de manzana',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing.',
                'price' => 70
            ],
            [
                'id' => 5,
                'name' => 'Donas',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing.',
                'price' => 25
            ]
        ],
        [
            [
                'id' => 1,
                'name' => 'Naranja',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing.',
                'price' => 50
            ],
            [
                'id' => 1,
                'name' => 'Verde',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing.',
                'price' => 70
            ],
            [
                'id' => 1,
                'name' => 'Zanahoria',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing.',
                'price' => 50
            ],
            [
                'id' => 1,
                'name' => 'Mandarina',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing.',
                'price' => 60
            ],
            [
                'id' => 1,
                'name' => 'Limonada',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing.',
                'price' => 30
            ]
        ],
        [
            [
                'id' => 1,
                'name' => 'Ensalada Cesar',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing.',
                'price' => 100
            ],
            [
                'id' => 2,
                'name' => 'Botella de agua',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing.',
                'price' => 20
            ]
        ]
    ];

    $rows = count($products);
?>

<?php for ($i = 0; $i < $rows; $i++) : ?>
    <div class="col-sm-12 col-md-6 col-lg-6">
        <div class="price-mainheading"><?= $columns[$i]; ?></div>
        <?php for ($j = 0; $j < count($products[$i]); $j++) : ?>
            <div class="price-heading">
                <?= $products[$i][$j]['name']; ?>
                <div class="price-item"><?= '$' . number_format($products[$i][$j]['price'], 2); ?></div>
            </div>
            <div class="description"><?= $products[$i][$j]['description']; ?></div>
        <?php endfor; ?>
    </div>
<?php endfor; ?>