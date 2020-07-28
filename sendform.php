<?php
	if(isset($_POST['submit'])) {

		$name = $_POST['name'];
		$email = $_POST['email'];
		$message = $_POST['message'];

		$to = "alexrasla@ucsb.edu";
		$subject = "Mail from Website";
		$headers = "From: ".$email;
		// $txt = ""


		mail($to, $subject, $message, $headers);
		header("Location: index.html?mailsend");
		// {
		// 	echo "<script> alert('Mail sent'); </script> ";
		// }
	}
?>