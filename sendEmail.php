<!DOCTYPE html>

<html>
<p> Hello ? </p>
</html>

<?php

 #session_start();

 require_once 'phpmailer/PHPMailerAutoload.php';
 echo "anyone here?"

 $result = $_POST['button_pressed'];

 result = explode("-",$result);
//
// $email = $result[0];
// $name = $result[1];
// $L = $result[2];
// echo "email" . $email;
// //
// $m = new PHPMailer;
// $m->isSMTP();
// $m->SMTPAuth = true;
// $m->Host = 'smtp.gmail.com';
// $m->Username = 'reyes.madelyn.mr@gmail.com';
// $m->Password = 'were2345';
// $m->SMTPSecure = 'ssl';
// $m->Port = 465;
//
// $m->isHTML();
// $m->Subject = 'BisonMatch Results';
// $m->Body = 'From: ' . $name . ' ('. $email . ')<p>' . $L . '</p>';
//
// $m->FromName = 'BisonMatch Sent';
//
// $m->AddAddress('reyes.madelyn.mr@gmail.com','Madelyn Reyes');
//
// $location = "index.php"
// echo "Did you work?";
// if($m->send()){
//   header('Location: $location');
//   die();
// }
 ?>
