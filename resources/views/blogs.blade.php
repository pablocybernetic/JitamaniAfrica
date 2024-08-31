@extends('layouts.app')

@section('title', 'Welcome to Jitamani Africa')

@section('content')
    <!-- Content will be added here later -->
    <style>
        body {
            margin-top: 20px;
        }

        .section {
            padding: 100px 0;
            position: relative;
        }

        .gray-bg {
            background-color: #ebf4fa;
        }

        /* Blog
        ---------------------*/
        .blog-grid {
            margin-top: 15px;
            margin-bottom: 15px;
        }

        .blog-grid .blog-img {
            position: relative;
            border-radius: 5px;
            overflow: hidden;
        }

        .blog-grid .blog-img .date {
            position: absolute;
            background: rgba(143, 233, 213, 0.808);
            color: rgb(2, 92, 72);
            ;
            padding: 8px 15px;
            left: 0;
            top: 10px;
            font-size: 14px;
        }

        .blog-grid .blog-info {
            box-shadow: 0 0 30px rgba(31, 45, 61, 0.125);
            border-radius: 5px;
            background: #ffffff;
            padding: 20px;
            margin: -30px 20px 0;
            position: relative;
        }

        .blog-grid .blog-info h5 {
            font-size: 22px;
            font-weight: 500;
            margin: 0 0 10px;
        }

        .blog-grid .blog-info h5 a {
            color: #3a3973;
        }

        .blog-grid .blog-info p {
            margin: 0;
        }

        .blog-grid .blog-info .btn-bar {
            margin-top: 20px;
        }

        .px-btn-arrow {
            padding: 0 50px 0 0;
            line-height: 20px;
            position: relative;
            display: inline-block;
            color: #fe4f6c;
            -moz-transition: ease all 0.3s;
            -o-transition: ease all 0.3s;
            -webkit-transition: ease all 0.3s;
            transition: ease all 0.3s;
        }


        .px-btn-arrow .arrow {
            width: 13px;
            height: 2px;
            background: currentColor;
            display: inline-block;
            position: absolute;
            top: 0;
            bottom: 0;
            margin: auto;
            right: 25px;
            -moz-transition: ease right 0.3s;
            -o-transition: ease right 0.3s;
            -webkit-transition: ease right 0.3s;
            transition: ease right 0.3s;
        }

        .px-btn-arrow .arrow:after {
            width: 8px;
            height: 8px;
            border-right: 2px solid currentColor;
            border-top: 2px solid currentColor;
            content: "";
            position: absolute;
            top: -3px;
            right: 0;
            display: inline-block;
            -moz-transform: rotate(45deg);
            -o-transform: rotate(45deg);
            -ms-transform: rotate(45deg);
            -webkit-transform: rotate(45deg);
            transform: rotate(45deg);
        }
    </style>
    <section class="section gray-bg" id="blog">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7 text-center">
                    <div class="section-title">
                        <h2>Blog Posts</h2>
                        <p>We specialize in providing customized consultancy services across the dynamic sectors of Food,
                            Fashion, Fitness, and Music.</p>
                    </div>
                </div>
            </div>
            <div class="row">

                @foreach ($blogs as $blog)
                    <li>
                        <!-- <form action="{{ route('blogs.destroy', $blog->slug) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Delete</button>
                        </form> -->
                    </li>
                    <div class="col-lg-4">
                        <div class="blog-grid">
                            <div class="blog-img">
                                <div class="date">
                                    <small>{{ \Carbon\Carbon::parse($blog->created_at)->format('d-M-Y') }}</small>
                                </div>

                                <a href="{{ route('blogs.show', $blog->slug) }}">
                                    <img src="{{ asset($blog->featured_image) }}" alt="Featured Image">
                                </a>
                            </div>
                            <div class="blog-info">
                                <h5>
                                    <a href="{{ route('blogs.show', $blog->slug) }}">
                                        {{ Str::words($blog->title, 7, '...') }}
                                    </a>
                                </h5>
                                <p>{{ \Illuminate\Support\Str::words($blog->content, 10, '...') }}</p>
                                <div class="row">
                                    <div class="btn-bar">
                                        <a href="{{ route('blogs.show', $blog->slug) }}" class="px-btn-arrow">
                                            <span>Read More</span>
                                            <i class="arrow"></i>

                                        </a>
                                    </div>
                                    @auth
                                        <form action="{{ route('blogs.destroy', $blog->slug) }}" method="POST"
                                            style="display:inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit">Delete</button>
                                    </form>@endauth
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>























@endsection

@push('styles')
    <!-- Add any specific stylesheets for the index page if needed -->
@endpush

@push('scripts')
    <!-- Add any specific scripts for the index page if needed -->
@endpush
