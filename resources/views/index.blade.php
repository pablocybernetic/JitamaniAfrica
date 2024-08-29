@extends('layouts.app')

@section('title', 'Welcome to Jitamani Africa')

@section('content')
<!-- Content will be added here later -->


<div style="background-color: #000000;">

      <div class="container">
         <div class="row">
            <div class="col-md-6 col-sm-12">
               <div class="p-3  bg-light">
                  <!-- banner section start -->
                  <div class="banner_section layout_padding">
                     <div class="container">
                        <div id="banner_slider" class="carousel slide" data-ride="carousel">
                           <div class="carousel-inner">
                              <div class="carousel-item active">
                                 <div class="row">
                                    <div class="col-md-12">
                                       <div class="">

                                          <h1 class="text-light" style="padding-bottom: 0em; margin-bottom: 0rem;">We're not just a</h1>

                                          <!-- <h1 class="banner_taital" id="banner-title"></h1>
                                       <p class="banner_text" id="banner-text"></p> -->
                                          <div class="text-container" id="text-container" style="height: 50px; padding-top: 0px;" >
                                             <h1 class="text ">Business Development Agency</h1>
                                             <h1 class="text ">Events & Marketing Agency</h1>
                                          </div>
                                          <h1 class="text-light" style="padding-top: 2px;">We're both in equal measures.</h1>


                                         
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>

                           </a>
                           </a>
                        </div>
                     </div>


                  </div>
                
                  <div class="btn_main d-flex" style="padding-bottom: 20px; padding-top: 0px; padding-left: 10px; ">
                    <div class="started_bt active d-flex"><a href="https://api.whatsapp.com/send?phone=254743945539&text=Hello%21%20I%20am%20interested%20in%20your%20services." style="padding: 7px;">Contact Us
                     <i class="fa fa-whatsapp" style="color: #fff; font-size: 24px;"></i>

                  </a>
                    </div> 
                    
                  </div>
               </div>
            </div>
            <div class="col-md-6 col-sm-12">
               <div class="p-3  bg-light">
                  <div class="video-container">
                     <video autoplay loop muted>
                        <source src="https://jitamaniafrica.com/images/bg.webm" type="video/mp4">
                        Your browser does not support the video tag.
                     </video>
                  </div>
               </div>
            </div>
         </div>
      </div>
<script>
    const texts = document.querySelectorAll('.text');
    const container = document.getElementById('text-container');
    let currentTextIndex = 0;
    let charIndex = 0;
    let isDeleting = false;
    const typingSpeed = 15;
    const deletingSpeed = 5;
    const pauseTime = 1000;

    function type() {
       const currentText = texts[currentTextIndex];
       if (isDeleting) {
          if (charIndex > 0) {
             container.textContent = currentText.textContent.substring(0, charIndex - 1);
             charIndex--;
             setTimeout(type, deletingSpeed);
          } else {
             isDeleting = false;
             currentText.style.display = 'none';
             currentTextIndex = (currentTextIndex + 1) % texts.length;
             setTimeout(type, typingSpeed);
          }
       } else {
          if (charIndex < currentText.textContent.length) {
             container.textContent = currentText.textContent.substring(0, charIndex + 1);
             charIndex++;
             setTimeout(type, typingSpeed);
          } else {
             isDeleting = true;
             setTimeout(type, pauseTime);
          }
       }
    }

    texts[currentTextIndex].style.display = 'block';
    type();
 </script>
     
  
      <!-- banner section end -->
   </div>
   <!-- banner section end -->
   </div>
      <!-- services section start -->
      <div class="services_section layout_padding">
         <div class="container">
            
            <div class="row">
               <div class="quote-card-1">
                  <p class="quote-text-1">"The size of your dreams must always exceed your current capacity to achieve them. If your dreams do not scare you, they are not big enough."</p>
                  <p class="quote-author-1">- Ellen Johnson Sirleaf
              </div>
               <div class="col-md-12">
                  
                  <div class="services_main">
                    
                     <!-- <hr class="border"> -->
                     <!-- <p>
                        "We are the ones we’ve been waiting for. We are the change that we seek." - Wangari Mathai  </p> -->
                     <!-- <h1 class="services_taital">Our Services</h1> -->
                     <!-- <hr class="border"> -->
                  </div>
               </div>
            </div>
         </div>
      
   <!-- header section end -->
   <section class="py-3 py-md-5" style="background-color: #000;">
      <div class="container">
        <div class="row gy-3 gy-md-4 gy-lg-0 align-items-lg-center">
         <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css" integrity="sha256-2XFplPlrFClt0bIdPgpz8H7ojnk10H69xRqd9+uTShA=" crossorigin="anonymous" />
