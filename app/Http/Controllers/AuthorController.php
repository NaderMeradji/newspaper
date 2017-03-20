<?php

namespace App\Http\Controllers;

use App\Articles;

class AuthorController extends Controller

{
    public function index(){
        /*$author = DB::table('users')->get(); Query builder*/
        $article = Articles::all();
        return view('authors/test', compact('author'));
      }

    public function show(Articles $article){ //same as $author = User::find($id)

      return view('authors.show', compact('article'));
    }
}
