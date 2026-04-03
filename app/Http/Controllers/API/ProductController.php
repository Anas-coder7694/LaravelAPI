<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Product;
//use App\Http\Controllers\ProductController;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         $product = Product::create([
        'name' => $request->name,
        'category_id' => $request->category_id,
        'stock' => $request->stock,
        'price' => $request->price,
        'description' => $request->description,
    ]);

    return response()->json($product, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show() {

    $products = Product::with('category:id,name')
        ->select('id', 'name', 'category_id', 'stock', 'price', 'description')
        ->get()
        ->map(function ($product) {
            return [
                'id' => $product->id,
                'name' => $product->name,
                'category' => $product->category->name,
                'stock' => $product->stock,
                'price' => $product->price,
                'description' => $product->description,
            ];
        });

    return response()->json($products, 200);
}

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {   
        
        $product = Product::find($id);
        
        if($product){
            $product->delete();
             return response()->json([
            'message' => 'Product deleted successfully'
        ], 200);

        }else{
            return response()->json([
            'message' => 'Product do not exist or deleted already'
        ], 200);
        }
        
    }

    
}