<div class="container">
    <div class="row align-items-center">
        
        <div class="col-lg-6 col-md-6 col-12 order-1 order-md-2 shooting-star-background">
            
         <div class="section-title ml-lg-5">
        <!-- <div class="col-12 col-lg-6 col-xl-5"> -->
         <video autoplay loop muted style="height: 70%;" class="col-12">
            <source src="images/3.webm" type="video/mp4">
            Your browser does not support the video tag.
        </video>         
       </div></div>
         <div class="col-lg-6 col-md-6 col-12 order-1 order-md-2 shooting-star-background">
            
                  <div class="section-title ml-lg-5">
                <h3 class="text-custom font-weight-normal mb-3 text-muted  fs-6" style="color: #fff !important;" >About Us</h3>
                <!-- <h4 class="title mb-4 fs-6" style="color: white;">
                    
Who Are We?                </h4> -->

                <p class="lead fs-5 text-secondary mb-3" style="color: #fff !important;">Jitamani Africa is a leading business development and events consultancy firm deeply rooted in the vibrant and diverse African landscape. The name Jitamani, a Swahili term meaning "to desire oneself," reflects our mission to inspire Africa to embrace its powerful glory.
                  Based in Kenya, we specialize in providing customized consultancy services across the dynamic sectors of Food, Fashion, Fitness, and Music. Our goal is to empower businesses and brands to reach their full potential through strategic consultancy, innovative event curation, and exceptional marketing and sales management.         <div class="row gy-4 gy-md-0 gx-xxl-5X">
   </p>

              
            </div>
        </div>
        <!--end col-->
    </div>
    <!--enr row-->
</div>
          
        </div>
      </div>
    </section>
   <!-- services section start -->
   <div class="services_section layout_padding">
      <div class="container">
         
         <div class="row">
            <div class="quote-card-1">
               <p class="quote-text-1">"We are the ones we’ve been waiting for. We are the change that we seek."</p>
               <p class="quote-author-1">- Wangari Mathai</p>
           </div>
            <div class="col-md-12">
               
               <div class="services_main">
                 
                  <!-- <hr class="border"> -->
                  <!-- <p>
                     "We are the ones we’ve been waiting for. We are the change that we seek." - Wangari Mathai  </p> -->
                  <!-- <h1 class="services_taital">Our Services</h1> -->
                  <!-- <hr class="border"> -->
               </div>
            </div>
         </div>
      </div>
   </div>
   <div class="services_section layout_padding" style="background-color: #0b0c10; padding-bottom: 300px !important;">
      <div class="services_main">
         <!-- <hr class="border" > -->
         <h1 class="services_taital" style="color: #ebe5e5;">Our Services</h1>
         <!-- <hr class="border"> -->
      </div>
      <div class="container">

         <div class="services_section_2" style="padding-bottom: 2rem;">
            <div class="col-md-12">
               <div class="row">
                  <div class="col-md-6">
                     <strong></strong>
                     <p></p>
                     <!-- <div class="icon_img"><img src="images/icon-1.png"></div> -->
                     <h3 class="bitcoin_text" style="color:rgb(255, 255, 255);  text-align: start; ">Business Development
                        Consultancy </h3>
                     <p class="services_text" style="color:white;  text-align: start; width: 100%;">

                        <strong style="font-style: bold; color: rgb(226, 55, 126);">Strategic Planning:</strong>
                        We provide comprehensive business planning and strategy
                        development to help your business navigate the competitive market.
                        <br><strong style="font-style: bold; color: rgb(226, 55, 126);">Operational Efficiency:</strong>
                        Optimize your operations with our expert guidance to
                        enhance productivity and profitability.
                        <br><strong style="font-style: bold; color: rgb(226, 55, 126);">Market Analysis:</strong> In-depth
                        market research and analysis to identify opportunities
                        and inform decision-making.
                     </p>

                  </div>
                  <div class="col-md-2"></div>
                  <div class="col-md-4">
                      <video class="myVideo" width="400" height="300" autoplay loop muted>
                        <source src="541058089196Growing.webm" type="video/webm">
                        Your browser does not support the video tag.
                     </video>
                  </div>
               </div>

               <br><br>


               <div class="row">
                  <div class="col-md-6">
                     <!-- <div class="icon_img"><img src="images/icon-1.png"></div> -->
                     <h3 class="bitcoin_text" style="color:white;  text-align: start;">Event Curation & Execution</h3>
                     <p class="services_text" style="color:white;  text-align: start; width: 100%;">
                        <strong style="font-style: bold; color: rgb(226, 55, 126);">Event Planning</strong>

                        Detailed and customized event planning to align with your
                        brand vision and objectives. <br>
                        <strong style="font-style: bold; color: rgb(226, 55, 126);">Creative Concepts:</strong>
                        Innovative and engaging event concepts tailored to the
                        Food, Fashion, Fitness, and Music industries.
                        <br><strong style="font-style: bold; color: rgb(226, 55, 126);">Execution & Management:</strong>
                        End-to-end event management ensuring seamless
                        execution and memorable experiences.
                     </p>

                  </div>
                  <div class="col-md-2"></div>
                  <div class="col-md-4">
                      <video class="myVideo" width="400" height="300" autoplay loop muted>
                        <source src="images/44.webm" type="video/webm">
                        Your browser does not support the video tag.
                     </video>
                  </div>
               </div>

