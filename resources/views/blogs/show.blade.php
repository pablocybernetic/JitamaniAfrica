@extends('layouts.app')

@section('content')
    <h1>{{ $blog->title }}</h1>
    <p>{{ $blog->content }}</p>
    <a href="{{ route('blogs.edit',  $blog->slug) }}">Edit</a>
    <form action="{{ route('blogs.destroy', $blog->slug) }}" method="POST" style="display:inline;">
        @csrf
        @method('DELETE')
        <button type="submit">Delete</button>
    </form>
    <a href="{{ route('blogs.index') }}">Back to list</a>
@endsection
