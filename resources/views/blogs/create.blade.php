@extends('layouts.app')

@section('content')
    <style>
        body {
            padding-top: 20px;
        }


        @media only screen and (min-width: 768px) {

            body:not(.layout-admin) .section,
            body:not(.layout-admin) section {
                padding: 100px 0;
            }
        }

        .d-middle {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .opacity-8,
        .overlay-opacity-8:after {
            opacity: .8
        }

        opacity-8,
        .overlay-opacity-8:after {
            opacity: .8;
        }

        .overlay-dark-hover:hover:after,
        .overlay-dark:after {
            background: #131f43;
        }

        .overlay-dark-hover:after,
        .overlay-dark:after,
        .overlay-light-hover:after,
        .overlay-light:after {
            bottom: 0;
            content: "";
            height: 100%;
            left: 0;
            position: absolute;
            right: 0;
            top: 0;
            width: 100%;
            z-index: 0;
        }

        .bg-theme-color-light {
            background-color: rgba(87, 79, 236, .04) !important;
        }

        .bg-cover {
            background-position: 50% !important;
            background-repeat: no-repeat !important;
            background-size: cover !important;
        }

        .overlay-dark,
        .overlay-dark-hover,
        .overlay-light,
        .overlay-light-hover {
            position: relative;
        }

        #overlay-default,
        .overlay-dark,
        .overlay-dark-hover:after,
        .overlay-default,
        .overlay-light,
        .overlay-light-hover:after {
            transition: all .2s ease;
        }

        .section,
        section {
            position: relative;
            word-break: break-word;
        }

        .overlay-dark>*,
        .overlay-light>* {
            position: relative;
            z-index: 1;
        }
    </style>
    <div class="section bg-theme-color-light overlay-dark overlay-opacity-8 bg-cover lazy" data-loaded="true"
        style="background-image: url(https://bootdey.com/img/Content/bg1.jpg);">
        <div class="container">
            <div class="row text-center-md text-center-xs d-middle justify-content-start">
                <div class="col-12 col-lg-6 mb-5 text-white aos-init aos-animate" data-aos="fade-in" data-aos-delay="0"
                    data-aos-offset="0">
                    <!-- main title -->
                    <h1 class="display-4 fw-bold mb-0">
                        <span class="d-inline-block">
                            <span class="h6 fw-normal d-block text-align-end text-center-xs">
                                Create a New Blog Post
                            </span>
                            <span class="text-danger">Jitamani</span> Africa
                        </span>
                    </h1>
                    <!-- slogan -->
                    <p class="h3 fw-normal mb-0">
                        Create your blog with the world
                    </p>
                </div>

                <div class="col-12 col-lg-6 text-align-end text-center-md text-center-xs aos-init aos-animate"
                    data-aos="fade-in" data-aos-delay="50" data-aos-offset="0">
                    <div
                        class="d-inline-block bg-white shadow-primary-xs rounded p-4 p-md-5 w-100 max-w-450 text-align-start">
                        <h2 class="h5 mb-5">
                            <i class="fi fi-pencil"></i>
                            <span class="d-inline-block px-2">Blog Post Form</span>
                        </h2>
                        <form action="{{ route('blogs.store') }}" method="POST" novalidate class="bs-validate" enctype="multipart/form-data">
                            @csrf
                            
                            <!-- Title Field -->
                            <div class="form-floating mb-3">
                                <input type="text" name="title" id="title" class="form-control" placeholder="Title" required>
                                <label for="title">Title</label>
                            </div>
                            
                            <!-- Content Field -->
                            <div class="form-floating mb-3">
                                <textarea name="content" id="content" class="form-control" placeholder="Content" required style="height: 100px;"></textarea>
                                <label for="content">Content</label>
                            </div>
                            
                            <!-- Excerpt Field -->
                            <div class="form-floating mb-3">
                                <textarea name="excerpt" id="excerpt" class="form-control" placeholder="Excerpt" style="height: 80px;"></textarea>
                                <label for="excerpt">Introduction</label>
                            </div>
                            
                            <!-- Featured Image Upload -->
                            <div class="form-floating mb-3">
                                <input type="file" name="featured_image" id="featured_image" class="form-control" placeholder="Upload Featured Image">
                                <label for="featured_image">Upload Featured Image</label>
                            </div>
                            
                            <!-- Second Image Upload -->
                            <div class="form-floating mb-3">
                                <input type="file" name="featured_image2" id="featured_image2" class="form-control" placeholder="Upload Second Image">
                                <label for="featured_image2">Upload Second Image</label>
                            </div>
                            
                            <!-- Post Image Upload -->
                            <div class="form-floating mb-3">
                                <input type="file" name="featured_image3" id="featured_image3" class="form-control" placeholder="Upload Post Image">
                                <label for="featured_image3">Upload Post Image</label>
                            </div>
                            
                            <!-- Tags Field -->
                            <div class="form-floating mb-3">
                                <input type="text" name="tags" id="tags" class="form-control" placeholder="Tags">
                                <label for="tags">Tags</label>
                            </div>
                            
                            <!-- Published At Field -->
                            <div class="form-floating mb-3">
                                <input type="date" name="published_at" id="published_at" class="form-control" placeholder="Published At">
                                <label for="published_at">Published At</label>
                            </div>
                            
                            <!-- Status Field -->
                            <div class="form-floating mb-3">
                                <select name="status" id="status" class="form-control">
                                    <option value="draft">Draft</option>
                                    <option value="published">Published</option>
                                </select>
                                <label for="status">Status</label>
                            </div>
                            
                            <!-- Submit Button -->
                            <button type="submit" class="btn w-100 btn-lg btn-danger bg-gradient-danger">
                                <i class="fi fi-save"></i> Save Blog
                            </button>
                        </form>
                        
                        <a href="{{ route('blogs.index') }}" class="btn btn-link mt-3">Back to List</a>
                    
                        <!-- Include CKEditor 4 -->
                        <script src="https://cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>
                        
                        <!-- Initialize CKEditor and ensure it updates before form submission -->
                        <script>
                            // Replace the textarea with CKEditor
                            CKEDITOR.replace('content');
                    
                            // Ensure CKEditor updates the textarea before form submission
                            document.querySelector('form').addEventListener('submit', function(e) {
                                for (instance in CKEDITOR.instances) {
                                    CKEDITOR.instances[instance].updateElement();
                                }
                            });
                        </script>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