<br><br>
               <div class="row">
                  <div class="col-md-6">
                     <!-- <div class="icon_img"><img src="images/icon-1.png"></div> -->
                     <h3 class="bitcoin_text" style="color:white;  text-align: start;">Marketing Consultancy</h3>
                     <p class="services_text" style="color:white;  text-align: start; width: 100%;">
                        <strong style="font-style: bold; color: rgb(226, 55, 126);"> Brand Development:
                        </strong>
                        Crafting compelling brand identities and strategies to
                        stand out in the market.
                        <br><strong style="font-style: bold; color: rgb(226, 55, 126);">Digital Marketing:</strong>
                        Utilizing digital platforms to enhance your online presence
                        and engage with your target audience.
                        <br><strong style="font-style: bold; color: rgb(226, 55, 126);"> Campaign Management: </strong>
                        Designing and managing effective marketing
                        campaigns to drive awareness and sales.

                     </p>

                  </div>
                  <div class="col-md-2"></div>
                  <div class="col-md-4">
                      <video class="myVideo" width="400" height="300" autoplay loop muted>
                        <source src="images/VaynerMedia - Home.webm" type="video/webm">
                        Your browser does not support the video tag.
                     </video>
                  </div>
               </div>
<br><br>

               <div class="row">
                  <div class="col-md-6">
                     <!-- <div class="icon_img"><img src="images/icon-1.png"></div> -->
                     <h3 class="bitcoin_text" style="color:white;  text-align: start;">Sales Management</h3>
                     <p class="services_text" style="color:white;  text-align: start; width: 100%;">
                        <strong style="font-style: bold; color: rgb(226, 55, 126);">
                           Sales Strategy:</strong>
                        Developing robust sales strategies to boost your revenue and
                        market share.
                        <br><strong style="font-style: bold; color: rgb(226, 55, 126);"> Sales Training:</strong>
                        Empowering your sales team with the skills and knowledge to
                        excel.
                        <br><strong style="font-style: bold; color: rgb(226, 55, 126);">Performance Monitoring:</strong>
                         Continuous monitoring and optimization of sales
                        processes to achieve targets.

                     </p>

                  </div>
                  <div class="col-md-2"></div>
                  <div class="col-md-4">
                      <video class="myVideo" width="400" height="300" autoplay loop muted>
                        <source src="images/55.webm" type="video/webm">
                        Your browser does not support the video tag.
                     </video>
                  </div>
               </div>

            </div>
         </div>
      </div>
   </div>
   <script>
    document.addEventListener('DOMContentLoaded', () => {
 const videos = document.querySelectorAll('.myVideo1');
 let currentVideo = null;

 const observer = new IntersectionObserver(entries => {
     let closestVideo = null;
     let closestDistance = Number.MAX_VALUE;

     entries.forEach(entry => {
         if (entry.isIntersecting) {
             const rect = entry.boundingClientRect;
             const viewportHeight = window.innerHeight;
             const videoCenter = rect.top + rect.height / 2;
             const viewportCenter = viewportHeight / 2;
             const distance = Math.abs(videoCenter - viewportCenter);

             if (distance < closestDistance) {
                 closestDistance = distance;
                 closestVideo = entry.target;
             }
         }
     });

     videos.forEach(video => {
         if (video === closestVideo) {
             video.classList.remove('hidden');
             video.play();
         } else {
             video.classList.add('hidden');
             video.pause();
         }
     });
 }, {
     threshold: [0, 1] // Adjust as needed
 });

 videos.forEach(video => observer.observe(video));
});

   </script>

   <!-- services section end -->
   <div class="services_section layout_padding" style="background-color: #fff;">
      <div class="container">
         <div class="row">
            <div class="quote-card-1">
               <p class="quote-text-1">"It is better to die for an idea that will live, than to live for an idea that will die."</p>
               <p class="quote-author-1"> – Steve Biko  </p>
           </div>
            <div class="col-md-12">
               <div class="services_main">
                  <!-- <hr class="border" style="color: #ebe5e5;">
