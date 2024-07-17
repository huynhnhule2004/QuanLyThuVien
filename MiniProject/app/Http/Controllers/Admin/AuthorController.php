<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Author;

class AuthorController extends Controller
{
    public function index()
    {

        $authors = Author::
        orderBy('id', 'desc')
        ->get();

        //load giao dien
        return view('welcome', [
            'authors' => $authors
        ]);
    }
}
