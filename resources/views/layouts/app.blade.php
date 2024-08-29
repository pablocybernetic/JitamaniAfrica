<!DOCTYPE html>
<html>
   <head>
      <!-- Basic Meta Tags -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      
      <!-- Site Meta Tags -->
      <title>@yield('title', 'Jitamani Africa')</title>
      <meta name="keywords" content="Business Development, Events Consultancy, African Business Development, ...">
      <meta name="description" content="Jitamani Africa is a leading business development and events consultancy firm ...">
      <meta name="author" content="Jitamani Africa">

      <!-- Open Graph Meta Tags -->
      <meta property="og:title" content="Jitamani Africa - Business Development & Events Consultancy">
      <meta property="og:description" content="Empowering African businesses through strategic consultancy in Food, Fashion, Fitness, and Music.">
      <meta property="og:image" content="{{ asset('images/logo1.png') }}">
      <meta property="og:url" content="{{ url('/') }}">
      <meta property="og:type" content="website">

      <!-- Twitter Card Meta Tags -->
      <meta name="twitter:card" content="summary_large_image">
      <meta name="twitter:title" content="Jitamani Africa - Business Development & Events Consultancy">
      <meta name="twitter:description" content="Empowering African businesses through strategic consultancy in Food, Fashion, Fitness, and Music.">
      <meta name="twitter:image" content="{{ asset('images/logo1.png') }}">

      <!-- Stylesheets -->
      <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">
      <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
      <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
      <link rel="icon" href="{{ asset('images/logo1.png') }}" type="image/gif" />
      <link href="https://fonts.googleapis.com/css?family=Poppins:400,700,800|Raleway:400,600,700,800&display=swap" rel="stylesheet">
      <link rel="stylesheet" href="{{ asset('css/jquery.mCustomScrollbar.min.css') }}">
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">

      @stack('styles')
   </head>
   <body style="margin-top: 0%; padding-top: 0px;">
   <style>
      @media (min-width: 993px) and (min-width: 993px) {
    .col-12.col-lg-6.col-xl-5 {
        /* margin-top: -324px; */
    }
}

.shooting-star-background {
    position: relative;
    width: 100%;
    height: 100vh;
}

.shooting-star {
    position: absolute;
    width: 3px;
    height: 3px;
    background: #d0a9f5; /* Light purple color */
    border-radius: 50%;
    box-shadow: 0 0 5px rgba(209, 169, 245, 0.8); /* Glowing effect */
    opacity: 0;
}

canvas {
    position: absolute;
    top: 0;
    left: 0;
    z-index: -1; /* Ensure canvas is behind other elements */
}

/* Define the shooting star animation */
@keyframes shootingStar {
    0% {
        transform: translateY(-100vh) translateX(0);
        opacity: 1;
    }
    50% {
        opacity: 1;
    }
    100% {
        transform: translateY(100vh) translateX(100vw);
        opacity: 0;
    }
}
@font-face {
   font-family: myFont;
   src: url(fonts/Barcelony.ttf);
}
.quote-card-1 {
            /* position: absolute; */
            /* background: linear-gradient(145deg, #ffffff, #f9f9f9); Subtle gradient background */
            border-radius: 15px;
            padding: 20px;
            /* box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); */
            /* width: 300px; */
            text-align: center;
            color: #333;
            /* border-left: 5px solid #4a90e2; Blue accent line on the left */
            transition: transform 0.3s ease, box-shadow 0.3s ease; /* Smooth transitions */
        }

        .quote-card-1:hover {
            transform: translateY(-5px); /* Slight lift effect */
            /* box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2); Deeper shadow on hover */
        }


        .quote-text-1 {
            font-size: 1.5rem; /* Slightly smaller font size */
            font-style: italic;
            margin-bottom: 15px; /* Adjusted margin for spacing */
            line-height: 1.4; /* Adjusted line-height for readability */
            text-shadow: 0 1px 2px rgba(0, 0, 0, 0.1);
            /* font-family: myFont; */
            font-family: Playfair Display;

        }

        .quote-author-1 {
            font-size: 1.0rem; /* Slightly smaller font size */
            font-weight: bold;
            color: #4a90e2; /* Accent color for the author */
            text-transform: uppercase;
        }

        /* Responsive Styling */
        @media (min-width: 480px) {
            .quote-card-1 {
                padding: 25px;
                width: 100%; /* Slightly larger width for medium screens */
            }

            .quote-text-1 {
                font-size: 1.4rem; /* Slightly larger for medium screens */
            }

            .quote-author-1 {
                font-size: 1.1rem; /* Slightly larger for medium screens */
            }
        }

        @media (min-width: 768px) {
            .quote-card-1 {
                padding: 30px;
                width: 100%; /* Larger width for larger screens */
            }

            .quote-text-1 {
                font-size: 1.5rem; /* Larger font size for larger screens */
            }

            .quote-author-1 {
                font-size: 1.2rem; /* Larger font size for larger screens */
            }
        }
        @media (min-width: 768px) {
    .text-container {
        font-size: 1.15rem;
    }
}
        
        @media (max-width: 764px) {
    .text-container {
        font-size: 1.1rem; 
        height: 30px !important;
    }

}



