<?php

namespace App\Http\Controllers;

use App\Models\category;
use App\Models\produk;
use App\Models\User;
use Illuminate\Http\Request;

class ChanelController extends Controller
{
    public function index()
    {
        $title = '';
        if (request('category')) {
            $category = category::firstWhere('slug', request('category'));
            $title = ' in ' . $category->name;
        }

        if (request('author')) {
            $author = User::firstWhere('username', request('author'));
            $title = ' in ' . $author->name;
        }
        return view('chanel', [
            'title' => 'All Post' . $title,
            'active' => 'post',
            // 'posts' => Post::all(),
            'posts' => produk::latest()->filter(request(['search', 'category', 'author']))->paginate(7)->withQueryString()
        ]);
    }

    public function show(produk $produk)
    {
        return view('post', [
            'title' => 'Single Post',
            'active' => 'blog',
            'post' => $produk
        ]);
    }
}
