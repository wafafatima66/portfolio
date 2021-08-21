<?php  if(isset($_GET['message'])){
 
 if(isset($_GET['message'])=='sent'){
  echo '<script>alert("Message Sent Successfully")</script>';
 } else {
  echo '<script>alert("Message was not sent . Try Again ! ")</script>';
 }
 

} ?>