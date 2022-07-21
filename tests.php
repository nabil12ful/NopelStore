<?php

session_start();

$_SESSION['card'] = [
    'products' => [
        0 => [
            'id'        => 0,
            'title'     => '',
            'img'       => '',
            'price'     => '',
            'count'     => ''
        ],
        1 => [
            'id'        => 0,
            'title'     => '',
            'img'       => '',
            'price'     => '',
            'count'     => ''
        ]
    ]
];

$_SESSION['card']['products'][] = [
    'id'        => 0,
    'title'     => 'A',
    'img'       => 'B',
    'price'     => 'C',
    'count'     => 'D'
]

?>
<pre>
    <?php print_r($_SESSION['card']) ?>
</pre>