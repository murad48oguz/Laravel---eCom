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
            'name' => 'Xiaomi',
            'price' => 200,
            'category' => 'mobile',
            'description' => 'Great phone for young people',
            'gallery' =>"https://unvan.az/uploads/news/15897814886036258185ec223f042eef.jpeg"

        ],


        [
            'name' => 'Samsung Tv',
            'price' => 800,
            'category' => 'tv',
            'description' => 'Great tv for watching',
            'gallery' =>"https://images.samsung.com/is/image/samsung/ru-fhd-t5300-ue43t5300auxru-frontblack-225926985?$720_576_PNG$"

        ],


        [
            'name' => 'Fridge',
            'price' => 700,
            'category' => 'fridge',
            'description' => 'Nice fridge for kitchen',
            'gallery' =>"https://www.tradedepot.co.nz/media/catalog/product/3/5/353584_new_lr.jpg"

        ],



        [
            'name' => 'Acer Laptop',
            'price' => 600,
            'category' => 'laptop',
            'description' => 'Excellent laptop for office workers',
            'gallery' =>"https://upload.wikimedia.org/wikipedia/commons/thumb/3/37/Schenker_VIA14_Laptop_asv2021-01.jpg/1200px-Schenker_VIA14_Laptop_asv2021-01.jpg"

        ]









    ]);
    }
}
