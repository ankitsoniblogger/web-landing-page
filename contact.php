<?php
if (isset($_POST['submit'])) {
  $to = "ankitsoniblogger@gmail.com"; // this is your Email address

  $name = $_POST['name'];
  $contact = $_POST['contact'];
  $email = $_POST['email'];
  $choice = $_POST['option'];

  $subject = "Cygnet Technology Landing Page";
  $message = "======Enquiry======== \r\n
    Name: $name  \r\n
    Contact: $contact \r\n
    Email: $email \r\n
    Choice: $choice \r\n
   
    ===========";

  mail($to, $subject, $message);


  header('Location: /');
}
