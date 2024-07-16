<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index()
    {

        // Query Builder
        // $query =
        // DB::table('categories')
        // ->orderBy('id', 'desc')
        // ->where('id', '=', 3)
        // // ->orWhere('name', '=', "category 1")
        // ;

        // $categories = $query->get();

        // dd($categories); //die dump
        // foreach ($categories as $category) {
        //     dd($category->name);
        // }


        // Eloquent 

        // $categories = Category::all();
        // foreach ($categories as $category) {
        //     dd($category->name);
        // }

        $categories = Category::
        orderBy('id', 'desc')
        ->paginate(10);

        //load giao dien
        return view('welcome', [
            'categoriesView' => $categories
        ]);
    }
}
