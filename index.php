<?php
    //cc-by maarten eyskens
    //start editing the settings here
    $to = "info@srcsync.com"; //your email here
    $subject = "New Inquiry"; //the subject here
    //stop editing here
    
    function secure($string = ''){
        return stripslashes(trim(htmlspecialchars($string)));
        }
    if (isset($_POST['name'])){
    if (empty($_POST['name'])){
    echo 'enter your name';
   
    }
    if (empty($_POST['email'])){
    echo 'enter your email';
   
    }
    if (empty($_POST['message'])){
     echo 'enter your message';
     
    }
    $name=secure($_POST['name']);
    $email=secure($_POST['email']);
    $message=secure($_POST['message']);
    
       $subject = "Contact";
        $body = "Name: $name Email: $email Message: $message";
 if (mail($to, $subject, $body)) {
   echo("<p>Message successfully sent!</p>");
  } else {
   echo("<p>Message delivery failed...</p>");
  }
    }
        
?>