<p>  "It is better to die for an idea that will live, than to live for an idea that will die." – Steve Biko  
</p>
                  <hr class="border" style="color: #ebe5e5;"> -->
               </div>
            </div>
         </div>
      </div>
   </div>

   <div class="services_section layout_padding " style="background-color: #008080;">
      <div class="container">
         <h1 class="services_taital" style="text-align: center; color: rgb(255, 255, 255) ;">We’re grateful to work with
            the greatest brands, all across Africa.</h1>
         <div class="services_section_2" style="padding-bottom: 1rem;">
            <div class="col-md-12">
               <div class="row">
                  <div class="col-6 col-md-2 mb-4 p-4 d-flex align-items-center justify-content-center">
                     <img src="images/254-Brewing-Co.-Favicon-512x512px.png" alt="Partner 1"
                        class="img-fluid partner-logo" style="height: 100px;">
                  </div>
                  <div class="col-6 col-md-2 mb-4 p-4 d-flex align-items-center justify-content-center">
                     <img src="images/admi.png" alt="Partner 2" class="img-fluid partner-logo" style="height: 70px;">
                  </div>
                  <div class="col-6 col-md-2 mb-4 p-4 d-flex align-items-center justify-content-center">
                     <img src="images/Deo Media.png" alt="Partner 3" class="img-fluid partner-logo" style="height: 100px;">
                  </div>
                  <div class="col-6 col-md-2 mb-4 p-4 d-flex align-items-center justify-content-center">
                     <img src="images/Hero-Logo.png" alt="Partner 4" class="img-fluid partner-logo" style="height: 100px;">
                  </div>
                  <div class="col-6 col-md-2 mb-4 p-4 d-flex align-items-center justify-content-center">
                     <img src="images/If We Build It.webp" alt="Partner 5" class="img-fluid partner-logo" style="height: 100px;">
                  </div>
                  <div class="col-6 col-md-2 mb-4 p-4 d-flex align-items-center justify-content-center">
                     <img src="images/Remy-Martin-logo.png" alt="Partner 6" class="img-fluid partner-logo" style="height: 100px;">
                  </div>
                  <div class="col-6 col-md-2 mb-4 p-4 d-flex align-items-center justify-content-center">
                     <img src="images/gtc.png" alt="Partner 7"
                        class="img-fluid partner-logo" style="height: 130px;"> 
                  </div>
                  <div class="col-6 col-md-2 mb-4 p-4 d-flex align-items-center justify-content-center">
                     <img src="images/firsteye.png" alt="Partner 7"
                        class="img-fluid partner-logo" style="height: 100px;">
                  </div>
                  <div class="col-6 col-md-2 mb-4 p-4 d-flex align-items-center justify-content-center">
                     <img src="images/winebox.png" alt="Partner 7"
                        class="img-fluid partner-logo" style="height: 120px;">
                  </div>
                  <div class="col-6 col-md-2 mb-4 p-4 d-flex align-items-center justify-content-center">
                     <img src="images/Logo22.webp" alt="Partner 7"
                        class="img-fluid partner-logo" style="height: 40px;">
                  </div>
                  <div class="col-6 col-md-2 mb-4 p-4 d-flex align-items-center justify-content-center">
                     <img src="images/BDC-Roundel.webp" alt="Partner 7"
                        class="img-fluid partner-logo" style="height: 100px;">
                  </div>
                  <div class="col-6 col-md-2 mb-4 p-4 d-flex align-items-center justify-content-center">
                     <img src="images/bahari.png" alt="Partner 7"
                        class="img-fluid partner-logo" style="height: 100px;">
                  </div>

               </div> <!-- Close .row -->
            </div> <!-- Close .col-md-12 -->
         </div> <!-- Close .services_section_2 -->
      </div> <!-- Close .container -->
   </div> <!-- Close .services_section -->
   <br><br>
   <!-- features section start -->
   <!-- services section end -->
   <div class="services_section layout_padding" style="background-color: #fff;">
      <div class="container">
         <div class="row">
            <div class="quote-card-1">
               <p class="quote-text-1">"You cannot carry out fundamental change without a certain amount of madness. It comes from nonconformity, the courage to turn your back on the old formulas, the courage to invent the future."</p>
               <p class="quote-author-1"> - Thomas Sankara    </p>
           </div>
            <div class="col-md-12">
               <div class="services_main">
                  <!-- <hr class="border" style="color: #ebe5e5;">
                  <p> "You cannot carry out fundamental change without a certain amount of madness. It comes from nonconformity, the courage to turn your back on the old formulas, the courage to invent the future." - Thomas Sankara  
                  </p>
                  <hr class="border" style="color: #ebe5e5;"> -->
               </div>
            </div>
         </div>
      </div>
   </div>

   <!-- contact section start -->
   <div class="contact_section layout_padding">
      <div class="container">
         <div class="row">
            <div class="col-md-12">
               <h1 class="contact_taial" style="color: #ebe5e5;"> Keen to Collaborate? Let's Set Up a Call</h1>
            </div>
         </div>
         <div class="contact_section_2">
            <div class="row">
               <div class="col-md-8">
                  <div class="mail_section map_form_container">

                     <style>
                        .mail_text {
                           width: 100%;
                           padding: 10px;
                           margin: 5px 0;
                        }

                        .massage-bt {
                           width: 100%;
                           padding: 10px;
                           margin: 5px 0;
                        }

                        .btn_main {
                           margin-top: 10px;
                        }

                        .send_bt a {
                           display: block;
                           padding: 10px 20px;
                           background-color: #02a763;
                           color: #fff;
                           text-align: center;
                           text-decoration: none;
                        }
                     </style>

                     <form id="contactForm">
                        <div class="row">
                           <div class="col-md-6">
                              <input type="text" class="mail_text" placeholder="Your Name" name="name" required>
                           </div>
                           <div class="col-md-6">
                              <input type="email" class="mail_text" placeholder="Email" name="email" required>
                           </div>
                           <div class="col-md-6">
                              <input type="text" class="mail_text" placeholder="Phone Number" name="phone" required>
                           </div>
                           <div class="col-md-6">
                              <input type="text" class="mail_text" placeholder="Subject" name="subject" required>
                           </div>
                        </div>
                        <textarea class="massage-bt" placeholder="Message" rows="5" id="comment" name="message"
                           required></textarea>
                        <div class="btn_main">
                           <div class="send_bt active"><a href="#" id="sendButton">Send</a></div>
                        </div>
                     </form>

                     <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
                     <div class="modal fade" id="messageModal" tabindex="-1" aria-labelledby="messageModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog">
                           <div class="modal-content">
                              <div class="modal-header">
                                 <h5 class="modal-title" id="messageModalLabel">Message Status</h5>
                                 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                 </button>
                              </div>
                              <div class="modal-body" id="messageModalBody">
                                 <!-- Message will be inserted here by JavaScript -->
                              </div>
                              <div class="modal-footer">
                                 <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                              </div>
                           </div>
                        </div>
                     </div>

                     <script>
                        $(document).ready(function () {
                           $('#sendButton').click(function (event) {
                              event.preventDefault();

                              $.ajax({
                                 type: 'POST',
                                 url: $('#contactForm').attr('action'),
                                 data: $('#contactForm').serialize(),
                                 success: function (response) {
                                    $('#messageModalLabel').text('Success');
                                    $('#messageModalBody').text('Message sent successfully!');
                                    $('#contactForm')[0].reset();
                                    $('#messageModal').modal('show');
                                 },
                                 error: function () {
                                    $('#messageModalLabel').text('Error');
                                    $('#messageModalBody').text('There was an error sending the message.');
                                    $('#messageModal').modal('show');
                                 }
                              });
                           });
                        });
                     </script>

                  </div>
               </div>
               <div class="col-md-4">
                  <div class="contact_img"><img src="images/consult.png"></div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div class="services_section layout_padding" style="background-color: #fff;">
      <div class="container">
         <div class="row">
            <div class="quote-card-1">
               <p class="quote-text-1">"To Drive Brand Distinction, We Design Immersive Experiences Fueled By Creativity & Innovation."</p>
               <p class="quote-author-1">  - Jitamani Africa   </p>
           </div>
            <div class="col-md-12">
               <div class="services_main">
                  <!-- <hr class="border">
                  <p>
                     "To Drive Brand Distinction, We Design Immersive Experiences Fueled By Creativity & Innovation." - Jitamani Africa
 </p>
                  <hr class="border"> -->
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
