

<?php
/*
 $name = $_post['name'];
  $mail = $_post['email'];
 $name = $_post['message'];

 
 $emil_from="https://keyprojects.github.io/";
 $email_subject ="Message from my site"
 $email_body= "Name : $name\n".
				"Email : $mail\n".
				"Message: $message\n";
				
			$to: "pavandpanchal@gmail.com";
			$headers = "from: $email_from \r\n";
			$headers = "reply-to: $mail \r\n";
			mail($to, $email_subject , $email_body, $headers );

			header("Location : index.html");
			
			*/


<?php
if(!empty($_POST["send"])) {
	$name = $_POST["name"];
	$email = $_POST["email"];
	$message = $_POST["message"];

	$toEmail = "pavandpanchal@gmail.com";
	$mailHeaders = "From: " . $name . "<". $email .">\r\n";
	if(mail($toEmail, $message, $mailHeaders)) {
	    $message = "Your contact information is received successfully.";
	    $type = "success";
	}
}
require_once "reachus.php";
?>

			
			
			

 ?>

