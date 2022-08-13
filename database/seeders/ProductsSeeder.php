<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('products')->insert([
		'name' => 'Ursulet Plus',
		'description' => 'Descriere 1',
		'photo' => 'https://www.floraria-rosalia.ro/1508-large_default/ursulet-plus-roz-cu-funda.jpg',
		'price' => '79.99'
		]);
		
		\DB::table('products')->insert([
		'name' => 'Masina Lamborghini cu telecomanda',
		'description' => 'Descriere 2',
		'photo' => 'https://s13emagst.akamaized.net/products/31923/31922347/images/res_e913d36f39e8f7fbdceb152c3d546fcc.jpg',
		'price' => '49.99'
		]);
		
		\DB::table('products')->insert([
		'name' => 'Sectie de politie Lego City',
		'description' => 'Descriere 3',
		'photo' => 'https://s1.cel.ro/images/mari/lego-city-police---sectie-de-politie-60141-2.jpg',
		'price' => '139.99'
		]);
		
		\DB::table('products')->insert([
		'name' => 'Casa de marcat de jucarie',
		'description' => 'Descriere 4',
		'photo' => 'https://www.auchan.ro/public/images/h30/hc1/h00/casa-de-marcat-de-jucarie-diverse-culori-8874980311070.jpg',
		'price' => '24.99'
		]);
		
		\DB::table('products')->insert([
		'name' => 'Sponge Bob plus',
		'description' => 'Descriere 5',
		'photo' => 'https://gigantis.ro/upload/produse/ZFZFJGD7J/bg1.jpg',
		'price' => '39.99'
		]);
		
		\DB::table('products')->insert([
		'name' => 'Winnie The Pooh plus',
		'description' => 'Descriere 6',
		'photo' => 'https://storage.googleapis.com/bveu-static/be/53/sylius_original/a5b1d2f40fb3ac56c584da06f521.jpg',
		'price' => '34.99'
		]);
		
		\DB::table('products')->insert([
		'name' => 'Set masa de calcat jucarie',
		'description' => 'Descriere 7',
		'photo' => 'https://cdn-media.carrefour.ro/media/catalog/product/cache/b3b166914d87ce343d4dc5ec5117b502/943/s/m/smo330118-1.jpg',
		'price' => '44.99'
		]);
		
		\DB::table('products')->insert([
		'name' => 'Rata de jucarie',
		'description' => 'Descriere 8',
		'photo' => 'https://shop.famousgifts.ro/img/4953/98077_08/98077_08.jpg',
		'price' => '9.99'
		]);
		
		\DB::table('products')->insert([
		'name' => 'Nu te supara, frate!',
		'description' => 'Descriere 9',
		'photo' => 'https://noriel.ro/media/catalog/product/cache/c682e6120e627a95f4ce21a5b384118b/j/o/joc-noriel-nu-te-supara-frate-2017-clasic.jpg',
		'price' => '49.99'
		]);
		
		\DB::table('products')->insert([
		'name' => 'Monopoly',
		'description' => 'Descriere 10',
		'photo' => 'https://assets.sainsburys-groceries.co.uk/gol/125163006/1/640x640.jpg',
		'price' => '99.99'
		]);
    }
}
