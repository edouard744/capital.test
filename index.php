<?php

//Array with country and for eatch country the capital and the flag
$capitals = ['france' => [
        'capital' => 'paris',
        'flag' => 'https://upload.wikimedia.org/wikipedia/commons/c/c3/Flag_of_France.svg'
    ],
    'germany' => [
        'capital' => 'berlin',
        'flag' => 'https://upload.wikimedia.org/wikipedia/commons/b/ba/Flag_of_Germany.svg'
    ],
    'italy' => [
        'capital' => 'rome',
        'flag' => 'https://upload.wikimedia.org/wikipedia/commons/0/03/Flag_of_Italy.svg'
    ],
    'spain' => [
        'capital' => 'madrid',
        'flag' => 'https://upload.wikimedia.org/wikipedia/commons/9/9a/Flag_of_Spain.svg'
    ],
    'united kingdom' => [
        'capital' => 'london',
        'flag' => 'https://upload.wikimedia.org/wikipedia/commons/a/ae/Flag_of_the_United_Kingdom.svg'
    ],
    'état unis' => [
        'capital' => 'washington, d.c.',
        'flag' => 'https://upload.wikimedia.org/wikipedia/commons/a/a4/Flag_of_the_United_States.svg'
    ],
    'canada' => [
        'capital' => 'ottawa',
        'flag' => 'https://upload.wikimedia.org/wikipedia/commons/d/d9/Flag_of_Canada_%28Pantone%29.svg'
    ],
    'australia' => [
        'capital' => 'canberra',
        'flag' => 'https://upload.wikimedia.org/wikipedia/commons/8/88/Flag_of_Australia_%28converted%29.svg'
    ],
    'new zealand' => [
        'capital' => 'wellington',
        'flag' => 'https://upload.wikimedia.org/wikipedia/commons/3/3e/Flag_of_New_Zealand.svg'
    ],
    'china' => [
        'capital' => 'beijing',
        'flag' => 'https://upload.wikimedia.org/wikipedia/commons/f/fa/Flag_of_the_People%27s_Republic_of_China.svg'
    ],
    'japan' => [
        'capital' => 'tokyo',
        'flag' => 'https://upload.wikimedia.org/wikipedia/en/9/9e/'
]
];
if (isset($_GET['capital'])) {
    $capital = urldecode($_GET['capital']);
}else{
    $capital = 'france';
}




require 'view/index.view.php';