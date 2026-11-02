<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    use RefreshDatabase;

    /**
     * A basic test example.
     */
    public function test_root_redirects_to_the_product_listing(): void
    {
        $this->get('/')->assertRedirect('/products');
        $this->get('/products')->assertOk();
    }
}
