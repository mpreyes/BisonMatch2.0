<?php

$to = "adtecdanj@yahoo.com";
$subject = $_POST['subject'];
$message = $_POST['message'];
$from = "dpjohnson@mail.lipscomb.edu";
$headers = "this message is from: + $from";

mail($to, $subject, $message, $from, $headers);

echo "Your email has been sent.";


?>


<!DOCTYPE HTML>
<html>
	<head>
	<title>Mail Test</title>
	</head>

	<body>
	<div id="form">
	<form method="post" name="form1" action="mail.php">
	<label for="subject"> Subject: </label>
	<input type="text" name="subject" id="subject">
	<br>
	<label for="message"> Message: </label>
	<input type="text" name="message" id="message">
	<br>
	<input type="submit" value="email">
	</form>
	</body>
</html>