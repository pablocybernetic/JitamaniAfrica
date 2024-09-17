<!-- resources/views/partials/footer.blade.php -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<a href="https://api.whatsapp.com/send?phone=254743945539&text=Hello%21%20I%20am%20interested%20in%20your%20services."
    class="float" target="_blank">
    <i class="fa fa-whatsapp my-float"></i>
</a>
<div class="footer_section layout_padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-sm-6">
                <h3 class="useful_text">Our Company</h3>
                <div class="footer_menu">
                    <ul>
                        <li><a href="{{ url('/') }}">Home</a></li>
                        <li><a href="{{ url('/about') }}">About</a></li>
                        <li><a href="{{ url('/services') }}">Services</a></li>
                        <li><a href="{{ url('/blogs') }}">Blog</a></li>
                        <li><a href="{{ url('/contact') }}">Contact</a></li>
                        <li>@guest
                                <a href="{{ route('login') }}">Login</a>
                            @endguest
                        </li>
                        @auth


                            <!-- <li>        <a href="{{ route('dashboard') }}" class="btn btn-success">Go to Dashboard</a> -->
                            </li>
                            <li> <a href="{{ route('blogs.create') }}">Create New Blog</a>
                            </li>
                        @endauth
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <h1 class="useful_text">Contact us</h1>
                <div class="location_text">
                    <ul>
                        <li>
                            <a
                                href="https://api.whatsapp.com/send?phone=254743945539&text=Hello%21%20I%20am%20interested%20in%20your%20services.">
                                <span class="padding_left_10"><i class="fa fa-whatsapp"
                                        aria-hidden="true"></i></span>WhatsApp</a>
                        </li>
                        <li>
                            <a href="#"><span class="padding_left_10"><i class="fa fa-phone"
                                        aria-hidden="true"></i></span>+254 743 945 539</a>
                        </li>
                        <li>
                            <a href="#"><span class="padding_left_10"><i class="fa fa-envelope"
                                        aria-hidden="true"></i></span>jitamaniafrica@gmail.com</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <h1 class="useful_text">Newsletter</h1>
                <form action="/" method="post">
                    <div class="form-group">
                        <input type="email" class="update_mail" placeholder="Your Email" id="email" name="email"
                            required />
                        <div class="subscribe_bt">
                            <button type="submit" class="btn button info">
                                <i class="fa fa-arrow-right" aria-hidden="true"></i>
                            </button>
                        </div>
                    </div>
                </form>

                <div class="footer_social_icon">
                    <ul>
                        <li><a href="https://www.facebook.com/seina.naimasiah/"><i class="fa fa-facebook"
                                    aria-hidden="true"></i></a></li>
                        <li><a href="https://www.linkedin.com/company/jitamani-africa"><i class="fa fa-linkedin"
                                    aria-hidden="true"></i></a></li>
                        <li><a href="https://www.instagram.com/_the_seina/?locale=fr_FR"><i class="fa fa-instagram"
                                    aria-hidden="true"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="copyright_section">
    <div class="container">
        <p class="copyright_text">2024 All Rights Reserved. Design by <a
                href="https://wa.me/254705374455?text=I'm%20interested%20in%20Website%20services%20for%20">Gitau</a></p>
    </div>
</div>
