
// function submitForm(x){
//   console.log("Form submitted");
//   document.getElementById('pls').style.display = "none";
//
// }
//
//
// function Next(){
//   let i = 0;
//   for(i; i < 9; i++){
//     console.log("question: " + i);
//   //document.getElementById('frm').style.display = "none";
//   document.getElementById(i).style.display = "none";
// }
//
// }

let questionArr = [];

question1 = new quizQuestion(1, "Hello", "img","opt1", "opt2","opt3","opt4");
questionArr.push(question1);
console.log(questionArr[0].option1);

let i = 0;



let radQuestions = document.getElementsByName("answer1");

function previousQuestion(){
 if(i > 0){
     i--;
   }
 console.log("question: "+ i);
}

function nextQuestion(){
//questionArr.push(x);
for(let j =0; j < radQuestions.length;j++ ){
 if(radQuestions[j].checked){
   questionArr.push(radQuestions[j].value);
 }
}
console.log(questionArr.toString());
if(i < 9){
 i++;
}
console.log("question: "+ i);

}


document.getElementById('back').onclick = function(){
  i--;
  console.log("user clicked back");
  document.getElementById("qNo").innerHTML = "Question " + questionArr[i].quizNo +"/10";
  document.getElementById("qQ").innerHTML =  questionArr[i].quizQ;
  document.getElementById("a1").innerHTML = questionArr[i].option1;
  document.getElementById("a2").innerHTML = questionArr[i].option2;
  document.getElementById("a3").innerHTML = questionArr[i].option3;
  document.getElementById("a4").innerHTML = questionArr[i].option4;

};

for(; i < 10;){
    i++;
