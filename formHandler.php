<?php

      $message_sent = false;
      if(isset($_POST['email']) && $_POST['email'] != ''){

        if(filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){

             //submit the form
           $userName = $_POST['name'];
           $userEmail = $_POST['email'];
           $messageSubject = $_POST['subject'];
           $message = $_POST['message'];

           $to = "bryanwaffy@gmail.com";
           $body = "";

           $body .= "From: ".$userName. "\r\n";
           $body .= "Email: ".$userEmail. "\r\n";
           $body .= "Message: ".$message. "\r\n";
     
           mail($to,$messageSubject,$body);

           $message_sent = true;


        }
      
          
      }
      <?php
      if($message_sent):
      ?>
      <h3>Thanks, I'll be in touch.</h3>
      
      <?php
      else:
      ?>
      <?php
      endif;
      ?>

?>
