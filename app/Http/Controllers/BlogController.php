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
    // Validate the incoming request data
    $validated = $request->validate([
        'title' => 'required|string|max:255',
        // 'slug' => 'required|string|unique:blogs',
        'content' => 'required',
        'excerpt' => 'nullable|string',
        'featured_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Validate image
        'tags' => 'nullable|string',
        'published_at' => 'nullable|date',
        'status' => 'required|in:draft,published',
    ]);

    // Check if an image is uploaded
    if ($request->hasFile('featured_image')) {
        $image = $request->file('featured_image');
        $filename = time() . '_' . $image->getClientOriginalName();
        $imagePath = $image->move(public_path('images/featured_images'), $filename);
        $validated['featured_image'] = 'images/featured_images/' . $filename;
    }
    
    // Create a new blog post
    Blog::create($validated);

    // Redirect back to the blogs list with a success message
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
        'featured_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Validate image file
        'tags' => 'nullable|string',
        'published_at' => 'nullable|date',
        'status' => 'required|in:draft,published',
    ]);

    // Handle file upload
    if ($request->hasFile('featured_image')) {
        $image = $request->file('featured_image');
        $filename = time() . '_' . $image->getClientOriginalName();
        $imagePath = $image->move(public_path('images/featured_images'), $filename);
        $validated['featured_image'] = 'images/featured_images/' . $filename;
    } else {
        // Keep the existing image if no new file is uploaded
        $validated['featured_image'] = $blog->featured_image;
    }

    $blog->update($validated);

    return redirect()->route('blogs.index')->with('success', 'Blog updated successfully.');
}
    

    public function destroy($slug)
    {
        $blog = Blog::where('slug', $slug)->firstOrFail();
        $blog->delete();
        return redirect()->route('blogs.index')->with('success', 'Blog deleted successfully.');
    }}
