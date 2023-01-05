<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\produk;
use App\Models\User;

class DetailController extends Controller
{
    //
    public function index()
    {
        $title = '';
        if (request('category')) {
            $category = Category::firstWhere('slug', request('category'));
            $title = ' in ' . $category->name;
        }

        if (request('author')) {
            $author = User::firstWhere('username', request('author'));
            $title = ' by ' . $author->name;
        }

        return view('produk', [
            "title" => "All Post" . $title,
            "active" => 'produk',
            "posts" => produk::latest()->filter(request(['search', 'category', 'author']))
                ->paginate(0)->withQueryString()
        ]);
    }
    public function show(produk $post)
    {
        return view('post', [
            "title" => "Single Post",
            "active" => 'posts',
            "post" => $post
        ]);
    }
}
