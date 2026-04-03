<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Article;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       
            $article=Article::all();
           // dd($author);
            return response()->json($article,200);
    }
    public function store(Request $request)
    {
       $article= Article::create([
            'title'=>$request->title,
            'content'=>$request->content,
            'author_id'=> $request->author_id

        ]);

        return response()->json($article,201);
    }

    /**
     * Store a newly created resource in storage.
     */
    

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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
    // public function destroy(string $id)
    // {
    //     $article = Article::find($id);

    //     if($article){
    //         $article->delete();

    //         return response()->json([
    //             'message' => 'Article deleted successfully'
    //         ], 200);
    //     }else{
    //         return response()->json([
    //             'message' => 'Article do not exist or deleted already'
    //         ], 200);
    //     }
        
    // }


















public function destroy($id){
    $article = Article::Find($id);
    if($article){
        $article->delete;
            return response()->json(["message"=>"Article deleted successfully"],200);
    }else{
            return response()->json(["message"=>"Article do not exist or deleted already"],200);
    }

}












}
