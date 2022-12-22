<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChanelController extends Controller
{
    public function index()
    {
        return view('chanel', [
            "title" => "Chanel"
        ]);
    }
}
