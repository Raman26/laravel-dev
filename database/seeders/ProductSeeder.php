<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            [   
                'name'=>'LG Mobile',
                'price'=>'400',
                'description'=>'A smartphone with 4gb RAM and much more features',
                "category"=>"mobile",
                "gallery"=>"https://cdn.onesearch.com/lo/api/res/1.2/5OEhB8HEWP_3rB4tAJj2Mw--~B/YXBwaWQ9eWlzZWFyY2g7Zmk9Zml0O2dlPTAwNjYwMDtncz0wMEEzMDA7aD0xNTIxO3c9MTAwMA--/http://www.intomobile.com/wp-content/uploads/2014/12/ZTE_SPEED_front_Uploaded.jpg.cf.jpg"
            ],
            [   
                'name'=>'Oppo Phone',
                'price'=>'200',
                'description'=>'A oppo smartphone with 4gb RAM and much more features',
                "category"=>"mobile",
                "gallery"=>"https://cdn.onesearch.com/lo/api/res/1.2/5OEhB8HEWP_3rB4tAJj2Mw--~B/YXBwaWQ9eWlzZWFyY2g7Zmk9Zml0O2dlPTAwNjYwMDtncz0wMEEzMDA7aD0xNTIxO3c9MTAwMA--/http://www.intomobile.com/wp-content/uploads/2014/12/ZTE_SPEED_front_Uploaded.jpg.cf.jpg"
            ],
            [   
                'name'=>'Panasonic TV',
                'price'=>'600',
                'description'=>'A smart TV 1300 inch big and much more features',
                "category"=>"mobile",
                "gallery"=>"https://cdn.onesearch.com/lo/api/res/1.2/5OEhB8HEWP_3rB4tAJj2Mw--~B/YXBwaWQ9eWlzZWFyY2g7Zmk9Zml0O2dlPTAwNjYwMDtncz0wMEEzMDA7aD0xNTIxO3c9MTAwMA--/http://www.intomobile.com/wp-content/uploads/2014/12/ZTE_SPEED_front_Uploaded.jpg.cf.jpg"
            ],
            [   
                'name'=>'Soni TV',
                'price'=>'900',
                'description'=>'A Soni TV with Android system and much more features',
                "category"=>"mobile",
                "gallery"=>"https://cdn.onesearch.com/lo/api/res/1.2/5OEhB8HEWP_3rB4tAJj2Mw--~B/YXBwaWQ9eWlzZWFyY2g7Zmk9Zml0O2dlPTAwNjYwMDtncz0wMEEzMDA7aD0xNTIxO3c9MTAwMA--/http://www.intomobile.com/wp-content/uploads/2014/12/ZTE_SPEED_front_Uploaded.jpg.cf.jpg"
            ]
        ]);

    }
}
