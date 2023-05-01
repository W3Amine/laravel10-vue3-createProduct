<?php

namespace Tests\Feature;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Tests\TestCase;

class ProductTest extends TestCase
{
    use RefreshDatabase;

    public function testCreateProduct()
    {
        Storage::fake('public'); // Set up a fake filesystem for public disk

        $categories = Category::factory()->count(3)->create(); // Create 3 categories

        $data = [
            'name' => 'Test Product',
            'description' => 'This is a test product',
            'price' => 9.99,
            'categories' => $categories->pluck('id')->toArray(), // Pass an array of category ids
            'image' => UploadedFile::fake()->image('test.jpg'), // Create a fake uploaded image
        ];

        $response = $this->postJson('/api/products', $data);

        $response->assertStatus(201); // Ensure the response has a "created" status code
     

        $this->assertDatabaseHas('products', [
            'name' => $data['name'],
            'description' => $data['description'],
            'price' => $data['price'],
        ]);

        $product = Product::where('name', $data['name'])->first();
        $this->assertNotNull($product->image); // Ensure the product has an image

       Storage::disk('public')->assertExists($product->image_path); // Ensure the image was stored on the public disk
    }
}
