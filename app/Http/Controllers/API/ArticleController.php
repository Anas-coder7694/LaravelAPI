<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use app\Models\Article;
use App\Models\Article;
class ArticleController extends Controller
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
       $article= Article::create([
            'title'=>$request->title,
            'content'=>$request->content,
            'author_id'=> $request->author_id

        ]);

        return response()->json($article,201);
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {   $article=Article::all();
       
        $article = article::with('author:id,name')
        ->select('id', 'title',  'author_id', 'content')
        ->get()
        ->map(function ($article) {
            return [
                'id' => $article->id,
                'title' => $article->title,
                'author' => $article->author->name,
                'content' => $article->content,
               
            ];
        });
   // dd($article);
    return response()->json($article, 200);
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
        //
    }
}
