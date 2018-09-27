<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;


class ExampleTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        $this->assertTrue(true);
        
        //Test if can view pages.
        $response = $this->get('/');
        $response->assertStatus(200);
        $response = $this->get('/product/add');
        $response->assertStatus(200);

        //Create 2 product via factory.
        $product = factory(\App\Product::class)->create();
        $product = factory(\App\Product::class)->create();

        // Test if can visit recently created products
        $response = $this->get('/product/edit/1');
        $response->assertStatus(200);
        $response = $this->get('/product/edit/2');
        $response->assertStatus(200);
                
        //Test if product was really created.
        $this->assertDatabaseHas('products', [
          'description' => 'test description...'
        ]);
        
        //Test if delete works
        $response = $this->call('GET', '/product/delete/2');
        $this->assertDatabaseMissing('products', ['id' => 2]);

        
        
    }
    
}
