<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::all();
        return view('blogs', compact('blogs'));
    }
    public function show($slug)
    {
        $blog = Blog::where('slug', $slug)->firstOrFail();
        return view('blogs.show', compact('blog'));
    }

    public function create()
    {
        return view('blogs.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'slug' => 'required|string|unique:blogs',
            'content' => 'required',
            'excerpt' => 'nullable|string',
            'featured_image' => 'nullable|string',
            'tags' => 'nullable|string',
            'published_at' => 'nullable|date',
            'status' => 'required|in:draft,published',
        ]);

        Blog::create($validated);

        return redirect()->route('blogs.index')->with('success', 'Blog created successfully.');
    }


    public function edit($slug)
    {
        $blog = Blog::where('slug', $slug)->firstOrFail();
        return view('blogs.edit', compact('blog'));
    }

    public function update(Request $request, $slug)
{
    $blog = Blog::where('slug', $slug)->firstOrFail();

    $validated = $request->validate([
        'title' => 'required|string|max:255',
        'slug' => 'nullable|string|unique:blogs,slug,' . $blog->id,
        'content' => 'required',
        'excerpt' => 'nullable|string',
        'featured_image' => 'nullable|string',
        'tags' => 'nullable|string',
        'published_at' => 'nullable|date',
        'status' => 'required|in:draft,published',
    ]);

    \Log::info('Updating blog', ['blog' => $blog, 'validated' => $validated]);

    $blog->update($validated);

    return redirect()->route('blogs.index')->with('success', 'Blog updated successfully.');
}

    public function destroy($slug)
    {
        $blog = Blog::where('slug', $slug)->firstOrFail();
        $blog->delete();
        return redirect()->route('blogs.index')->with('success', 'Blog deleted successfully.');
    }}
