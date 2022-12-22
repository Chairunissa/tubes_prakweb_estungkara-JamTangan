<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CasioController extends Controller
{
    public function index()
    {
        return view('casio', [
            "title" => "Casio"
        ]);
    }
}
