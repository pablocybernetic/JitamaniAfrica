@extends('layouts.app')

@section('title', 'Welcome to Jitamani Africa')

@section('content')
<!-- Content will be added here later -->

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">

<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />

<div id="main-content" class="blog-page">
        <div class="container">
            <div class="row clearfix">
                <div class="col-lg-8 col-md-12 left-box">
                    <div class="card single_post">
                        <div class="body">
                            <div class="img-post">
                                <img class="d-block img-fluid" src="{{ asset('images/JA Blog Image 4.jpg') }}"  height="280px" alt="First slide">
                            </div>
                            <h3><a href="blog-details.html">Exploring the New Basque Cuisine through Molecular Gastronomy at "The Chef and The Cook</a></h3>
                            <p>In March 2024, Nairobi’s culinary scene reached new heights with "The Chef and The Cook," an extraordinary event organized by Jitamani Africa. Founded by Seina Naimasiah, Jitamani Africa is a visionary platform dedicated to elevating Kenya’s gastronomic experiences by blending traditional flavors with contemporary techniques. This particular event showcased the best of New Basque Cuisine through a stunning 10-course tasting menu that delighted every guest in attendance. 
                              Held in the serene neighborhood of Loresho, Nairobi, the event was co-founded by Build X and led by Chef James Mitchell from Scotland. The menu was an exquisite exploration of molecular gastronomy, a cooking method that deconstructs and reimagines traditional dishes through scientific techniques. Every dish on the menu was a testament to the fusion of modern innovation and locally sourced ingredients, creating a sensory experience that was both surprising and satisfying. 
                              The evening began with delicate starters like white snapper with cured egg yolk and yam paired with tuna, tomato, and date, setting the tone for an evening of unexpected flavor combinations. Guests were then treated to an array of beautifully crafted dishes, including coffee focaccia served with cherry tomato, Valencay cheese, and black garlic, and a delightful plate of red snapper with pumpkin seeds, celeriac, sobrasada, and tarragon. Each course was a celebration of bold, innovative pairings that pushed the boundaries of traditional Basque cuisine. 
                              As the evening progressed, the menu delved deeper into the richness of local ingredients, with standout dishes such as lobster with crab roe on milk bread, and sea bass delicately flavored with dill, vermouth, zucchini, parsnip, and jackfruit nuts. The culinary journey was not only about the main courses but also about the intricate details that made each dish memorable, like the tamarillo with avocado, ricotta, apple, and almonds, and the refreshing baobab, pineapple, mint, and peanut dessert that left guests craving more. 
                              The success of "The Chef and The Cook" lies in its ability to not only serve exquisite flavors but also to create a communal experience where food lovers could come together to appreciate the art of cooking. Entrepreneur Yaniv Gelnik, known as "The Cook," played a crucial role in this by bringing his expertise in food and business strategy to the table, ensuring that the event was as intellectually stimulating as it was delicious. 
                              Held from March 22nd to 24th, with a press briefing on March 18th, the event saw an enthusiastic turnout from Nairobi's food community. Guests left with their palates delighted and their minds inspired, a true reflection of what Jitamani Africa stands for—pioneering new culinary experiences that marry tradition with innovation. 
                              "The Chef and The Cook" has undoubtedly set a new standard for culinary events in the region, leaving an indelible mark on everyone who had the pleasure of attending.
                              </p>
                        </div>                        
                    </div>
                    <div class="card">
                            <div class="header">
                                <h2>Comments 1</h2>
                            </div>
                            <div class="body">
                                <ul class="comment-reply list-unstyled">
                                    <li class="row clearfix">
                                        <div class="icon-box col-md-2 col-4"><img class="img-fluid img-thumbnail" src="images/seina1.jpg" alt="Awesome Image"></div>
                                        <div class="text-box col-md-10 col-8 p-l-0 p-r0">
                                            <h5 class="m-b-0">Gigi Hadid </h5>
                                            <p>Why are there so many tutorials on how to decouple WordPress? how fast and easy it is to get it running (and keep it running!) and its massive ecosystem. </p>
                                            <ul class="list-inline">
                                                <li><a href="javascript:void(0);">Mar 09 2018</a></li>
                                                <li><a href="javascript:void(0);">Reply</a></li>
                                            </ul>
                                        </div>
                                    </li>
                                    
                                </ul>                                        
                            </div>
                        </div>
                        <div class="card">
                            <div class="header">
                                <h2>Leave a reply <small>Your email address will not be published. Required fields are marked*</small></h2>
                            </div>
                            <div class="body">
                                <div class="comment-form">
                                    <form class="row clearfix">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control" placeholder="Your Name">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control" placeholder="Email Address">
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <textarea rows="4" class="form-control no-resize" placeholder="Please type what you want..."></textarea>
                                            </div>
                                            <button type="submit" class="btn btn-block btn-primary">SUBMIT</button>
                                        </div>                                
                                    </form>
                                </div>
                            </div>
                        </div>
                </div>
                <div class="col-lg-4 col-md-12 right-box">
                    
                   
                <h1>Blog List</h1>
    <a href="{{ route('blogs.create') }}">Create New Blog</a>
    <ul>
        @foreach ($blogs as $blog)
            <li>
            <a href="{{ route('blogs.show', $blog->slug) }}">{{ $blog->title }}</a>
            <form action="{{ route('blogs.destroy', $blog->slug) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
            </li>
        @endforeach
    </ul>

    <div class="row mb-2">
    <div class="col-md-6">
      <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
        <div class="col p-4 d-flex flex-column position-static">
          <strong class="d-inline-block mb-2 text-primary-emphasis">World</strong>
          <h3 class="mb-0">Featured post</h3>
          <div class="mb-1 text-body-secondary">Nov 12</div>
          <p class="card-text mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
          <a href="#" class="icon-link gap-1 icon-link-hover stretched-link">
            Continue reading
            <svg class="bi"><use xlink:href="#chevron-right"/></svg>
          </a>
        </div>
        <div class="col-auto d-none d-lg-block">
          <svg class="bd-placeholder-img" width="200" height="250" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
        <div class="col p-4 d-flex flex-column position-static">
          <strong class="d-inline-block mb-2 text-success-emphasis">Design</strong>
          <h3 class="mb-0">Post title</h3>
          <div class="mb-1 text-body-secondary">Nov 11</div>
          <p class="mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
          <a href="#" class="icon-link gap-1 icon-link-hover stretched-link">
            Continue reading
            <svg class="bi"><use xlink:href="#chevron-right"/></svg>
          </a>
        </div>
        <div class="col-auto d-none d-lg-block">
          <svg class="bd-placeholder-img" width="200" height="250" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>
        </div>
      </div>
    </div>
  </div>


                </div>
            </div>

        </div>
    </div>


@endsection

@push('styles')
<!-- Add any specific stylesheets for the index page if needed -->
@endpush

@push('scripts')
<!-- Add any specific scripts for the index page if needed -->
@endpush
