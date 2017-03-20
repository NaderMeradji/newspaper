<?php

namespace App\Http\Controllers;

use App\User;


class ArticlesController extends Controller
{
    public function index()
    {
      return view('authors.index');
    }

    public function show(User $author){ //same as $author = User::find($id)


      return view('authors.index', compact('author'));
    }



}
