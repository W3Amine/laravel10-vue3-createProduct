<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\ProductRequest;
use App\Http\Resources\ProductResource;
use App\Repositories\ProductRepository;
use Illuminate\Support\Facades\Storage;



class ProductController extends Controller
{

    /**
     * The product repository instance.
     *
     * @var ProductRepository
     */
    protected ProductRepository $productRepository;

    public function __construct(ProductRepository $productRepository)
    {
        $this->productRepository = $productRepository;
    }






    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return ProductResource::collection($this->productRepository->getAllWithCategories());

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ProductRequest $request)
    {

        $file = $request->file('image');
        // Generate a new name for the file
        $newName = 'my_file_' . time() . '.' . $file->getClientOriginalExtension();
        // Store the file with the new name in the 'public' disk
        $path = Storage::disk('public')->putFileAs('/ProductsImages', $file, $newName);
        // Get the full URL of the stored file
        $url = Storage::disk('public')->url($newName);


        $dataToStore = [
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
            'image' => 'storage/' . $path,

        ];

        $product = $this->productRepository->create($dataToStore, explode(",", $request->categories[0]) ); // explode a string into array and create
        return new ProductResource($product);


    }



    /**
     * when the user filter with categories 
     * he will get the products of each
     * category he select
     */
    public function GetAllProductsOfCategories(Request $request)
    {
      // if(is_array($categoryIds) ) {

       // dd($request->ids);
            $products = $this->productRepository->GetAllProductsOfCategories($request->ids);

            return ProductResource::collection($products);
      //  }
        
      //  return ;

    }




    /**
     * Remove the specified resource from storage.
     */
    public function destroy($product)
    {
        $this->productRepository->delete($product);
        return response()->noContent();
    }




}