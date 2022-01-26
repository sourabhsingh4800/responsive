<?php
$name=$_POST['name'];
$visitor_email=$_POST['email'];
$subj ==$_POST['subject'];
$message=$_POST['message'];
$email_form="sourabhsingh4800@gmail.com";
$email_subject="New Form Submission";
$email_body="USER NAME: $name.\n".
              "USER EMAIL: $visitor_email.\n".
              "SUBJECT: $subject.\n".
              "USER MESSAGE:$message .\n";
$to ="sourabhsingh4800@gmail.com";
$header ="From: $email_form \r\n";
$header .="Reply-To: $visitor_email \r\n";
mail($to,$email_subject,$email_body,$header);
header("LOCATION: Contact.htm");
?>
