<?php
  $name = $_POST['name'];
  $visitor_email = $_POST['email'];
  $message = $_POST['message'];
?>


<?php
	$email_from = $visitor_email;

	$email_subject = "New Form submission";

	$email_body = "You have received a new message from the user $name.\n".
                            "Here is the message:\n $message".
?>

