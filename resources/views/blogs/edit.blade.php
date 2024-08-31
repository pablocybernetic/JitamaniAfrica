@extends('layouts.app')

@section('content')
    <h1>Edit Blog Post</h1>
    <form action="{{ route('blogs.update', $blog->slug) }}" method="POST"> <!-- for update -->
    @csrf
    @method('PUT')
        <div>
            <label>Title</label>
            <input type="text" name="title" value="{{ $blog->title }}" required>
        </div>
        <div>
            <label>Content</label>
            <textarea name="content" required>{{ $blog->content }}</textarea>
        </div>
        <div>
            <label>Status</label>
            <select name="status">
                <option value="draft" {{ $blog->status == 'draft' ? 'selected' : '' }}>Draft</option>
                <option value="published" {{ $blog->status == 'published' ? 'selected' : '' }}>Published</option>
                <option value="archived" {{ $blog->status == 'archived' ? 'selected' : '' }}>Archived</option>
            </select>
        </div>
        <button type="submit">Update</button>
    </form>
@endsection
