

class quizQuestion {

  constructor(quizNo, quizQ, quizImg, option1, option2, option3, option4){

    this.quizNo = quizNo;
    this.quizQ = quizQ;
    this.quizImg = quizImg;
    this.option1 = option1;
    this.option2 = option2;
    this.option3 = option3;
    this.option4 = option4;

  }
}

// <!-- <div class="custom-control custom-radio">
//   <input type="radio" id="ans1" name="k" value="1" class="custom-control-input">
//   <label class="custom-control-label" for="ans1" id="a1"></label>
// </div> -->
// <div class="custom-control custom-radio"> <input type="radio" class="custom-control-input" id="customControlValidation2" name="radio-stacked" required>
//     <label class="custom-control-label" for="customControlValidation2">Toggle this custom radio</label>
//   </div>


function createRadio(id,name,value,textAnswer){
  return  '<div class="custom-control custom-radio mb-3"> <input type="radio" class="custom-control-input" id="' +
  id + '" value= "' + value + '" name="' + name +
  '"><label class="custom-control-label" for="' +
  id + '">' + textAnswer + '</label></div>';


}

let hitNext = false;
let hitBack = false;
let finishedQuiz = false;
let AnsArr = [];
let questionArr = [];
 i = 0;
 let k = 0;
 let j =0;
 let d = 0;
let question1 = new quizQuestion(1,"Your friend is throwing a party at his house. You arrive:","img","A full hour early. I'm helping him set up.","15 minutes early. I'm punctual.","15 minutes late. Who gets to a party on time anyways?","An hour late. I like making an entrance.");
let question2 = new quizQuestion(2,"Question","img","opt1","opt2","opt3","opt4");
let question3 = new quizQuestion(3,"Question","img","opt1","opt2","opt3","opt4");
let question4 = new quizQuestion(4,"Question","img","opt1","opt2","opt3","opt4");
let question5 = new quizQuestion(5,"Question","img","opt1","opt2","opt3","opt4");
let question6 = new quizQuestion(6,"Question","img","opt1","opt2","opt3","opt4");
let question7 = new quizQuestion(7,"Question","img","opt1","opt2","opt3","opt4");
let question8 = new quizQuestion(8,"Question","img","opt1","opt2","opt3","opt4");
let question9 = new quizQuestion(9,"Question","img","opt1","opt2","opt3","opt4");
let question10 = new quizQuestion(10,"Question","img","last1","last2","last3","last4");

questionArr.push(question1);
questionArr.push(question2);
questionArr.push(question3);
questionArr.push(question4);
questionArr.push(question5);
questionArr.push(question6);
questionArr.push(question7);
questionArr.push(question8);
questionArr.push(question9);
questionArr.push(question10);


// document.getElementById("test").innerHTML = `<input type="radio" id="ans1" name="k" value="1" class="custom-control-input">
//   <label class="custom-control-label" for="ans1" id="a1">`+ questionArr[i].option1 + " </label>";

//radioId,name,value,ansId,textAnswer
//function createRadio(id,name,value,textAnswer){
let f1 = "f1";
let f2 = "f2";
let f3 = "f3";
let f4 = "f4";

// document.getElementById("q1").style.display = "none";
document.getElementById("q2").style.display = "none";

document.getElementById("qNo").innerHTML = "Question " + questionArr[i].quizNo +"/10";
document.getElementById("qQ").innerHTML =  questionArr[i].quizQ;
// document.getElementById("field1").innerHTML = createRadio(f1,k,1,questionArr[i].option1);
// document.getElementById("field2").innerHTML = createRadio(f2,k,2,questionArr[i].option2);
// document.getElementById("field3").innerHTML = createRadio(f3,k,3,questionArr[i].option3);
// document.getElementById("field4").innerHTML = createRadio(f4,k,4,questionArr[i].option4);
  // document.getElementById("test2").innerHTML = createRadio(q2,2,ans2,questionArr[i].option2);
// document.getElementById("a1").innerHTML = questionArr[i].option1;
// document.getElementById("a2").innerHTML = questionArr[i].option2;
// document.getElementById("a3").innerHTML = questionArr[i].option3;
// document.getElementById("a4").innerHTML = questionArr[i].option4;

let radQuestions = document.getElementsByName("quizAns");

console.log("len " + radQuestions.length);



function nextQ(){
  if(k == 10){
    //hide next and back buttons
    //display submit button
    console.log("finished quiz");
  }
  else if(k < 10){
      k++;
    addQuestion();
  }

    if(i < 9){
          console.log("next Question" + i);
    i++;
  document.getElementById("qNo").innerHTML = "Question " + questionArr[i].quizNo +"/10";
  document.getElementById("qQ").innerHTML =  questionArr[i].quizQ;
  document.getElementById("test").innerHTML = createRadio(ans1,1,a1,questionArr[i].quizQ);
  // document.getElementById("test2").innerHTML = createRadio(ans2,2,a2,questionArr[i].quizQ);
  // document.getElementById("a1").innerHTML = questionArr[i].option1;
  // document.getElementById("a2").innerHTML = questionArr[i].option2;
  document.getElementById("a3").innerHTML = questionArr[i].option3;
  document.getElementById("a4").innerHTML = questionArr[i].option4;

}

}


function addQuestion(){
  console.log("ans arr len" +AnsArr.length);

  for(let j =0; j < radQuestions.length;j++ ){
   if(radQuestions[j].checked){
     AnsArr.push(radQuestions[j].value);
   }
 }
   console.log("forward array " +  AnsArr.toString());
}


function backQ(){

hitBack = true;
  console.log("user hit back" + i);
  if(i > 0 ){
      i--;
  document.getElementById("qNo").innerHTML = "Question " + questionArr[i].quizNo +"/10";
  document.getElementById("qQ").innerHTML =  questionArr[i].quizQ;
  document.getElementById("a1").innerHTML = questionArr[i].option1;
  document.getElementById("a2").innerHTML = questionArr[i].option2;
  document.getElementById("a3").innerHTML = questionArr[i].option3;
  document.getElementById("a4").innerHTML = questionArr[i].option4;
}
 AnsArr.pop();
}




// console.log("quizNo" + questionArr[0].quizNo);

    // document.getElementById("qNo").innerHTML = "Question " + questionArr[i].quizNo +"/10";
    // document.getElementById("qQ").innerHTML =  questionArr[i].quizQ;
    // document.getElementById("a1").innerHTML = questionArr[i].option1;
    // document.getElementById("a2").innerHTML = questionArr[i].option2;
    // document.getElementById("a3").innerHTML = questionArr[i].option3;
    // document.getElementById("a4").innerHTML = questionArr[i].option4;
