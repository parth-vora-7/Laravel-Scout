<?php

namespace App\Http\Controllers;

use App\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
    	$blogs = Blog::search(request('query'))->paginate(10);

    	return view('blog.index', compact('blogs'));
    }
}
