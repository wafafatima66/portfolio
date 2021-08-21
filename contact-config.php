<?php


if (!empty($_POST)) {
   $name = $_POST['name'];
   $from = $_POST['email'];
   $message = $_POST['message'];
   $to = "wafafatima66@gmail.com";
   $subject = "Message - Portfolio from ".$name;
   $headers = "From:" . $from;
  
//    if (empty($name)) {
//        $errors[] = 'Name is empty';
//    }

//    if (empty($email)) {
//        $errors[] = 'Email is empty';
//    } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
//        $errors[] = 'Email is invalid';
//    }

//    if (empty($message)) {
//        $errors[] = 'Message is empty';
//    }

   /*  $from = "wfatima203@gmail.com";
    $to = "wafafatima66@gmail.com";
    $subject = "Checking PHP mail";
    $message = "PHP mail works just fine";
    $headers = "From:" . $from;
  */


    if(mail($to,$subject,$message, $headers)) {
        header("Location: index.php?message=sent");
		
    } else {
    	header("Location: index.php?message=notsent");
    }

   
} 

