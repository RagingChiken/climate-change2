<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function index(Request $request)
    {
        
        $query = $request->input('query');
        
        $results = Product::where('name', 'like', "%$query%")->get();

        return view('search.results', compact('results'));
    }

    public function search(Request $request)
    {
    $query = $request->input('query');

    $blogs = Blog::where('title', 'LIKE', "%{$query}%")->orWhere('content', 'LIKE', "%{$query}%")->get();
    $threads = ForumThread::where('title', 'LIKE', "%{$query}%")->orWhere('body', 'LIKE', "%{$query}%")->get();

    return view('search.results', compact('blogs', 'threads'));
    }


}