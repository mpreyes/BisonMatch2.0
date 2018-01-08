

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
let hitNext = false;
let hitBack = false;
let finishedQuiz = false;

let AnsArr = [];
let questionArr = [];
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


document.getElementById("qNo").innerHTML = "Question " + questionArr[i].quizNo +"/10";
document.getElementById("qQ").innerHTML =  questionArr[i].quizQ;
document.getElementById("a1").innerHTML = questionArr[i].option1;
document.getElementById("a2").innerHTML = questionArr[i].option2;
document.getElementById("a3").innerHTML = questionArr[i].option3;
document.getElementById("a4").innerHTML = questionArr[i].option4;

let radQuestions = document.getElementsByName("quizAns");

console.log("len " + radQuestions.length);

function nextQ(){
hitNext = true;
  console.log("user hit next" + i);
  if(i < 9){
    i++;
  document.getElementById("qNo").innerHTML = "Question " + questionArr[i].quizNo +"/10";
  document.getElementById("qQ").innerHTML =  questionArr[i].quizQ;
  document.getElementById("a1").innerHTML = questionArr[i].option1;
  document.getElementById("a2").innerHTML = questionArr[i].option2;
  document.getElementById("a3").innerHTML = questionArr[i].option3;
  document.getElementById("a4").innerHTML = questionArr[i].option4;
}
for(let j =0; j < radQuestions.length;j++ ){
 if(radQuestions[j].checked){
   AnsArr.push(radQuestions[j].value);
 }
}

console.log("array " + AnsArr.toString());

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

console.log("quizNo" + questionArr[0].quizNo);
if(i == 9){
  alert("Woo finished quiz!");
}

    // document.getElementById("qNo").innerHTML = "Question " + questionArr[i].quizNo +"/10";
    // document.getElementById("qQ").innerHTML =  questionArr[i].quizQ;
    // document.getElementById("a1").innerHTML = questionArr[i].option1;
    // document.getElementById("a2").innerHTML = questionArr[i].option2;
    // document.getElementById("a3").innerHTML = questionArr[i].option3;
    // document.getElementById("a4").innerHTML = questionArr[i].option4;
