<!DOCTYPE html>
 <html lang="en">
 <head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <link rel="stylesheet" type="text/css" href="stylesheet.css">
    <!-- Add font awesome CDN-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <title>Contact Us:</title>
  </head>
     <body id = "contact_body">
   <!-- contact section -->
         <section id="contactSec">
           <div class="container">
           	 <h2>Contact Us</h2>
              <p>Let us know if you need anything:</p>
             <div class="contact-form">

                  <!-- First grid -->
                  <div>
                    <i class="fa fa-map-marker"></i><span class="form-info">  89 Leinster Road, Dublin</span><br>
                    <i class="fa fa-phone" > </i><span class="form-info">  +353 89 082 6739</span><br>
                    <i class="fa fa-envelope"></i><span class="form-info">  tcjchangunda@gmail.com</span>
                  </div>
                  
                      <!-- second grid -->
                    <div id = "grid2">        
                      <form id = "form" action = "contact_us_manage.php" method = "POST">
                            <input type="text" id = "contName" name = "name" placeholder="Enter your name" required>
                            <p class = "name_error" style="color: #d9534f; text-align: left; padding: none;"></p>
                            <input type="Email" id = "contEmail" name = "email" placeholder="Enter your email" required><br>
                            <p class = "email_error" style="color: #d9534f; text-align: left; padding: none;"></p>
                            <input type="number" id = "contNumber" name = "number" placeholder="Enter your phone number" required><br>
                            <p class = "number_error" style="color: #d9534f; text-align: left; padding: none;"></p>
                            <textarea name="message" id = "contMessage" name = "message" placeholder="Comments and Complaints.." rows="5" required></textarea><br>
                            <p class = "message_error" style="color: #d9534f; text-align: left; padding: none;"></p>
                            <button class="submit" type = "submit" id = "mybutton">Send Message</button> 
                      </form>   
                  </div>
             </div>
           </div>
         </section>
         <script src = "jquery-3.4.1.min.js"></script>
	 	     <script src = "validatecontact_us.js"></script>
	 </body>
<html>