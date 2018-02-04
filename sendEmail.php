<?php

 session_start();

 require_once 'phpmailer/PHPMailerAutoload.php';
 require_once './getResultMatch.php';

 $name = $_POST['name'];
 $email = $_POST['email'];
 $LNo = $_POST['id'];
 $gender = $_POST['gender'];

$results = getResult($gender, $LNo);

#echo   $name;
#echo  $email;
#echo   $LNo;
$m = new PHPMailer;
$m->isSMTP();
$m->SMTPAuth = true;
$m->Host = 'smtp.gmail.com';
$m->Username = 'reyes.madelyn.mr@gmail.com';
$m->Password = 'were2345';
$m->SMTPSecure = 'ssl';
$m->Port = 465;

$m->isHTML();
$m->Subject = 'BisonMatch Results';
$m->Body = 'Dear ' . $name . ', ';

$m->FromName = 'BisonMatch';

$m->AddAddress($email,$name);

$m->send()
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
