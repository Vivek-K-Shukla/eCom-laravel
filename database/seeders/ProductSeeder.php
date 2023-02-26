<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->insert([
            [
            'name'=>'Canon Camera',
            'price'=>'15000',
            'description'=>'Best Camera in market',
            'category'=>'Camera',
            'gallery'=>'https://www.pexels.com/photo/black-dslr-camera-on-white-surface-51383/'
            ],
            
                [
                    'name'=>'Nikon Camera',
                    'price'=>'18000',
                    'description'=>'Best Camera in market',
                    'category'=>'Camera',
                    'gallery'=>'https://www.pexels.com/photo/close-up-photo-of-dslr-camera-1787235/'
                    ],
                    [
                
                    'name'=>'Sony Camera',
                    'price'=>'20000',
                    'description'=>'Best Camera in market',
                    'category'=>'Camera',
                    'gallery'=>'https://www.pexels.com/photo/black-sony-dslr-camera-on-green-grass-in-front-of-brown-and-green-mountain-225157/'
                    ],
  
            
                     [
                    'name'=>'Nikon Camera',
                    'price'=>'22000',
                    'description'=>'Best Camera in market',
                    'category'=>'Camera',
                    'gallery'=>'https://www.pexels.com/photo/close-up-shot-of-a-camera-249597/'
                    ],
            
           ]) ;
    }
}
