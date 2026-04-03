<?php

use App\Models\Article;
use App\Models\Category;
use App\Models\Product;
use App\Models\Author;
use Illuminate\Http\Request;
use App\Http\Controllers\ArticleController;
use Illuminate\Support\Facades\Route;
use App\Models\User;
Route::get('/users', function () {
    
    $users = User::Select('name','email')->where('name','Anas')->get();
    return response()->json($users, 200);


});










Route::get('/products', function () {

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
});





Route::get('/products/category/{category}',function($category){

        
        $products = Product::with('category:id,name')
        ->select('id', 'name', 'category_id', 'stock', 'price', 'description')
        ->Where('category_id',$category)
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
    return response()->json($products,200);

});


Route::get('authors',function(){
    $author=Author::get();

    return response()->json($author,200);
});

Route::get('articles', [ArticleController::class, 'show']);


    



Route::post('/articles',[ArticleController::class,'store']);


Route::post('/products', function (Request $request) {

    $product = Product::create([
        'name' => $request->name,
        'category_id' => $request->category_id,
        'stock' => $request->stock,
        'price' => $request->price,
        'description' => $request->description,
    ]);

    return response()->json($product, 201);
});

Route::post('/user',function(Request $request){

    $user=User::create([
        'name' => $request->name,
        'email' => $request->email,
        'password' => $request-> password,
    ]);

    return response()->json($user,201);

});


Route::post('/author',function(Request $request){

    $author=Author::create([
        'name' => $request->name,
        'email' => $request->email,
        
    ]);

    return response()->json($author,201);

});

Route::post('/category',function(Request $request){

    $category=Category::create([
        'name' => $request->name,
        
        
    ]);

    return response()->json($category,201);

});



// Route::put('articles/{id}', function (Request $request, $id) {

//     $article = Article::findOrFail($id);

//     // Update fields
//     $article->update([
//     'title' => $request->title ,//?? $article->title,
//     'content' => $request->content, //?? $article->content,
//     'author_id' => $request->author_id ,//?? $article->author_id,
// ]);

//     // Reload author relation
//     $article->load('author:id,name');

//     // Format response (same style as GET)
//     return response()->json([
//         'id' => $article->id,
//         'title' => $article->title,
//         'author' => $article->author->name,
//         'content' => $article->content,
//     ], 200);
// });


