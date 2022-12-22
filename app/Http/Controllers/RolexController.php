<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RolexController extends Controller
{
    public function index()
    {
        return view('rolex', [
            "title" => "Rolex"
        ]);
    }
}
