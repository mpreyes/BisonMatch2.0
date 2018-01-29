<?php

 session_start();

 require_once 'phpmailer/PHPMailerAutoload.php';
 require_once './getResultMatch.php';
 #echo "anyone here?";

 $name = $_POST['name'];
 $email = $_POST['email'];
 $LNo = $_POST['id'];
 $gender = $_POST['gender'];

echo getResult($gender, $LNo);

#echo   $name;
#echo  $email;
#echo   $LNo;
echo $gender;

$mail = new PHPMailer(); // create a new object
$mail->IsSMTP(); // enable SMTP
$mail->SMTPDebug = 1; // debugging: 1 = errors and messages, 2 = messages only
$mail->SMTPAuth = true; // authentication enabled
$mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for Gmail
$mail->Host = "smtp.gmail.com";
$mail->Port = 465; // or 587
//Username to use for SMTP authentication - use full email address for gmail
$mail->Username = "noah.rutledge@gmail.com";
//Password to use for SMTP authentication
$mail->Password = "nrr08311998";

// $m = new PHPMailer;
// $m->isSMTP();
// $m->SMTPDebug = 2;
// $m->SMTPAuth = true;
// $m->Host = 'smtp.gmail.com';
// $m->Username = 'reyes.madelyn.mr@gmail.com';
// $m->Password = 'were2345';
// $m->SMTPSecure = "tls";
// $m->Port = 587;

$mail->isHTML();
$mail->Subject = 'BisonMatch Results';
$mail->Body = 'Dear, ' . $name . ' ';

$mail->FromName = 'BisonMatch';

$mail->AddAddress('nrrutledge@mail.lipscomb.edu',$name);

$mail->send()
  #header('Location: /adminPanel.php');
  #echo "won";
  #die();
 ?>
<!--
<html>
<head>
<meta http-equiv="refresh" content="0;url=./adminPanel.php" />
</head>
</html>
-->
