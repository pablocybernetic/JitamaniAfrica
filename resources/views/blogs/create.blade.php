@extends('layouts.app')

@section('content')
    <h1>Create New Blog Post</h1>
  
    <h1>Create New Blog</h1>
    <form action="{{ route('blogs.store') }}" method="POST">
        @csrf
        <label for="title">Title:</label>
        <input type="text" name="title" id="title" required>
        <br>
        <label for="slug">Slug:</label>
        <input type="text" name="slug" id="slug" required>
        <br>
        <label for="content">Content:</label>
        <textarea name="content" id="content" required></textarea>
        <br>
        <label for="excerpt">Excerpt:</label>
        <textarea name="excerpt" id="excerpt"></textarea>
        <br>
        <label for="featured_image">Featured Image URL:</label>
        <input type="text" name="featured_image" id="featured_image">
        <br>
        <label for="tags">Tags:</label>
        <input type="text" name="tags" id="tags">
        <br>
        <label for="published_at">Published At:</label>
        <input type="date" name="published_at" id="published_at">
        <br>
        <label for="status">Status:</label>
        <select name="status" id="status">
            <option value="draft">Draft</option>
            <option value="published">Published</option>
        </select>
        <br>
        <button type="submit">Save Blog</button>
    </form>
    <a href="{{ route('blogs.index') }}">Back to List</a>
@endsection
