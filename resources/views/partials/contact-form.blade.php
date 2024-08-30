<div class="contact_section layout_padding">
   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <h1 class="contact_taital">REQUEST A CALL BACK</h1>
         </div>
      </div>
      <div class="contact_section_2">
         <div class="row">
            <div class="col-md-8">
               <div class="mail_section map_form_container">
                  @if (session('status'))
                     <p class="status-message">{{ session('status') }}</p>
                  @endif
                  <form action="{{ route('send.email') }}" method="POST">
                     @csrf
                     <div class="row">
                        <div class="col-md-6">
                           <input type="text" class="mail_text" placeholder="Your Name" id="name" name="name">
                        </div>
                        <div class="col-md-6">
                           <input type="text" class="mail_text" placeholder="Email" id="email" name="email">
                        </div>
                        <div class="col-md-6">
                           <input type="text" class="mail_text" placeholder="Phone Number" id="phonenumber" name="phonenumber">
                        </div>
                        <div class="col-md-6">
                           <input type="text" class="mail_text" placeholder="Subject" id="subject" name="subject">
                        </div>
                     </div>
                     <textarea class="massage-bt" placeholder="Message" rows="5" id="message" name="message"></textarea>
                     <div class="btn_main">
                        <button type="submit" class="btn btn-primary" >Send Email</button>
                     </div>
                  </form>
               </div>
            </div>
            <div class="col-md-4">
               <div class="contact_img"><img src="images/consult.png"></div>
            </div>
         </div>
      </div>
   </div>
</div>
