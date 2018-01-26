<!DOCTYPE html>

<html>
<p> Hello ? </p>
</html>

<?php

 session_start();

 require_once 'phpmailer/PHPMailerAutoload.php';
 echo "anyone here?";

 $name = $_POST['name'];
 $email = $_POST['email'];
 $LNo = $_POST['id'];

echo   $name;
echo  $email;
echo   $LNo;

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
$m->Body = 'Dear, ' . $name . ' ';

$m->FromName = 'BisonMatch';

$m->AddAddress('nrrutledge@mail.lipscomb.edu',$name);

$location = "index.php";
echo "Did you work?";
if($m->send()){
  header('Location: adminPanel.php');
  echo "won";
  die();
}
 ?>
