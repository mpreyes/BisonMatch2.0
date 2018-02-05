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
  $query = "SELECT `Ans1`, `Ans2`, `Ans3`, `Ans4`, `Ans5`, `Ans6`, `Ans7`, `Ans8`, `Ans9`, `Ans10`, `Name`, `EmailAddress`, `Bio` FROM LUStudent WHERE `Gender` != '".$gender."'";
  $result = mysqli_query($db, $query);

  //create matches array that holds the name, email, and bio of all people who have 7 points or higher
  $matches = array();
  for($a = 0; $a < mysqli_num_rows($result); $a++){
    //points that hold how many matching questions
    $points = 0;
    //get the row
    $row = mysqli_fetch_row($result);

    //loop through all ten questions
    for($i = 1; $i <= 10; $i++){
      if($i == 2){ //match 1&&2 2&&3 3&&4
        if(($personAns[1] == 2 && $row[1] == 1) || ($personAns[1] == 2 && $row[1] == 3) || ($personAns[1] == 3 && $row[1] == 4) || ($personAns[1] == $row[1])){
          $points++;
        }
      }
      elseif($i == 3){  //match 1&&3 2&&4
        if(($personAns[2] == 1 && $row[2] == 3) || ($personAns[2] == 2 && $row[2] == 4) || ($personAns[2] == $row[2])){
          $points++;
        }
      }
      elseif($i == 9){  //match 1&&3 2&&4
        if(($personAns[8] == 1 && $row[8] == 3) || ($personAns[8] == 2 && $row[8] == 4) || ($personAns[8] == $row[8])){
          $points++;
        }
      }
      elseif($i == 10){  //match 1&&3 2&&4
        if(($personAns[9] == 1 && $row[9] == 3) || ($personAns[9] == 2 && $row[9] == 4) || ($personAns[9] == $row[9])){
          $points++;
        }
      }
      else{ //match with each other
        if($personAns[$i-1] == $row[$i-1]){
          $points++;
        }
      }
    }
    //if the points is >= 7 put in info along with points
    if($points >= 7){
      $match = array($row[10], $row[11], $row[12], $points);
      array_push($matches, $match);
    }
  }

  //Order the matches from greatest amount to least through bubble sort
  for($i = 0; $i < count($matches); $i++){
    for($j = $i; $j < count($matches)-1; $j++){
      if($matches[$j][3] < $matches[$j+1][3]){
        $holder = $matches[$j+1];
        $matches[$j+1] = $matches[$j];
        $matches[$j] = $holder;
      }
    }
  }
<<<<<<< HEAD
  var_dump($points);
  $matches = array();
  //return [][]
  return 0;
}

// function main(){
//     getResult("Male", "L443");
//
// }
=======

  //pull top five results
  $tmp = array();
  for($i = 0; $i < 5; $i++){
    array_push($tmp, $matches[$i]);
  }
  $matches = $tmp;
  return $matches;
}

// function main(){
//     $test = getResult("Male", "L443");
//     var_dump($test);
// }
//
>>>>>>> c7e501c16683a7e9ebc590a40838ec60b4d17997
// main();
?>
