<?php

use App\Models\Items;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {

    return view('welcome',[
        'categories' => Items::categories(),
        'items' => Items::item()
    ]);
});

Route::get('/test', function () {


        $items = Items::item();

        foreach($items as $i):
            foreach($i as $j):
                return $j[0];
            endforeach;
        endforeach;
    ;
});