@media (min-width: 1200px) {
    .text-container {
        font-size: 2rem; 
    }
}

      .text-container {
         font-family: Arial, sans-serif;
         color: rgb(226, 55, 126);
         position: relative;
         height: 1em;
         width: max-content;
         white-space: nowrap;
         overflow: hidden;
         font-weight: bold;
      }

      .text {
         display: none;
      }



      .navbar {
         position: sticky;
         background: rgba(87, 236, 204, 0.8);
      }
      div.sticky {
  position: -webkit-sticky; /* Safari */
  position: sticky;
  top: 0;
}
   </style>

   <!-- <video autoplay loop muted>
          <source src="images/bg.mp4" type="video/mp4">
          Your browser does not support the video tag.
      </video> -->
   <div class="header_section " style="background-color: black;">
      <div class="container sticky">
         <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="{{ url('/') }}">
               <h1><strong style="color: #fff; font-family: ui-monospace; font-size: 30px; padding-left: 30px;">Jitamani
                     Africa</strong></h1>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
               aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent" style="justify-content: right ;">
            <ul class="navbar-nav ml-auto">
    <!-- <li class="nav-item">
        <a class="nav-link text-light" href="{{ url('/') }}">Who We Are</a>
    </li> -->

    <li class="nav-item">
        <a class="nav-link text-light" href="{{ url('/about') }}">About</a>
    </li>
    <li class="nav-item">
        <a class="nav-link text-light" href="{{ url('/services') }}">Services</a>
    </li>

    <li class="nav-item">
        <a class="nav-link text-light" href="{{ url('/blog') }}">Blog</a>
    </li>
    <li class="nav-item">
        <a class="nav-link text-light" href="{{ url('/contact') }}">Contact Us</a>
    </li>
</ul>

          
            </div>
         </nav>
         <style>
            .myVideo {
    /* transition: opacity 0.5s ease, visibility 0.5s ease; */
}
.myVideo.hidden {
    opacity: 0;
    /* visibility: hidden; peter*/  
    /* position: absolute; Removes them from the document flow  peter*/
    width: 0;
    height: 0;
}

            .video-container {
               position: relative;
               width: 100%;
               max-width: 500px;
               /* You can adjust this as needed */
               padding-bottom: 100%;
               /* 1:1 aspect ratio */
               overflow: hidden;
               background: #000;
            }

            .video-container video {
               position: absolute;
               top: 0;
               left: 0;
               width: 100%;
               height: 100%;
               object-fit: cover;
               /* Ensure the video covers the container */
            }

            #banner-title,
            #banner-text {
               /* font-size: 2rem; */
               white-space: pre-wrap;
               /* Preserve whitespace and wrapping */
               overflow-wrap: normal;
               /* Prevent breaking of words */
               word-break: normal;
               /* Prevent breaking of words */
            }

            .letter {
               display: inline-block;
               opacity: 0;
               animation: fadeIn 0.5s forwards, shimmer 2s infinite;
            }

            @keyframes fadeIn {
               to {
                  opacity: 1;
               }
            }

            @keyframes shimmer {
               0% {
                  color: #28f7a7;
               }

               50% {
                  color: #2949ff;
               }

               100% {
                  color: #ebe5e5;
               }
            }
         </style>
    

      </div>
   </div>

      <!-- Main Content Area -->
      <div class="content">
         @yield('content')
      </div>

      <!-- Include Footer -->
      @include('partials.footer')

      <!-- JavaScript Files -->
      <script src="{{ asset('js/jquery.min.js') }}"></script>
      <script src="{{ asset('js/popper.min.js') }}"></script>
      <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
      <script src="{{ asset('js/jquery-3.0.0.min.js') }}"></script>
      <script src="{{ asset('js/plugin.js') }}"></script>
      <script src="{{ asset('js/jquery.mCustomScrollbar.concat.min.js') }}"></script>
      <script src="{{ asset('js/custom.js') }}"></script>

      @stack('scripts')
   </body>
</html>
