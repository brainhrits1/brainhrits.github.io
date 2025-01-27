<?php

/**
 * @author Boomer
 * @copyright 2018
 */
if($_SERVER["REQUEST_METHOD"] == "POST"){
   
   
   
 


/******************My Posted Details******************/
  
   $fname = $_POST['getfname'];
   $lname = $_POST['getlname'];
   $phone = $_POST['getphone'];
   $email = $_POST['getemail'];
   $message = $_POST['getmessage'];
   $subject ="You have got a message from $fname";
  $details ="Firstname:$fname";
  $details .="Lastname:$lname";
  $details .="Phone :$phone";
  $details .="Email: $email";
  $details .="Message:$message";
  
  
 

// Set the recipient email address.
        // FIXME: Update this to your desired email address.
        $to = "abida.ismail1@gmail.com";
        
         $headers = "From:". $email;
         
         
      

$send = mail($to,$subject,$details,$headers);

/******************My Posted Details******************/



  




        
       
      

   
	

  if ( $send) {
  // Set a 200 (okay) response code.
            http_response_code(200);
            echo "Thank You! Your message has been sent.";
        } else {
            // Set a 500 (internal server error) response code.
            http_response_code(500);
            echo "Oops! Something went wrong and we couldn't send your message.";
        }


     
}
else
{
 
        // Not a POST request, set a 403 (forbidden) response code.
        http_response_code(403);
        echo "There was a problem with your submission, please try again.";
    
}


?>