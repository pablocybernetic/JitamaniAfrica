<!-- resources/views/email-form.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Contact Form</title>
    <style>
        /* General styles for the body */
        body {
           font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-image: url('https://laravel.com/assets/img/welcome/background.svg');
            background-size: auto; /* Adjust to 'auto' for testing */
            background-position: top left; /* Ensure the image is at the top-left */
            background-repeat: no-repeat;
            background-color:black;
        }
        .container {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            max-width: 600px;
            width: 100%;
        }
        h1 {
            color: #333333;
            margin-bottom: 20px;
            font-size: 24px;
            text-align: center;
        }
        label {
            display: block;
            margin-bottom: 8px;
            color: #333333;
        }
        input[type="text"], 
        input[type="email"], 
        textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #cccccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
        textarea {
            resize: vertical;
            height: 150px;
        }
        button {
            background-color: #007bff;
            color: #ffffff;
            border: none;
            padding: 10px 20px;
            border-radius: 4px;
            font-size: 16px;
            cursor: pointer;
            display: block;
            width: 100%;
            transition: background-color 0.3s ease;
        }
        button:hover {
            background-color: #0056b3;
        }
        .status-message {
            color: #28a745;
            text-align: center;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Contact Us</h1>
        @if (session('status'))
            <p class="status-message">{{ session('status') }}</p>
        @endif

        <form action="{{ route('send.email') }}" method="POST">
            @csrf
            <label for="name">Name:</label>
            <input type="text" name="name" id="name" required>
            
            <label for="email">Email:</label>
            <input type="email" name="email" id="email" required>
            
            <label for="message">Message:</label>
            <textarea name="message" id="message" required></textarea>
            
            <button type="submit">Send Email</button>
        </form>
    </div>
</body>
</html>
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
                                 <!-- <input type="text" class="mail_text" placeholder="Subject" id="subject" name="subject"> -->
                              </div>
                           </div>
                           <textarea class="massage-bt" placeholder="Message" rows="5" id="message" name="message"></textarea>
                           <div class="btn_main">
                           <button type="submit">Send Email</button>
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