
<?php

 session_start();

 require_once 'phpmailer/PHPMailerAutoload.php';
 require_once './getResultMatch.php';
 #echo "anyone here?";

 $name = $_POST['name'];
 $email = $_POST['email'];
 $LNo = $_POST['id'];
 $gender = $_POST['gender'];

$test = getResult($gender,$LNo);

#echo   $name;
#echo  $email;
#echo   $LNo;
$m = new PHPMailer;
$m->isSMTP();
#$m->SMTPDebug  = 2;
$m->SMTPAuth = true;
$m->Host = 'smtp.gmail.com';
$m->Username = 'bisonmatch2.0@gmail.com';
$m->Password = 'Bison51#';
$m->SMTPSecure = 'ssl';
$m->Port = 465;

$m->isHTML();
$m->Subject = 'BisonMatch Results';
$m->Body = 'Dear ' . $name . ',<br><br>

 You&apos;ve taken the quiz. You&apos;ve paid your two dollars. Now, comes the actual part of
asking one of these people out. Don&apos;t panic. You can do this. Just stalk them on social media. Or let&apos;s hope
that they wrote something actually useful in their bio. <br><br>

<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Bio</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>
<br>
Love, <br><br>

The Bison Match Team
';

$m->FromName = 'BisonMatch';
$email = substr($email,0, -1);
$m->AddAddress($email,$name);

$m->send()
  #header('Location: /adminPanel.php');
  #echo "won";
  #die();
 ?>

 <!-- <html>
<head>
<meta http-equiv="refresh" content="0;url=adminPanel.php" />
</head>
</html> -->
