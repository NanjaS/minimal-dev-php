<?php

//when /bike aufgerufen wird, ruft es die IndexController Klasse auf und den Funktion showBike
use App\Controller\IndexController;

Route::get('/bike', [IndexController::class, 'showBike']);