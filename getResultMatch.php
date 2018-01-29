<?php

//$db = mysqli_connect("localhost", "bisonConnect", "bison1", "BisonMatch");

function getResult($gender, $id){

  $db = mysqli_connect("localhost", "root", "toor", "BisonMatch");

  $query = "SELECT * FROM LUStudent WHERE `LNumber` = '$id'";
  $person = mysqli_query($db, $query);
  $row = mysqli_fetch_assoc($person);
  //get recipients answers
  $personAns = array($row['Ans1'], $row['Ans2'], $row['Ans3'], $row['Ans4'], $row['Ans5'], $row['Ans6'], $row['Ans7'], $row['Ans8'], $row['Ans9'], $row['Ans10']);


  //get all opposite gender people
  $query = "SELECT * FROM LUStudent WHERE `Gender` != '".$gender."'";
  $result = mysqli_query($db, $query);

  //array to hold points of all possible people
  $points = array();

  $index = 0;
  for($a = 0; $a < mysqli_num_rows($result); $a++){
    $row = mysqli_fetch_assoc($result);
    echo "Checking through new potential match #".$a."<br >";
    array_push($points, 0);
    for($i = 1; $i <= 10; $i++){
      if($i == 0){
        if($personAns[0] == $row['Ans1'] || ($personAns[0] == 1 && $row['Ans1'] == 4)){
          $points[$index]++;
        }
      }
      if($i == 0//change out for other questions with stupid coresponding answers){

      }
      else{
        if($personAns[$i] == $row[$i]){
          $points[index]++;
        }
      }
    }
    $index++;
  }
  var_dump($points);
  $matches = array();
  //return [][]
}

function main(){
    getResult("Male", "L443");
}

main();
?>
