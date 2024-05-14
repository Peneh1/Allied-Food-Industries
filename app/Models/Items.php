<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Items extends Model
{
    use HasFactory;

    public static function categories(){
        return [
[           
     'name' => 'Beef',
     'small' => 'Whole Muscle',
     'tab' => '#tab-1',
     'tab-1-items' => [

     ]
],

[           
    'name' => 'Turkey',
    'small' => '',
    'tab' => '#tab-2'
] , 

[           
    'name' => 'Salami',
    'small' => '',
    'tab' => '#tab-3'
] , 

[           
    'name' => 'Hot Dogs',
    'small' => '',
    'tab' => '#tab-4'
] , 

[           
    'name' => 'Low in Fat',
    'small' => '',
    'tab' => '#tab-5'
] 
];
    }

    public static function item(){

       return [
            0 => [
                'tab' => 'tab-1',
                'my_items' => [
                        'img' => '',
                        'name' => 'Beef Brisket Corned Beef (1st Cut)',
                        'description' => 'Unit Size: 5lb', 
                        'number' => 'Item# 827H'
                    ],
                    [
                        'img' => '',
                        'name' => 'Beef shoulder Corned Beef',
                        'description' => 'Unit Size: 4lb', 
                        'number' => 'Item# 874H'
        
                        ],

        ],
        1 => [
            'tab' => 'tab-2',
            'my_items' => [
                    'img' => '',
                    'name' => 'oven Roasted turkey Breast',
                    'description' => 'Unit Size: 4.5lb', 
                    'number' => 'Item# 821H'
                ],
                [
                    'img' => '',
                    'name' => 'smoked Cured turkey Breast',
                    'description' => 'Unit Size: 4.5lb', 
                    'number' => 'Item# 829H'
    
                    ],

    ],

        ];
    }
}
