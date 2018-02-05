<?php


function getResult($gender, $id){

  $db = mysqli_connect("68.178.217.6", "bisonmatch", "Bison51#", "bisonmatch");

  $query = "SELECT * FROM LUStudent WHERE `LNumber` = '$id'";
  $person = mysqli_query($db, $query);
  $row = mysqli_fetch_assoc($person);
  //get recipients answers
  $personAns = array($row['Ans1'], $row['Ans2'], $row['Ans3'], $row['Ans4'], $row['Ans5'], $row['Ans6'], $row['Ans7'], $row['Ans8'], $row['Ans9'], $row['Ans10']);
  var_dump($personAns);

  //get all opposite gender people
  $query = "SELECT `Ans1`, `Ans2`, `Ans3`, `Ans4`, `Ans5`, `Ans6`, `Ans7`, `Ans8`, `Ans9`, `Ans10` FROM LUStudent WHERE `Gender` != '".$gender."'";
  $result = mysqli_query($db, $query);

  //array to hold points of all possible people
  $points = array();

  $index = 0;
  for($a = 0; $a < mysqli_num_rows($result); $a++){
    $row = mysqli_fetch_row($result);
    echo "Checking through new potential match #".$a."<br >";
    var_dump($row);
    array_push($points, 0);
    for($i = 1; $i <= 10; $i++){
      echo "iteration: ".$i." - ".$personAns[$i-1]." with ".$row[$i-1]."<br>";

      if($i == 2){ //match 1&&2 2&&3 3&&4
        if(($personAns[1] == 2 && $row[1] == 1) || ($personAns[1] == 2 && $row[1] == 3) || ($personAns[1] == 3 && $row[1] == 4) || ($personAns[1] == $row[1])){
          $points[$index]++;
          echo "Matched on question 2<br>";
        }
      }
      elseif($i == 3){  //match 1&&3 2&&4
        if(($personAns[2] == 1 && $row[2] == 3) || ($personAns[2] == 2 && $row[2] == 4) || ($personAns[2] == $row[2])){
          $points[$index]++;
          echo "Matched on question 3<br>";
        }
      }
      elseif($i == 9){  //match 1&&3 2&&4
        if(($personAns[8] == 1 && $row[8] == 3) || ($personAns[8] == 2 && $row[8] == 4) || ($personAns[8] == $row[8])){
          $points[$index]++;
          echo "Matched on question 9<br>";
        }
      }
      elseif($i == 10){  //match 1&&3 2&&4
        if(($personAns[9] == 1 && $row[9] == 3) || ($personAns[9] == 2 && $row[9] == 4) || ($personAns[9] == $row[9])){
          $points[$index]++;
          echo "Matched on question 10<br>";
        }
      }
      else{
        if($personAns[$i-1] == $row[$i-1]){
          $points[$index]++;
          echo "Matched on question ".($i-1)."<br>";
        }
      }
    }
    //increment index after looping through all question for one person
    $index++;
  }
  var_dump($points);
  $matches = array();
  //return [][]
  return 0;
}

// function main(){
//     getResult("Male", "L443");
//
// }
// main();
?>
