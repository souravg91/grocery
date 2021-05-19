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
        //
        DB::table('products')->insert([
        	[
        	'name'=>'Samsung',
        	'price'=>'2000',
        	'description'=>'8gb ram smart phone',
        	'category'=>'mobile',
        	'gallery'=>'https://apkpure.com/live-wallpaper-hd-for-samsung-galaxy-j5/com.livewallpaper.tme.livewallpaperhdforsamsunggalaxyj5#com.livewallpaper.tme.livewallpaperhdforsamsunggalaxyj5-2'
        ],
        [
        	'name'=>'Samsung',
        	'price'=>'200000',
        	'description'=>'ultra hd smart tv',
        	'category'=>'tv',
        	'gallery'=>'https://wallpaper-house.com/data/out/10/wallpaper2you_450496.jpg'
        ],
        [
        	'name'=>'MI',
        	'price'=>'8574',
        	'description'=>'smart ulta hd tv',
        	'category'=>'tv',
        	'gallery'=>'https://www.gizmochina.com/wp-content/uploads/2019/04/afe09d9dly1g2ck5fp3ldj21o00u0qv6.jpg'
        ],
        [
        	'name'=>'Panasonic',
        	'price'=>'6520',
        	'description'=>'premium lappy',
        	'category'=>'laptop',
        	'gallery'=>'https://wallpapercave.com/wp/wp1848648.jpg'
        ],
        [
        	'name'=>'Alpha',
        	'price'=>'16000',
        	'description'=>'gaming lappy',
        	'category'=>'laptop',
        	'gallery'=>'https://images7.alphacoders.com/468/468458.jpg'
        ]
        ]);
    }
}
