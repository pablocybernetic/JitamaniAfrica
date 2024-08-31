@extends('layouts.app')

@section('title', 'Welcome to Jitamani Africa')

@section('content')
<!-- Content will be added here later -->


 <!-- contact section start -->
 @include('partials.contact-form')
      <!-- contact section end -->

@endsection

@push('styles')
<!-- Add any specific stylesheets for the index page if needed -->
@endpush

@push('scripts')
<!-- Add any specific scripts for the index page if needed -->
@endpush
