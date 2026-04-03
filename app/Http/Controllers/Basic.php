<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class Basic extends Controller
{
    function insert(Request $request){
        $user =new User();
        $user->name=$request->name;
        $user->email=$request->email;
        $user->password=$request->password;

        return $user->save();
    }
}
