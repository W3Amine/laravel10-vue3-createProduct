<?php

namespace App\Console\Commands;

use App\Repositories\ProductRepository;
use Illuminate\Console\Command;
use Illuminate\Http\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class CreateProduct extends Command
{
<<<<<<< Updated upstream

    protected $signature = 'product:create';


=======
    protected $signature = 'product:create';

>>>>>>> Stashed changes
    protected $description = 'Create a new product';

    /**
     * The product repository instance.
     */
    protected $productRepository;

    /**
     * Create a new command instance.
     */
    public function __construct(ProductRepository $productRepository)
    {
        parent::__construct();
        $this->productRepository = $productRepository;
    }

<<<<<<< Updated upstream


=======
>>>>>>> Stashed changes
    public function handle()
    {

        //ask for the image
        $imagePath = $this->ask('Enter the product image path');

        // Validate image existence
        if (! file_exists($imagePath)) {
            $this->error('Image does not exist.');

            return 1;
        }

        //ask for other product details
        $name = $this->ask('Enter the product name');
        $description = $this->ask('Enter the product description');
        $price = $this->ask('Enter the product price');
        $categories = $this->ask('Enter the product categories separated by commas');
        // convert the string to array of category ids
        $categoriesArray = explode(',', $categories);

        // start validation
        $validator = Validator::make([
            'name' => $name,
            'description' => $description,
            'price' => $price,
            'categories' => $categoriesArray,

        ], [
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric|min:0',
            'categories' => ['required', 'array', Rule::exists('categories', 'id')],

        ]);

        if ($validator->fails()) {
            $this->error($validator->errors()->first());

            return;
        }
<<<<<<< Updated upstream
        
      // upload the photo and change its name
=======

        // upload the photo and change its name
>>>>>>> Stashed changes
        $fileName = basename($imagePath);
        $extension = pathinfo($imagePath, PATHINFO_EXTENSION);
        $newName = 'my_file_'.time().'.'.$extension;

        $publicPath = Storage::disk('public')->putFileAs('/ProductsImages', new File($imagePath), $newName);

        // prepare data
        $data = [
            'name' => $name,
            'description' => $description,
            'price' => $price,
            'image' => 'storage/'.$publicPath,
        ];

<<<<<<< Updated upstream
        $product = $this->productRepository->create($data , $categoriesArray );

        $this->info('Product created successfully. ID: ' . $product->id);
=======
        $product = $this->productRepository->create($data, $categoriesArray);

        $this->info('Product created successfully. ID: '.$product->id);
>>>>>>> Stashed changes

        return 0;

    }
}
