<?php

namespace App\Controller;
use NanjaS\Car\Bike;
use Twig\Environment;

class IndexController
{

    public function __construct(
        private readonly Environment $twig
    )
    {

    }
    public function index()
    {
        echo $this->twig->render('index.html'
//        ,
//            [
//                'name' => 'Lucien',
//                'colors' => [
//                    'blue',
//                    'green',
//                    'red',
//                    'lemon'
//                ]
//            ]
        );

    }
}