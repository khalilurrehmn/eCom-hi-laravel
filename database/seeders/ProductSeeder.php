<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;



class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->insert([
            [
                'name'=>'LG moble',
                'price'=>'10000',
                'description'=>'a smart phone with 4g ram',
                'catagory'=>'mobile',
                'gallery'=>'https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.lg.com%2Flevant_en%2Fmobile-phones&psig=AOvVaw2R28hbGKg_KLlsKgyLc9WI&ust=1694453761807000&source=images&cd=vfe&opi=89978449&ved=0CBAQjRxqFwoTCLCxlbXKoIEDFQAAAAAdAAAAABAE'


            ],
            [
                'name'=>'oppo tv',
                'price'=>'96000',
                'description'=>'a smart phone with 10g ram',
                'catagory'=>'tv',
                'gallery'=>'https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.lg.com%2Flevant_en%2Fmobile-phones&psig=AOvVaw2R28hbGKg_KLlsKgyLc9WI&ust=1694453761807000&source=images&cd=vfe&opi=89978449&ved=0CBAQjRxqFwoTCLCxlbXKoIEDFQAAAAAdAAAAABAE'
            ],
            [
                'name'=>'nokia moble',
                'price'=>'59000',
                'description'=>'a smart phone with 8g ram',
                'catagory'=>'tv',
                'gallery'=>'https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.lg.com%2Flevant_en%2Fmobile-phones&psig=AOvVaw2R28hbGKg_KLlsKgyLc9WI&ust=1694453761807000&source=images&cd=vfe&opi=89978449&ved=0CBAQjRxqFwoTCLCxlbXKoIEDFQAAAAAdAAAAABAE'

            ],
            [
                'name'=>'apple fridge',
                'price'=>'90700',
                'description'=>'a smart fridge with 6g ram',
                'catagory'=>'fridge',
                'gallery'=>'https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.lg.com%2Flevant_en%2Fmobile-phones&psig=AOvVaw2R28hbGKg_KLlsKgyLc9WI&ust=1694453761807000&source=images&cd=vfe&opi=89978449&ved=0CBAQjRxqFwoTCLCxlbXKoIEDFQAAAAAdAAAAABAE'

            ]
        ]);
    }
}
