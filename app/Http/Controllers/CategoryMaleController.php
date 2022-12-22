<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryMaleController extends Controller
{
    public function index()
    {
        return view('categorymale', [
            "title" => "Category Male"
        ]);
    }
}
