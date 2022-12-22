<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryFemaleController extends Controller
{
    public function index()
    {
        return view('categoryfemale', [
            "title" => "Category Female"
        ]);
    }
}
