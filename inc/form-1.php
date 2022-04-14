<!DOCTYPE html>
<html>
  <body>
    
  <?php

      if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $first_name = $_REQUEST["first-name"];
        $last_name = $_REQUEST["last-name"];
        $email = $_REQUEST["email"];
        $phone = $_REQUEST["phone"];
        $text = $_REQUEST["text"];
        $to_email = "shlooby07@gmail.com";
        $subject = "New Employment Form Message";
        $contactus = "
        You have a message from the Employment Form on your website:
        Name: ".$first_name." ".$last_name."
        Email: ".$email."
        Phone: ".$phone."
        Position description: ".$text;
        $contactus  = wordwrap($contactus ,70);

        $mail = mail($to_email,$subject,$contactus);
        if (!$mail) {
          $res = print_r(error_get_last()['message']);
        } else {
          $res = "Thanks, sent to &#128231;";
        }
        
      }

  ?>

  <?php echo $res; ?>  

  </body>
</html>