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
                            <p class="lead fs-4 text-secondary mb-3">Jitamani Africa is a visionary, women-led business development and events consultancy, rooted in the rich and diverse African landscape. Our name, derived from the Swahili term meaning "to desire oneself," embodies our mission to inspire Africa to embrace its limitless potential and inherent glory.
                              Based in Kenya, we offer bespoke consultancy services across sectors as dynamic as Food, Fashion, Fitness, Film, Non-Profit, Tech, Music, and beyond. Our purpose is to empower businesses to reach their full potential through strategic insight, innovative event curation, and transformative marketing solutions.
                              
                              At Jitamani Africa, we are not just shaping businesses—we’re crafting the future of Africa's creative and entrepreneurial spirit.
                            <div class="row gy-4 gy-md-0 gx-xxl-5X">

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
