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
            1 => [
                'tab' => 'tab-1',
                'my_items' => [
                    [
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

                    [
                        'img' => '',
                        'name' => 'navel Pastrami',
                        'description' => 'Unit Size: 5lb', 
                        'number' => 'Item# 828H'
        
                        ],

                    [
                        'img' => '',
                        'name' => 'smoked Cured Beef shoulder Pastrami ',
                        'description' => 'Unit Size: 6lb', 
                        'number' => 'Item# 834H'
        
                    ],

                        [
                            'img' => '',
                            'name' => 'Brisket Pastrami',
                            'description' => 'Unit Size: 5lb', 
                            'number' => 'Item# 865H'
            
                        ],

                        [
                            'img' => '',
                            'name' => 'Roast Beef shoulder',
                            'description' => 'Unit Size: 10lb', 
                            'number' => 'Item# 878H'
            
                        ],
    
                            [
                                'img' => '',
                                'name' => 'smoked Beef Fry- slab ',
                                'description' => 'Unit Size: 7lb', 
                                'number' => 'Item# 1075H'
                
                            ],

        ],
    ],
        2 => [
            'tab' => 'tab-2',
            'my_items' => [
                [
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
    
                    ]
             ],


        ],

    3 => [
        'tab' => 'tab-3',
        'my_items' => [
            [
                'img' => '',
                'name' => 'Classic salami',
                'description' => 'Unit Size: 7lb', 
                'number' => 'Item# 836H'
            ]
        ]
            ],

            5 => [
                'tab' => 'tab-4',
                'my_items' => [
                    [
                        'img' => '',
                        'name' => 'Classic Frankfurters',
                        'description' => 'Unit Size: 5lb', 
                        'number' => 'Item# 832H'
                    ],
                    [
                        'img' => '',
                        'name' => 'All Beef Hot Dogs',
                        'description' => 'Unit Size: 5lb', 
                        'number' => 'Item# 851H'
                    ],
                ]
            ],

    4 => [
        'tab' => 'tab-5',
        'my_items' => [
            [
                'img' => '',
                'name' => 'Chicken Frankfurters',
                'description' => 'Unit Size: 5lb', 
                'number' => 'Item# 853H'
            ],
            [
                'img' => '',
                'name' => 'Turkey Frankfurters',
                'description' => 'Unit Size: 5lb', 
                'number' => 'Item# 876H'
            ]
        ]
            ],
];
    }
}
