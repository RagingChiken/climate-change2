<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
class BlogController extends Controller
{
    public function index()
    {
    $blogs = Blog::paginate(10);
    return view('blogs.index', compact('blogs'));
    }

    public function create()
    {
    return view('blogs.create');
    }

    public function store(Request $request)
    {
    $validated = $request->validate([
        'title' => 'required|string|max:255',
        'content' => 'required',
    ]);

    Blog::create([
        'title' => $validated['title'],
        'content' => $validated['content'],
        'user_id' => auth()->id(),
    ]);

    return redirect()->route('blogs.index');
    }

    public function edit(Blog $blog)
    {
    return view('blogs.edit', compact('blog'));
    }

    public function update(Request $request, Blog $blog)
    {
    $validated = $request->validate([
        'title' => 'required|string|max:255',
        'content' => 'required',
    ]);

    $blog->update($validated);
    return redirect()->route('blogs.index');
    }

    public function destroy(Blog $blog)
    {
    $blog->delete();
    return redirect()->route('blogs.index');



    }
}
