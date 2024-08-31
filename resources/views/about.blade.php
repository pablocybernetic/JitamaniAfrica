@extends('layouts.app')

@section('title', 'Welcome to Jitamani Africa')

@section('content')
<!-- Content will be added here later -->

<section class="py-3 py-md-5">
   <div class="container">
     <div class="row gy-3 gy-md-4 gy-lg-0 align-items-lg-center">
       <div class="col-12 col-lg-6 col-xl-5">
         <video autoplay loop muted style="height: 100%;" class="col-12">
            <source src="images/3.webm" type="video/mp4">
            Your browser does not support the video tag.
        </video>         
       </div>
       <div class="col-12 col-lg-6 col-xl-7">
         <div class="row justify-content-xl-center">
           <div class="col-12 col-xl-11">
             <h2 class="mb-3">Who Are We?</h2>
             <p class="lead fs-4 text-secondary mb-3">Jitamani Africa is a leading business development and events consultancy firm deeply rooted in the vibrant and diverse African landscape. The name Jitamani, a Swahili term meaning "to desire oneself," reflects our mission to inspire Africa to embrace its powerful glory.
               Based in Kenya, we specialize in providing customized consultancy services across the dynamic sectors of Food, Fashion, Fitness, and Music. Our goal is to empower businesses and brands to reach their full potential through strategic consultancy, innovative event curation, and exceptional marketing and sales management.         <div class="row gy-4 gy-md-0 gx-xxl-5X">
              
             </div>
           </div>
         </div>
       </div>
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
