
<?php


$servername = "68.178.217.6";
$username = "bisonmatch";
$password = "Bison51#";
$databasename = "bisonmatch";

$conn = new mysqli($servername, $username, $password,$databasename);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$studentName = $_POST['Name'];
$studentLNo = $_POST['L#'];
$studentEmail = $_POST['Email'];
$studentGender = $_POST['Gender'];
$studentBio = $_POST['Bio'];
$ans1 = $_POST['answer1'];
$ans2 = $_POST['answer2'];
$ans3 = $_POST['answer3'];
$ans4 = $_POST['answer4'];
$ans5 = $_POST['answer5'];
$ans6 = $_POST['answer6'];
$ans7 = $_POST['answer7'];
$ans8 = $_POST['answer8'];
$ans9 = $_POST['answer9'];
$ans10 = $_POST['answer10'];


// $query = "SELECT * FROM `administrator`";
if($studentName != ""){
$query = "INSERT INTO LUStudent (Name, LNumber, EmailAddress, Gender, Bio, Ans1, Ans2, Ans3, Ans4, Ans5, Ans6, Ans7, Ans8, Ans9, Ans10) VALUES ('$studentName', '$studentLNo', '$studentEmail', '$studentGender', '$studentBio', '$ans1','$ans2','$ans3','$ans4','$ans5','$ans6','$ans7','$ans8','$ans9','$ans10')";

$result = mysqli_query($conn, $query);
}
//Testing
// if($result){
//   echo "Inserted student successfully";
//
// }
// else{
//     echo "Error: <br>" . $conn->error;
// }
 // mysql_query($query);



$conn->close();
?>


<html>
<head>
<meta http-equiv="refresh" content="0;url=results.php" />
</head>
</html>
