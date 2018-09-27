<?php

use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $products = [ 
            ['name' => 'product1',   'price' => '1.00', 'description' => 'product1 description',  'picture' => 'pictures/0AO0ML4WN8Nid9Brfpl3PFvETwHM1wkhT4XjlNWZ.jpeg'],
            ['name' => 'product2',   'price' => '2.00', 'description' => 'product2 description',  'picture' => 'pictures/0F8NCjswr6Nn5KDta5WVRoFsbqbsOsP4NfRhKDRw.jpeg'],
            ['name' => 'product3',   'price' => '1.00', 'description' => 'product3 description',  'picture' => 'pictures/BDnthztTINfX364Mf1Kq192HY4ommhBUPSLkuSOU.jpeg'],
            ['name' => 'product4',   'price' => '44.00', 'description' => 'product4 description',  'picture' => 'pictures/0AO0ML4WN8Nid9Brfpl3PFvETwHM1wkhT4XjlNWZ.jpeg'],
            ['name' => 'product5',   'price' => '1.00', 'description' => 'product5 description',  'picture' => 'pictures/0AO0ML4WN8Nid9Brfpl3PFvETwHM1wkhT4XjlNWZ.jpeg'],
            ['name' => 'product6',   'price' => '55.00', 'description' => 'product6 description',  'picture' => 'pictures/gBcAcApT94Ss6O0KwunUTQTEvuJCfjOAggnEDvzt.jpeg'],
            ['name' => 'product7',   'price' => '1.00', 'description' => 'product7 description',  'picture' => 'pictures/0AO0ML4WN8Nid9Brfpl3PFvETwHM1wkhT4XjlNWZ.jpeg'],
            ['name' => 'product8',   'price' => '1.00', 'description' => 'product8 description',  'picture' => 'pictures/0AO0ML4WN8Nid9Brfpl3PFvETwHM1wkhT4XjlNWZ.jpeg'],
            ['name' => 'product9',   'price' => '199.00', 'description' => 'product9 description',  'picture' => 'pictures/UG9gR5KGysaA3cXBZpz7Hmd3bl5Rte3esKNk15lK.jpeg'],
            ['name' => 'product10',  'price' => '1.00', 'description' => 'product10 description',  'picture' => 'pictures/0AO0ML4WN8Nid9Brfpl3PFvETwHM1wkhT4XjlNWZ.jpeg'],
            ['name' => 'product11',  'price' => '1.00', 'description' => 'product11 description',  'picture' => 'pictures/0AO0ML4WN8Nid9Brfpl3PFvETwHM1wkhT4XjlNWZ.jpeg'],
            ['name' => 'product12',  'price' => '34.00', 'description' => 'product12 description',  'picture' => 'pictures/0AO0ML4WN8Nid9Brfpl3PFvETwHM1wkhT4XjlNWZ.jpeg'],
          ];
        foreach ($products as $prod) {
          DB::table('products')->insert([
              'name' => $prod['name'],
              'price' => $prod['price'],
              'description' => $prod['description'],
              'picture' => $prod['picture'],
              'created_at' => date('Y-m-d H:i:s',strtotime('now')),
              'updated_at' => date('Y-m-d H:i:s',strtotime('now')),
          ]);  
        }
    }
}
