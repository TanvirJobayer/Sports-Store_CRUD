<?php

namespace Tests\Feature;

use App\Models\Product;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ProductValidationTest extends TestCase
{
    use RefreshDatabase;

    public function test_create_rejects_missing_required_fields_without_writing_to_the_database(): void
    {
        $response = $this->from('/products/create')
            ->followingRedirects()
            ->post('/products', []);

        $response->assertOk()
            ->assertSee('Please correct the following errors:')
            ->assertSee('The name field is required.')
            ->assertSee('The category field is required.')
            ->assertSee('The price field is required.')
            ->assertSee('The stock field is required.')
            ->assertDontSee('Illuminate\\Database\\QueryException');
        $this->assertDatabaseCount('products', 0);
    }

    public function test_create_saves_a_valid_product(): void
    {
        $response = $this->post('/products', [
            'name' => 'Training ball',
            'category' => 'Football',
            'brand' => '',
            'price' => '25.50',
            'stock' => '4',
            'description' => '',
        ]);

        $response->assertRedirect('/products/1');
        $this->assertDatabaseHas('products', [
            'name' => 'Training ball',
            'category' => 'Football',
            'price' => '25.50',
            'stock' => 4,
        ]);
    }

    public function test_update_rejects_invalid_data_and_keeps_the_existing_product(): void
    {
        $product = Product::create([
            'name' => 'Original bat',
            'category' => 'Cricket',
            'price' => 100,
            'stock' => 2,
        ]);

        $response = $this->from("/products/{$product->id}/edit")
            ->followingRedirects()
            ->put("/products/{$product->id}", [
                'name' => '',
                'category' => 'Cricket',
                'price' => 'not-a-price',
                'stock' => 2,
            ]);

        $response->assertOk()
            ->assertSee('The name field is required.')
            ->assertSee('The price field must be a number.')
            ->assertDontSee('Illuminate\\Database\\QueryException');
        $this->assertDatabaseHas('products', [
            'id' => $product->id,
            'name' => 'Original bat',
            'price' => '100.00',
        ]);
    }
}
