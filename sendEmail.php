
<?php

 session_start();


 require_once 'phpmailer/PHPMailerAutoload.php';
 require_once 'getResultMatch.php';
 #echo "anyone here?";

 $name = $_POST['name'];
 $email = $_POST['email'];
 $id = $_POST['id'];


 $gender = $_POST['gender'];

 $match = getResult($gender,$id);

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
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Bio</th>
      <th scope="col">Match Rating</th>
    </tr>
  </thead>
  <tbody>
  ';

     foreach ($match as $v1) {
        $m->Body .=  '<tr>';
        $index = 0;
         foreach ($v1 as $v2) {
            if($index == 3){
              $m->Body .= "<td>";
              $m->Body .= " &nbsp; " . $v2 . "0% &nbsp; ";
              $m->Body .= "</td>";
            }
            else{
              $m->Body .= "<td>";
              $m->Body .= " &nbsp; " . $v2 . " &nbsp; ";
              $m->Body .= "</td>";
            }
            $index++;
         }
          $m->Body .= "<br><br>";
          $m->Body .=  '</tr>';
     }

$m->Body .=   '
  </tbody>
</table>

Love, <br><br>

The Bison Match Team
';

$m->FromName = 'BisonMatch';
$email = substr($email,0, -1);
$m->AddAddress($email,$name);

$m->send();

 ?>
 <html>
<head>
<meta http-equiv="refresh" content="0;url=adminPanel.php" />
</head>
</html>
