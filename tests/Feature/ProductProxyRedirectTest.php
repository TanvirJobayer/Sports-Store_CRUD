<?php

namespace Tests\Feature;

use App\Models\Product;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ProductProxyRedirectTest extends TestCase
{
    use RefreshDatabase;

    public function test_update_redirect_uses_the_forwarded_https_host(): void
    {
        $product = Product::create([
            'name' => 'Original bat',
            'category' => 'Cricket',
            'brand' => 'SS',
            'price' => 100,
            'stock' => 2,
            'description' => 'Original description',
        ]);

        $response = $this->withServerVariables($this->codespacesProxyServerVariables())
            ->put("/products/{$product->id}", [
                'name' => 'Updated bat',
                'category' => 'Cricket',
                'brand' => 'SS',
                'price' => 125,
                'stock' => 3,
                'description' => 'Updated description',
            ]);

        $response->assertRedirect("https://sports-store-8004.app.github.dev/products/{$product->id}");
        $this->assertDatabaseHas('products', [
            'id' => $product->id,
            'name' => 'Updated bat',
        ]);
    }

    public function test_delete_redirect_uses_the_forwarded_https_host(): void
    {
        $product = Product::create([
            'name' => 'Bat to delete',
            'category' => 'Cricket',
            'brand' => 'SS',
            'price' => 100,
            'stock' => 2,
            'description' => 'Product for the delete test',
        ]);

        $response = $this->withServerVariables($this->codespacesProxyServerVariables())
            ->delete("/products/{$product->id}");

        $response->assertRedirect('https://sports-store-8004.app.github.dev/products');
        $this->assertDatabaseMissing('products', ['id' => $product->id]);
    }

    /**
     * @return array<string, string>
     */
    private function codespacesProxyServerVariables(): array
    {
        return [
            'HTTP_HOST' => 'localhost:8004',
            'HTTP_X_FORWARDED_HOST' => 'sports-store-8004.app.github.dev',
            'HTTP_X_FORWARDED_PORT' => '443',
            'HTTP_X_FORWARDED_PROTO' => 'https',
            'REMOTE_ADDR' => '127.0.0.1',
        ];
    }
}
