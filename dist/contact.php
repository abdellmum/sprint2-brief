<?php
  
  if($_POST) {
      $visitor_name = "";
      $visitor_email = "";
      $email_title = "";
      $concerned_department = "";
      $visitor_message = "";
      $email_body = "<div>";
     
      if(isset($_POST['visitor_name'])) {
          $visitor_name = filter_var($_POST['visitor_name'], FILTER_SANITIZE_STRING);
          $email_body .= "<div>
                             <label><b>Visitor Name:</b></label>&nbsp;<span>".$visitor_name."</span>
                          </div>";
      }
   
      if(isset($_POST['visitor_email'])) {
          $visitor_email = str_replace(array("\r", "\n", "%0a", "%0d"), '', $_POST['visitor_email']);
          $visitor_email = filter_var($visitor_email, FILTER_VALIDATE_EMAIL);
          $email_body .= "<div>
                             <label><b>Visitor Email:</b></label>&nbsp;<span>".$visitor_email."</span>
                          </div>";
      }
        
      if(isset($_POST['email_title'])) {
          $email_title = filter_var($_POST['email_title'], FILTER_SANITIZE_STRING);
          $email_body .= "<div>
                             <label><b>Reason For Contacting Us:</b></label>&nbsp;<span>".$email_title."</span>
                          </div>";
      }
        
      if(isset($_POST['concerned_department'])) {
          $concerned_department = filter_var($_POST['concerned_department'], FILTER_SANITIZE_STRING);
          $email_body .= "<div>
                             <label><b>Concerned Department:</b></label>&nbsp;<span>".$concerned_department."</span>
                          </div>";
      }
        
      if(isset($_POST['visitor_message'])) {
          $visitor_message = htmlspecialchars($_POST['visitor_message']);
          $email_body .= "<div>
                             <label><b>Visitor Message:</b></label>
                             <div>".$visitor_message."</div>
                          </div>";
      }
        
      if($concerned_department == "billing") {
          $recipient = "karimovich75g@gmail.com";
      }
      else if($concerned_department == "marketing") {
          $recipient = "karimovich75@gmail.com";
      }
      else if($concerned_department == "technical support") {
          $recipient = "tech.support@domain.com";
      }
      else {
          $recipient = "karimovich75@gmail.com";
      }
        
      $email_body .= "</div>";
   
      $headers  = 'MIME-Version: 1.0' . "\r\n"
      .'Content-type: text/html; charset=utf-8' . "\r\n"
      .'From: ' . $visitor_email . "\r\n";
        
      if(mail($recipient, $email_title, $email_body, $headers)) {
          echo "<p>Thank you for contacting us, $visitor_name. You will get a reply within 24 hours.</p>";
      } else {
          echo '<p>We are sorry but the email did not go through.</p>';
      }
        
  } else {
      echo '<p>Something went wrong</p>';
  }
  ini_set('SMTP', "server.com");
  ini_set('smtp_port', "25");
  ini_set('sendmail_from', "karimovich75@gmail.com");
  ?>
 
 
 
 
 
 
 
 
 
 
 
 <?php
 include_once "../include/header.php";
 ?>
     <form action="contact.php" method="post">
      <div class="elem-group">
        <label for="name">Your Name</label>
        <input type="text" id="name" name="visitor_name" placeholder="John Doe" pattern=[A-Z\sa-z]{3,20} required>
      </div>
      <div class="elem-group">
        <label for="email">Your E-mail</label>
        <input type="email" id="email" name="visitor_email" placeholder="john.doe@email.com" required>
      </div>
      <div class="elem-group">
        <label for="title">Reason For Contacting Us</label>
        <input type="text" id="title" name="email_title" required placeholder="Unable to Reset my Password" pattern=[A-Za-z0-9\s]{8,60}>
      </div>
      <div class="elem-group">
        <label for="message">Write your message</label>
        <textarea id="message" name="visitor_message" placeholder="Say whatever you want." required></textarea>
      </div>
      <button type="submit">Send Message</button>
    </form>









<?php
  include_once "../include/footer.php";
  ?>