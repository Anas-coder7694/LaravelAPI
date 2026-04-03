<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Author;

class AuthorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       
            $author=Author::all();
           // dd($author);
            return response()->json($author,200);

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {       //dd(1);
            $author=Author::create([
            'name' => $request->name,
            'email' => $request->email,
            
            ]);
        dd($request);
        return response()->json($author,201);

    }

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
    public function destroy(string $id)
    {
       $author = Author::findOrFail($id);

        $author->delete();

        return response()->json([
            'message' => 'Author deleted successfully'
        ], 200);
    }
}
